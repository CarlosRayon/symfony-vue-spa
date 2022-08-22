<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @Route("/{route}", name="vue_pages", requirements={"route"="^(?!.*api).+"} ,  methods={"GET"})
     */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * Define endpoints to data get data from Vue Components
     * @Route("/api/colors", name="colors_route")
     */
    public function colorsAction()
    {
        return  new JsonResponse(array('colors' => ['red', 'green', 'blue', 'yellow'], "success" => true));
    }
}
