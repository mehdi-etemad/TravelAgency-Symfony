<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PanelMainController extends AbstractController
{
    public function index(): Response
    {
		return new Response("");
        //return $this->render('panel_main/index.html.twig');
    }
	
	public function test($param) : Response {
		return new Response($param);
	}
}