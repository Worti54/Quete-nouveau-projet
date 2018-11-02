<?php

// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/")
     */
    public function list()
    {
        $slug = "Article Sans Titre";
        return $this->render('blog/index.html.twig', ['slug' => $slug]);
    }


    /**
     * @Route("/blog/{slug}", name="blog_show", requirements={"slug"="[a-z0-9\-]+"})
     */
    public function show($slug)
    {

            $slug = str_replace("-", " ", $slug);
            $slug = ucwords($slug);


        return $this->render('blog/index.html.twig', ['slug'=> $slug]);
    }
}