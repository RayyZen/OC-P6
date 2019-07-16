<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TricksController extends AbstractController
{

    /**
    * @Route("/", name="tricks_index")
    */
	public function index()
	{

		return $this->render('tricks/index.html.twig');

	}

	/**
    * @Route("/add", name="tricks_new")
    */
	public function NewTricks()
	{

		return $this->render('tricks/new.html.twig');

	}

}