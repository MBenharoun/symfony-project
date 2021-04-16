<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MesEntity\Post;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        $array =
            [
                "Raphael",
                "Robin",
                "Antoine",
                "Nicolas",
                "Tom"
            ];

        $mesPosts =
            [
                new Post(1, 1, "Hello PHP", "On fait du Symfony"),
                new Post(2, 1, "Hello C#", "On fait du C#"),
                new Post(3, 1, "Hello JS", "On fait du JS"),
                new Post(4, 1, "Hello", "On fait du CodeCombat"),
            ];

        return $this->render('post/index.html.twig',
            [
                'controller_name' => 'PostController',
                'personnes' => $array,
                'mesPosts' => $mesPosts
            ]);
    }
        /**
         * @Route("/post/1", name="post1")
         */
        public
        function post1(): Response
        {
            $array =
                [
                    "Raphael",
                    "Robin",
                    "Antoine",
                    "Nicolas",
                    "Tom"
                ];

            $mesPosts =
                    new Post(1, 1, "Hello PHP", "On fait du Symfony");

            return $this->render('post/index.html.twig',
                [
                    'controller_name' => 'PostController',
                    'personnes' => $array,
                    'mesPosts' => $mesPosts
                ]);
        }
    /**
     * @Route("/post/2", name="post2")
     */
    public
    function post2(): Response
    {
        $array =
            [
                "Raphael",
                "Robin",
                "Antoine",
                "Nicolas",
                "Tom"
            ];

        $mesPosts = new Post(2, 1, "Hello C#", "On fait du C#");


        return $this->render('post/index.html.twig',
            [
                'controller_name' => 'PostController',
                'personnes' => $array,
                'mesPosts' => $mesPosts
            ]);
    }
    /**
     * @Route("/post/3", name="post3")
     */
    public
    function post3(): Response
    {
        $array =
            [
                "Raphael",
                "Robin",
                "Antoine",
                "Nicolas",
                "Tom"
            ];

        $mesPosts =
            new Post(3, 1, "Hello JS", "On fait du JS");

        return $this->render('post/index.html.twig',
            [
                'controller_name' => 'PostController',
                'personnes' => $array,
                'mesPosts' => $mesPosts
            ]);
    }
    /**
     * @Route("/post/4", name="post4")
     */
    public
    function post4(): Response
    {
        $array =
            [
                "Raphael",
                "Robin",
                "Antoine",
                "Nicolas",
                "Tom"
            ];

        $mesPosts =

                new Post(4, 1, "Hello", "On fait du CodeCombat");

        return $this->render('post/index.html.twig',
            [
                'controller_name' => 'PostController',
                'personnes' => $array,
                'mesPosts' => $mesPosts
            ]);
    }
}
