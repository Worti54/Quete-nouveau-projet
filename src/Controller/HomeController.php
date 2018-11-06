<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        foreach ($categories as $category) {

            $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['category' => $category->getId()]);

            foreach ($articles as $article)
            {
                $category->addArticle($article);
            }

        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController', 'categories' => $categories, 'articles' => $articles,
        ]);
    }
}
