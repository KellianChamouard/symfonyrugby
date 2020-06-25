<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Club;
use App\Entity\Docs;
use App\Entity\News;
use App\Entity\Site;
use App\Entity\User;
use App\Entity\Match;
use App\Entity\Notes;
use App\Entity\Staff;
use App\Entity\Teams;
use App\Entity\Player;
use App\Entity\Social;
use App\Form\ClubType;
use App\Form\DocsType;
use App\Form\NewsType;
use App\Form\NoteType;
use App\Form\SiteType;
use App\Form\UserType;
use App\Form\DirigType;
use App\Form\StaffType;
use App\Form\SocialType;
use App\Entity\Dirigeant;
use App\Form\AddTeamType;
use App\Form\AddMatchType;
use App\Form\AddPlayerType;
use App\Form\ModifTeamType;
use App\Form\ModifPlayerType;
use App\Entity\LetterTemplate;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/admin/accueil", name="home")
     */
    public function index(SessionInterface $session, Request $request)
    {
        // Récup des infos 

        $userid = $this->getUser()->getId();
        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        $persodoc = $this->getDoctrine()->getRepository(Docs::class)->findBy(array('docauthor' => $userid));

        $newsstate = $this->getDoctrine()->getRepository(News::class)->findBy(array('news_state' => '0'));

        $alldocs = $this->getDoctrine()->getRepository(Docs::class)->findAll();

        // Ajout de documents

        $docs = new Docs();
        $formdoc = $this->createForm(DocsType::class, $docs);
        $formdoc->handleRequest($request);
        $user = $this->getUser();
        $docs->setDocauthor($user);

        if ($formdoc->isSubmitted() && $formdoc->isValid()) {
            /** @var UploadedFile $brochureFile */
            $docFile = $formdoc->get('doclink')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($docFile) {
                $originalFilename = pathinfo($docFile->getClientOriginalName(), PATHINFO_FILENAME);
                

                // Move the file to the directory where brochures are stored
                try {
                    $docFile->move(
                        $this->getParameter('doc_directory'),
                        $originalFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $docs->setDocname($originalFilename);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($docs);
                $entityManager->flush();

                return $this->redirectToRoute('home');
            }
        }

        // Ajout et recupération des notes

        $notes = $this->getDoctrine()->getRepository(Notes::class)->findAll();
        $note = new Notes();
        $form = $this->createForm(NoteType::class, $note);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($note);
            $entityManager->flush();
        return $this->redirectToRoute('home');
        }
        
        // rendu template

        return $this->render('home/index.html.twig', [
            'page_name' => 'Accueil',
            'form' => $form->createView(),
            'formdoc' => $formdoc->createView(),
            'notes' => $notes,
            'site' => $site,
            'club' => $club,
            'persodoc' => $persodoc,
            'alldocs' => $alldocs,
            'docs' => $docs,
            'newsstate' => $newsstate,
        ]);
    }

    /**
     * @Route("/admin/articles", name="articles")
     */
    public function articles(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        // Ajout et recupération des notes
        $user = $this->getUser();

        $allnews = $this->getDoctrine()->getRepository(News::class)->findAll();

        $news = new News();

        $news->setNewsAuthor($user);

        $form = $this->createForm(NewsType::class, $news);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();
        return $this->redirectToRoute('articles');
        }

        return $this->render('home/articles.html.twig', [
            'page_name' => 'Articles',
            'form' => $form->createView(),
            'site' => $site,
            'club' => $club,
            'allnews' => $allnews,
        ]);
    }

    /**
     * @Route("/admin/joueurs", name="joueurs")
     */
    public function joueurs(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        
        $entityManager = $this->getDoctrine()->getManager();
        $allplayers = $this->getDoctrine()->getRepository(Player::class)->findAll();
        $arrieres = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Arrière'));
        $ailiers = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Ailier'));
        $centres = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Centre'));
        $demiouvertures = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Demi d\'ouverture'));
        $demimelees = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Demi de Mêlée'));
        $troisiemelignes = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Troisième Ligne'));
        $secondelignes = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Seconde Ligne'));
        $piliers = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Pilier'));
        $talonneurs = $this->getDoctrine()->getRepository(Player::class)->findBy(array('player_poste' => 'Talonneur'));

        $player = new Player();
        $form = $this->createForm(AddPlayerType::class, $player);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        /** @var UploadedFile $brochureFile */
        $docFile = $form->get('player_photo')->getData();

        // this condition is needed because the 'brochure' field is not required
        // so the PDF file must be processed only when a file is uploaded
        if ($docFile) {
            $originalFilename = pathinfo($docFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($docFile->getClientOriginalName(), PATHINFO_EXTENSION);

            // Move the file to the directory where brochures are stored
            try {
                $docFile->move(
                    $this->getParameter('doc_directory'),
                    $originalFilename.'.'.$extension
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            $player->setPlayerPhoto($originalFilename.'.'.$extension);
          
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($player);
         $entityManager->flush();
    
            return $this->redirectToRoute('joueurs');
        }}

        return $this->render('home/joueurs.html.twig', [
            'page_name' => 'Joueurs',
            'site' => $site,
            'club' => $club,
            'allplayers' => $allplayers,
            'arrieres' => $arrieres,
            'ailiers' => $ailiers,
            'centres' => $centres,
            'demiouvertures' => $demiouvertures,
            'demimelees' => $demimelees,
            'troisiemelignes' => $troisiemelignes,
            'secondeslignes' => $secondelignes,
            'piliers' => $piliers,
            'talonneurs' => $talonneurs,
            'form' => $form->createView(),
        ]);
    
}

    /**
     * @Route("/admin/staff", name="staff")
     */
    public function staff(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        
        $entityManager = $this->getDoctrine()->getManager();
        $allstaff = $this->getDoctrine()->getRepository(Staff::class)->findAll();
        $entraineurs = $this->getDoctrine()->getRepository(Staff::class)->findBy(array('staff_poste' => 'Entraineur'));
        $coentraineurs = $this->getDoctrine()->getRepository(Staff::class)->findBy(array('staff_poste' => 'Co-Entraineur'));

        $staff = new Staff();
        $form = $this->createForm(StaffType::class, $staff);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        /** @var UploadedFile $brochureFile */
        $docFile = $form->get('staff_photo')->getData();

        // this condition is needed because the 'brochure' field is not required
        // so the PDF file must be processed only when a file is uploaded
        if ($docFile) {
            $originalFilename = pathinfo($docFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($docFile->getClientOriginalName(), PATHINFO_EXTENSION);

            // Move the file to the directory where brochures are stored
            try {
                $docFile->move(
                    $this->getParameter('doc_directory'),
                    $originalFilename.'.'.$extension
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            $staff->setStaffPhoto($originalFilename.'.'.$extension);
          
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($staff);
         $entityManager->flush();
    
            return $this->redirectToRoute('staff');
        }}

        return $this->render('home/staff.html.twig', [
            'page_name' => 'Staff',
            'site' => $site,
            'club' => $club,
            'allstaff' => $allstaff,
            'entraineurs' => $entraineurs,
            'coentraineurs' => $coentraineurs,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/dirigeants", name="dirigeants")
     */
    public function dirigeants(Request $request)
    {
        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        $entityManager = $this->getDoctrine()->getManager();
        $presidents = $this->getDoctrine()->getRepository(Dirigeant::class)->findBy(array('dirig_poste' => 'Président'));
        $copresidents = $this->getDoctrine()->getRepository(Dirigeant::class)->findBy(array('dirig_poste' => 'Co-Président'));

        $dirig = new Dirigeant();
        $form = $this->createForm(DirigType::class, $dirig);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        /** @var UploadedFile $brochureFile */
        $docFile = $form->get('dirig_photo')->getData();

        // this condition is needed because the 'brochure' field is not required
        // so the PDF file must be processed only when a file is uploaded
        if ($docFile) {
            $originalFilename = pathinfo($docFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($docFile->getClientOriginalName(), PATHINFO_EXTENSION);

            // Move the file to the directory where brochures are stored
            try {
                $docFile->move(
                    $this->getParameter('doc_directory'),
                    $originalFilename.'.'.$extension
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            $dirig->setDirigPhoto($originalFilename.'.'.$extension);
          
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($dirig);
         $entityManager->flush();
    
            return $this->redirectToRoute('dirigeants');
        }}

        return $this->render('home/dirigeants.html.twig', [
            'page_name' => 'Dirigeants',
            'site' => $site,
            'club' => $club,
            'president' => $presidents,
            'copresident' => $copresidents,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/club", name="club")
     */
    public function club(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        $entityManager = $this->getDoctrine()->getManager();
        $club = $entityManager->getRepository(Club::class)->find(1);

        $form = $this->createForm(ClubType::class, $club);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($club);
         $entityManager->flush();
    
            return $this->redirectToRoute('club');
        }

        return $this->render('home/club.html.twig', [
            'page_name' => 'Club',
            'site' => $site,
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/site", name="site")
     */
    public function site(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        $entityManager = $this->getDoctrine()->getManager();
        $site = $entityManager->getRepository(Site::class)->find(1);

        $form = $this->createForm(SiteType::class, $site);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($site);
         $entityManager->flush();
    
            return $this->redirectToRoute('app_logout');
        }

        return $this->render('home/site.html.twig', [
            'page_name' => 'Site',
            'site' => $site,
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/social", name="social")
     */
    public function instagram(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        $social = $this->getDoctrine()->getRepository(Social::class)->findOneBy(array('id' => '1'));

        // Mise a jour des liens réseaux sociaux

        $entityManager = $this->getDoctrine()->getManager();
        $social = $entityManager->getRepository(Social::class)->find(1);
        $form = $this->createForm(SocialType::class, $social);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($social);
        $entityManager->flush();
        return $this->redirectToRoute('social');
        }
        return $this->render('home/social.html.twig', [
            'page_name' => 'Réseaux Sociaux',
            'form' => $form->createView(),
            'site' => $site,
            'club' => $club,
            'social' => $social,
        ]);
    }

    /**
     * @Route("/admin/saison", name="saison")
     */
    public function saison(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        $teams = $this->getDoctrine()->getRepository(Teams::class)->findAll();
        $matchs = $this->getDoctrine()->getRepository(Match::class)->findAll();
        
        $entityManager = $this->getDoctrine()->getManager();
        
        $allteams = $entityManager->getRepository(Teams::class);
        $nbteams = $allteams->createQueryBuilder('a')
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $team = new Teams();
        $form = $this->createForm(AddTeamType::class, $team);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        /** @var UploadedFile $brochureFile */
        $docFile = $form->get('t_logo')->getData();

        // this condition is needed because the 'brochure' field is not required
        // so the PDF file must be processed only when a file is uploaded
        if ($docFile) {
            $originalFilename = pathinfo($docFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($docFile->getClientOriginalName(), PATHINFO_EXTENSION);

            // Move the file to the directory where brochures are stored
            try {
                $docFile->move(
                    $this->getParameter('doc_directory'),
                    $originalFilename.'.'.$extension
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            $team->setTLogo($originalFilename.'.'.$extension);
          
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($team);
         $entityManager->flush();
    
            return $this->redirectToRoute('saison');
        }}

        // Ajout d'un match
        $match = new Match();
        $matchform = $this->createForm(AddMatchType::class, $match);
        $matchform->handleRequest($request);

        if ($matchform->isSubmitted() && $matchform->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($match);
            $entityManager->flush();
        return $this->redirectToRoute('saison');
        }

        return $this->render('home/saison.html.twig', [
            'page_name' => 'Saison',
            'site' => $site,
            'club' => $club,
            'teams' => $teams,
            'matchs' => $matchs,
            'nbteams' => $nbteams,
            'form' => $form->createView(),
            'matchform' => $matchform->createView(),
        ]);
    }

    /**
     * @Route("/admin/utilisateurs", name="utilisateurs")
     */
    public function utilisateurs(Request $request)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        $allusers = $this->getDoctrine()->getRepository(User::class)->findAll();

        $user = new User();

        $user->setRoles(["ROLE_USER"]);

        $form = $this->createForm(UserType::class, $user);
        //->add('roles', TextType::class);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        /** @var UploadedFile $brochureFile */
        $docFile = $form->get('avatar')->getData();

        // this condition is needed because the 'brochure' field is not required
        // so the PDF file must be processed only when a file is uploaded
        if ($docFile) {
            $originalFilename = pathinfo($docFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = pathinfo($docFile->getClientOriginalName(), PATHINFO_EXTENSION);

            // Move the file to the directory where brochures are stored
            try {
                $docFile->move(
                    $this->getParameter('doc_directory'),
                    $originalFilename.'.'.$extension
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            $user->setAvatar($originalFilename.'.'.$extension);
          
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($user);
         $entityManager->flush();
    
            return $this->redirectToRoute('utilisateurs');
        }}

        return $this->render('home/utilisateurs.html.twig', [
            'page_name' => 'Utilisateurs',
            'site' => $site,
            'club' => $club,
            'allusers' => $allusers,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deleteplayer/{id}", name="delete_player")
     */

    public function deletePlayer(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $player = $entityManager->getRepository(Player::class)->find($id);
          
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($player);
        $entityManager->flush();

        return $this->redirectToRoute('joueurs');
    }

    /**
     * @Route("admin/modifplayer/{id}", name="modif_player")
     */

    public function modifPlayer(Request $request, $id)
    {
        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        $entityManager = $this->getDoctrine()->getManager();
        $player = $entityManager->getRepository(Player::class)->find($id);

        $playerphoto = $player->getPlayerPhoto();

        $form = $this->createForm(ModifPlayerType::class, $player)
        ->add('player_photo', TextType::class,[
            'data' => $playerphoto,
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($player);
        $entityManager->flush();
        return $this->redirectToRoute('joueurs');
        }

        return $this->render('home/modif_joueur.html.twig', [
            'page_name' => 'Modifier un Joueur',
            'site' => $site,
            'club' => $club,
            'player' => $player,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deletestaff/{id}", name="delete_staff")
     */

    public function deleteStaff(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $staff = $entityManager->getRepository(Staff::class)->find($id);
          
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($staff);
        $entityManager->flush();

        return $this->redirectToRoute('staff');
    }

    /**
     * @Route("/deletearticle/{id}", name="delete_article")
     */

    public function deleteArticle(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $news = $this->getDoctrine()->getRepository(News::class)->find($id);
          
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($news);
        $entityManager->flush();

        return $this->redirectToRoute('articles');
    }

    /**
     * @Route("/deletedirig/{id}", name="delete_dirig")
     */

    public function deleteDirigeant(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dirig = $this->getDoctrine()->getRepository(Dirigeant::class)->find($id);
          
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($dirig);
        $entityManager->flush();

        return $this->redirectToRoute('dirigeants');
    }

    /**
     * @Route("/templatelettre", name="templatelettre")
     */

    public function templete()
    {
        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        $letter = $this->getDoctrine()->getRepository(LetterTemplate::class)->findOneBy(array('id' => '1'));
        
        return $this->render('documents/templatelettre.html.twig', [
            'site' => $site,
            'club' => $club,
            'letter' => $letter,
        ]);
    }

    /**
     * @Route("/exportpdf", name="exportpdf")
     */

    public function exportpdf()
    {
        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        $letter = $this->getDoctrine()->getRepository(LetterTemplate::class)->findOneBy(array('id' => '1'));

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('documents/templatelettre.html.twig', [
            'title' => "Template de Lettre",
            'site' => $site,
            'club' => $club,
            'letter' => $letter,
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        $date = date('j/m/d');

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("template de Lettre du $date.pdf", [
            "Attachment" => true
        ]);
        
        return $this->render('documents/templatelettre.html.twig', [
            'site' => $site,
            'club' => $club,
            'letter' => $letter,
        ]);
    }

    /**
     * @Route("/change_article_state/{id}", name="change_article_state")
     */
    public function ChangeStateArticle(Request $request, $id)
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        $entityManager = $this->getDoctrine()->getManager();
        $news = $entityManager->getRepository(News::class)->find($id);

        $form = $this->createForm(NewsType::class, $news);

        $state = $news->getNewsState();
        
        $news->setNewsState(!$state);
          
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($news);
         $entityManager->flush();

        return $this->redirectToRoute('articles');
    ;
    }

    /**
     * @Route("/deletenote/{id}", name="delete_note")
     */

    public function deleteNote(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $note = $entityManager->getRepository(Notes::class)->find($id);
          
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($note);
        $entityManager->flush();

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/deleteteam/{id}", name="delete_team")
     */

    public function deleteTeam(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $team = $entityManager->getRepository(Teams::class)->find($id);
          
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($team);
        $entityManager->flush();

        return $this->redirectToRoute('saison');
    }

    /**
     * @Route("admin/modifteam/{id}", name="modif_team")
     */

    public function modifTeam(Request $request, $id)
    {
        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));
        $team = $this->getDoctrine()->getRepository(Teams::class)->findOneBy(array('id' => $id));

        $entityManager = $this->getDoctrine()->getManager();
        $modifteam = $entityManager->getRepository(Teams::class)->find($id);

        $teamlogo = $modifteam->getTLogo();

        $form = $this->createForm(ModifTeamType::class, $modifteam)
        ->add('t_logo', TextType::class,[
            'data' => $teamlogo,
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($modifteam);
        $entityManager->flush();
        return $this->redirectToRoute('saison');
        }

        return $this->render('home/modif_team.html.twig', [
            'page_name' => 'Modifier une Équipe',
            'site' => $site,
            'club' => $club,
            'modifteam' => $modifteam,
            'team' => $team,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/deletematch/{id}", name="delete_match")
     */

    public function deleteMatch(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $match = $entityManager->getRepository(Match::class)->find($id);
          
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($match);
        $entityManager->flush();

        return $this->redirectToRoute('saison');
    }

}