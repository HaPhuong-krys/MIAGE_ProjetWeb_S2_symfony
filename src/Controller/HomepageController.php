<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/")
     */
    public function home(): Response
    {
        return new Response('Homepage Page!');
    }

    /**
     * @Route("/contact")
     */
    public function contact(): Response
    {
        return new Response('Conctact Page!');
    }

    /**
     * @Route("hello/{firstname}/{lastname}")
     */
    public function hello(string $firstname, string $lastname): Response
    {
        return new Response(sprintf('coucou %s %s', $firstname, $lastname));
    }

    /**
     * @Route("hello1/{firstname<[A-Z a-z]+>}/{lastname<[A-Z a-z]+>}")
     */
    public function hello1(string $firstname, string $lastname): Response
    {
        return new Response(sprintf('coucou %s %s', $firstname, $lastname));
    }

    /**
     * @Route("/home")
     */
    public function home1(){
        return $this->render('homepage/index.html.twig');
    }

}
