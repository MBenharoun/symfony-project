<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    /**
     * @Route("/calcul", name="calcul")
     */
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'calcul',
        ]);
    }
    /**
     * @Route("/calcul/addition", name="add")
     */
    public function addition(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'addition',
        ]);
    }
    /**
     * @Route("/calcul/soustraction", name="sous")
     */
    public function sous(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'soustraction',
        ]);
    }
    /**
     * @Route("/calcul/multiplication", name="multi")
     */
    public function multi(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'multiplication',
        ]);
    }
    /**
     * @Route("/calcul/division", name="div")
     */
    public function div(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'division',
        ]);
    }
    /**
     * @Route("/calcul/modulo", name="mod")
     */
    public function mod(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'modulo',
        ]);
    }

    /**
     * @Route("/.../.../{number1}", methods={"GET"})
     */
    public function number1(): Response
    {
        return $this->render('calcul/index.html.twig', [

        ]);
    }
}


