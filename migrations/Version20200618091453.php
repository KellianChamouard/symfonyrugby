<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200618091453 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, player_name VARCHAR(255) NOT NULL, player_firstname VARCHAR(255) NOT NULL, player_age VARCHAR(255) NOT NULL, player_taille INT NOT NULL, player_poids INT NOT NULL, player_licence_number LONGTEXT NOT NULL, player_number INT NOT NULL, player_state TINYINT(1) NOT NULL, player_poste VARCHAR(255) NOT NULL, player_total_match INT NOT NULL, player_total_tries INT NOT NULL, player_total_points INT NOT NULL, player_photo LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE player');
    }
}
