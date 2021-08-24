<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\Continent;
use App\Entity\User;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CommentFormType;
use App\Form\PostType;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use App\Service\ImageUploader;
use App\Service\Unsplash;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog", name="blog_", requirements={"id" = "\d+"})
 */
class PostController extends AbstractController
{
    /**
     * Method to blog page
     * 
     * @Route("", name="list")
     */
    public function index(PostRepository $postR): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postR->findAll(),
        ]);
    }

    /**
     * Method to picture gallery
     * @Route("/pictures", name="gallery")
     */
    public function galleryPic(ContinentRepository $continentRepository)
    {

        return $this->render('post/gallery.html.twig', [
            'continents' => $continentRepository->findAll(),
        ]);
    }

    /**
     * Method to continent's pictures
     * @Route("/pictures/{id}", name="continentPic")
     * 
     */
    public function continentPic(Continent $continent)
    {
    
        return $this->render('post/picbycontinent.html.twig', [
            'continent' => $continent,

        ]);
    }
    /**
     * Method to display the list of posts
     * @Route("/post", name="posts")
     *
     * @return void
     */
    public function postsList(PostRepository $postRepository, PaginatorInterface $paginator, Request $request)
    {
        //dd($postRepository);
        $postsList = $postRepository->findBy([], ['id'=>'DESC']);

        $posts = $paginator->paginate(
            $postsList,
            $request->query->getInt('page', 1),
            6
        );

      //  dd($postsList);
        return $this->render('post/postsList.html.twig', [
            "title" => "Articles",
            "postsList" => $postsList,
            'posts' => $posts,
        ]);
    }

    /**
     * Method to display the details of a post
     * @Route ("/post/{id}", name="post")
     *
     * @return void
     */
    public function detail(Post $post,UserRepository $user, Request $request, CommentRepository $commentRepository)
    {
        // dump($post);
        // dd($commentRepository->findBy(['post'=>$post]));
        //$post->getComments();
        $comments= $commentRepository->findBy(['post'=>$post], ['id'=>'DESC']);

        $newComment = new Comment();
        $form = $this->createForm(CommentFormType::class, $newComment);
        $form->handleRequest($request);
       // dd($this->getUser()->getNickname());

        if ($form->isSubmitted() && $form->isValid()) {
            // after the form is submitted 
          
            // Only connected users can comment
            $this->denyAccessUnlessGranted('ROLE_USER', $user, 'Accès refusé - Zone protégée');
           
            // we fetch user_id and post_id
            $newComment->setUser($this->getUser());
            $newComment->setPost($post);
            
            // we can save our data
            $em = $this->getDoctrine()->getManager();
            $em->persist($newComment);
            $em->flush();


            // if the transfert is ok, we add a message for user
            $this->addFlash('msg', "Votre commentaire a été publié" );

            // We redirect to the post
            return $this->redirectToRoute('blog_post', ['id'=> $post->getId()] );
        }

        return $this->render('post/post.html.twig', [
            "title" => $post->getTitle(),
            "comments" => $comments,
            "commentForm" => $form->createView(),
            "post"=>$post,
        ]);

    }

    /**
     * Method for adding a new post
     * 
     * @Route("/post/add", name="add")
     * 
     */
    public function addPost(Request $request, ImageUploader $imageUploader, UserRepository $user)
    {
        
        $this->denyAccessUnlessGranted('ROLE_USER', $user);

        // only members registrated and online can add a new post
        
        
        $newPost = new Post();

        $form = $this->createForm(PostType::class, $newPost);

        //dd($form);
        
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()){
        
            //we call the service imageuploaer and his upload method to upload picture on blog post
            $newFilename = $imageUploader->upload($form, 'picture');

            $newPost->setPicture($newFilename);
            $newPost->setUser($this->getUser());
          
            //we call the entitymanager (doing getDoctrine, getManager) to persist and save datas on the database
            $em= $this->getDoctrine()->getManager();
            $em->persist($newPost);
            $em->flush();

            // if the transfert is ok, we add a message for user
            $this->addFlash('msg', "Votre article a bien été posté" );

            return $this->redirectToRoute('blog_posts');
        }

        //if not ok it returns to the add post from
        return $this->render('post/add.html.twig', [
            'formPostAdd' => $form->createView(),
            // 'user' =>$user,
        ]);
    }
}