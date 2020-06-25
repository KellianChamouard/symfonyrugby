<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200625083021 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `match` ADD result_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT FK_7A5BC5057A7B643 FOREIGN KEY (result_id) REFERENCES result (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7A5BC5057A7B643 ON `match` (result_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY FK_7A5BC5057A7B643');
        $this->addSql('DROP INDEX UNIQ_7A5BC5057A7B643 ON `match`');
        $this->addSql('ALTER TABLE `match` DROP result_id');
    }
}
