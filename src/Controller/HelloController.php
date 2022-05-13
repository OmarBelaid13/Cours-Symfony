<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController {

    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    
    /**
     * @Route("/hello/{prenom?World}", name="hello", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */
    public function hello(string $prenom, Slugify $slug, Environment $twig)
    {
        dump($twig);
        dump($slug->slugify("Hello World"));

        $tva = $this->calculator->calcul(100);
        dump($tva);

        return new Response("Hello $prenom !");
    }
}