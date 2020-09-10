<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="pages.home")
     */
    public function home(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    /**
     * @Route("/about-us", name="pages.about")
     */
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }
}
