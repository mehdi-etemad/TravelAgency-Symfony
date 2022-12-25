<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PanelMainController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('panel_main/index.html.twig');
    }
}