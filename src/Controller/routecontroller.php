<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RegisterType;
use App\Form\FilterType;
use App\Entity\User;
use App\Entity\Message;
use App\Entity\Book;
use App\Entity\Categorie;
use App\Entity\Auteur;
use App\Entity\Commentaire;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\BookRepository;
use App\Repository\CategorieRepository;
use App\Repository\AuteurRepository;
use App\Repository\UserRepository;
use App\Repository\BookLikeRepository;
use App\Repository\CommentaireRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use App\Entity\BookLike;

class routecontroller extends AbstractController
{



    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();

        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);
    }



        /**
     * @Route("/", name="hom")
     */
    public function index1(BookRepository $BookRepository,AuteurRepository $AuteurRepository)
    {

        return $this->render('index.html.twig', [
            'controller_name' => 'routecontroller','books'=>$BookRepository->findAll(),'auteurs'=>$AuteurRepository->findAll()
        ]);
    }


    /**
     * @Route("/home", name="home")
     */
    public function index(BookRepository $BookRepository,AuteurRepository $AuteurRepository)
    {

        return $this->render('index.html.twig', [
            'controller_name' => 'routecontroller','books'=>$BookRepository->findAll(),'auteurs'=>$AuteurRepository->findAll()
        ]);
    }

    /**
     * @Route("/categories", name="categories")
     */
    public function categorie(CategorieRepository $CategorieRepository)
    {

        return $this->render('categories.html.twig', [
            'controller_name' => 'routecontroller','categories'=>$CategorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/books", name="books")
     */
    public function books(BookRepository $BookRepository,Request $request)
    {


$form = $this->createForm(FilterType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
          //  dump($form);
            $categorie = $form->get('categorie')->getdata();

            return $this->redirectToRoute('filter_books', ['id' => $categorie]);
        }


        return $this->render('books.html.twig', [
            'controller_name' => 'routecontroller','books'=>$BookRepository->findAll(),'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/filter_books/{id}", name="filter_books", methods={"GET"})
     */
    public function filter(BookRepository $BookRepository,$id,CategorieRepository $CategorieRepository) :Response
    {


       $categorie = $id;
        $cat = $CategorieRepository->findOneBy(array('name' => $categorie));
        $book = $BookRepository->findBy(['categorie' => $cat->getId()]);
        return $this->render('filter.html.twig', [
            'books' => $book
        ]);

    /* $book=$BookRepository->findBy(['categorie'=>$id]);
        return $this->render('filter.html.twig', [
            'books' => $book,
        ]);*/
    }

    /**
     * @Route("/filter_book/{id}", name="filter_pagecat", methods={"GET"})
     */
    public function filter_books_from_page_cat(BookRepository $BookRepository,$id,CategorieRepository $CategorieRepository) :Response
    {


       $categorie = $id;
        $cat = $CategorieRepository->findOneBy(array('id' => $categorie));
        $book = $BookRepository->findBy(['categorie' => $cat->getId()]);
        return $this->render('filter.html.twig', [
            'books' => $book
        ]);
    }


        /**
     * @Route("/filter_book_aut/{id}", name="filter_pageaut", methods={"GET"})
     */
    public function filter_books_from_page_aut(BookRepository $BookRepository,$id,AuteurRepository $AuteurRepository) :Response
    {


       $auteur = $id;
        $aut = $AuteurRepository->findOneBy(array('id' => $auteur));
        $book = $BookRepository->findBy(['auteur' => $aut->getId()]);
        return $this->render('filter.html.twig', [
            'books' => $book
        ]);
    }



    /**
     * @Route("/book/{id}", name="book")
     */
    public function book($id)
    {

$repo=$this->getDoctrine()->getRepository(Book::class);
        $book=$repo->find($id);
        return $this->render('book.html.twig', [
            'controller_name' => 'routecontroller','book'=>$book
        ]);
    }
    

  /**
     * @Route("/comment/{id}", name="comment")
     */
    public function comment(BookRepository $repo,$id,Request $request,ObjectManager $manager)
    {


  $books=$repo->findAll();
   $repo=$this->getDoctrine()->getRepository(Book::class);
   $commentaire =new Commentaire();
   $user = new User();
   $book=new Book();
        if($request->request->count()>0)
      {
$commentaire->setCreatedAt(new \DateTime('now'));
      $user = $this->getUser();
      $commentaire->setUser($user);
   $book=$repo->find($id); 
   $commentaire->setBook($book);                
                      
   $commentaire->setdescription($request->request->get('description'));

        
        $manager->persist($commentaire);
        $manager->flush();
        

    }

        return $this->render('book.html.twig', [
            'controller_name' => 'routecontroller','book'=>$book
        ]);
}



    /**
     * @Route("/customer_account", name="security_login")
     */
     public function customer_account()
    {


        return $this->render('customer-account.html.twig', [
            'controller_name' => 'routecontroller'
        ]);
}




    /**
     * @Route("/deconnexion", name="logout")
     */
     public function logout()
     {

     }

    /**
     * @Route("/store_pages", name="store_pages")
     */
    public function store_pages()
    {

        return $this->render('store Pages.html.twig', [
            'controller_name' => 'routecontroller'
        ]);
    }



    /**
     * @Route("/contactus", name="contactus")
     */
    public function contactus()
    {

        return $this->render('contact.html.twig', [
            'controller_name' => 'routecontroller'
        ]);
    }



    /**
     * @Route("/about", name="about")
     */
    public function about()
    {

        return $this->render('about.html.twig', [
            'controller_name' => 'routecontroller'
        ]);
    }


  /**
     * @Route("/contact", name="contact")
     */
    public function register(Request $request,ObjectManager $manager,BookRepository $BookRepository,AuteurRepository $AuteurRepository)
    {

$message =new Message();
  
        if($request->request->count()>0)
      {

      
                    
                       $message->setUsername($request->request->get('username'));
                       $message->setEmail($request->request->get('email'));
                       $message->setPhone($request->request->get('phone'));
                        $message->setMessage($request->request->get('message'));

        
        $manager->persist($message);
        $manager->flush();
        

    }

        return $this->render('index.html.twig', [
            'controller_name' => 'routecontroller','books'=>$BookRepository->findAll(),'auteurs'=>$AuteurRepository->findAll()
        ]);
}





/**
     * @Route("/inscription", name="inscription")
     */
     public function inscription(Request $request,ObjectManager $manager,UserPasswordEncoderInterface $encoder)
    {

$user =new User();
      $form = $this->createForm(RegisterType::class,$user);
      $form->handleRequest($request);
      if($form->isSubmitted()&& $form->isValid())
      {

        $file=$form->get('image')->getData();
                        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                     try {
                            $file->move(
                            $this->getParameter('image_directory'),
                            $fileName 
                        );
                            } catch (FileException $e) {
                            // ... handle exception if something happens during file upload
                         }            
                       $user->setImage($fileName);
                       $user->setRoles(['ROLE_USER']);
                      // $user->setUsername('');


        $hash = $encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($hash);
        $manager->persist($user);
        $manager->flush();
        return $this->redirectToRoute('security_login');

    }

        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'routecontroller','form'=>$form->createView()
        ]);
}

/**
* @return string
*/
private function generateUniqueFileName()
{
// md5() reduces the similarity of the file names generated by
// uniqid(), which is based on timestamps
return md5(uniqid());
}


    /**
     * @Route("/authors", name="authors")
     */
    public function authors(AuteurRepository $AuteurRepository)
    {

        return $this->render('Authors.html.twig', [
            'controller_name' => 'routecontroller','auteurs'=>$AuteurRepository->findAll(),
        ]);
    }



    /**
     * @Route("/authors/{id}", name="author_profile")
     */
    public function author($id)
    {
$repo=$this->getDoctrine()->getRepository(Auteur::class);
        $auteur=$repo->find($id);
        return $this->render('author-profile.html.twig', [
            'controller_name' => 'routecontroller','auteur'=>$auteur
        ]);
    }




    /**
     * @Route(path = "/admin/user/activer", name = "activer")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function activer(Request $request)
    {
        // change the properties of the given entity and save the changes
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);

        $id = $request->query->get('id');
        $user = $repository->find($id);
        $user->setRoles([0=>'ROLE_USER',1=>'ROLE_ADMIN']);
        $em->flush();

        // redirect to the 'list' view of the given entity ...
     /*   return $this->redirectToRoute('easyadmin', array(
            'action' => 'list',
            'entity' => $this->request->query->get('User'),
        ));

}*/
return $this->redirectToRoute('easyadmin', ['entity' => 'User']);

    }


##dashboard



    /**
     * @Route("/my_dashboard", name="my_dashboard")
     */
    public function my_dashboard()
    {

        return $this->render('my-dashboard.html.twig', [
            'controller_name' => 'routecontroller',
        ]);
    }




/**
     * @Route("/edit_my_profile", name="edit_my_profile")
     */
     public function edit_my_profile(Request $request,ObjectManager $manager,UserPasswordEncoderInterface $encoder)
    {

$user =new User();
$user = $this->getUser();
      $form = $this->createForm(RegisterType::class,$user);
      $form->handleRequest($request);
      if($form->isSubmitted()&& $form->isValid())
      {

        $file=$form->get('image')->getData();
                        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                     try {
                            $file->move(
                            $this->getParameter('image_directory'),
                            $fileName 
                        );
                            } catch (FileException $e) {
                            // ... handle exception if something happens during file upload
                         }            
                       $user->setImage($fileName);

                    /*   if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
                       {
                       
                        $user->setRoles([0=>'ROLE_USER',1=>'ROLE_ADMIN']);
                       }*/
                    
                       if(($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))and ($this->get('security.authorization_checker')->isGranted('ROLE_USER')))
                       {
                     
                        
                      $user->setRoles([0=>'ROLE_USER',1=>'ROLE_ADMIN']);
                        
                       }elseif($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
                       {
                         $user->setRoles(['ROLE_USER']);
                       }
                  


        $hash = $encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($hash);
/*
$path = $this->container->getParameter('kernel.root_dir') . '/../img/users/logo.png';

$fs = new Filesystem();
$fs->remove($path);
*/
         $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('my_dashboard');

    }

        return $this->render('edit_my_profile.html.twig', [
            'controller_name' => 'routecontroller','form'=>$form->createView()
        ]);
}




/**
     * @Route(path="/post/{id}/like", name="book_like", methods={"GET"})
     * @param Book $book
     * @param ObjectManager $manager
     * @param BookLikeRepository $repository
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function like(
        Book $book,
        ObjectManager $manager,
        BookLikeRepository $repository
    ):Response{
        $user = $this->getUser();

        if (!$user) return $this->json([
            'code' => 403,
            'message' => 'Unauthorized'
            ], 403);

       if ($book->isLikeByUser($user)) {
            $like = $repository->findOneBy([
                'book' => $book,
                'user' => $user
                ]);

            $manager->remove($like);
            $manager->flush();

            return $this->json([
                'code' => 200,
                'message' => 'Like supprimer',
                'likes' => $repository->count(['book' => $book])
            ], 200);
        }
      
$like =new BookLike();
$like->setBook($book);
        $like->setUser($user);



        $manager->persist($like);
      
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'Like bien ajouté',
            'likes' => $repository->count(['book' => $book])
            ], 200);
    }



    /**
     * @Route("/allcomment", name="allcomment")
     */
    public function allcomment(CommentaireRepository $repo)
    {

        return $this->render('allcomment.html.twig', [
            'controller_name' => 'routecontroller','commentaires'=>$repo->findAll(),
        ]);
    }



}
