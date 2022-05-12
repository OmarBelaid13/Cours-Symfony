<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

    /**
     * @Route("/hello/{prenom?World}", name="hello", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */
    public function hello(string $prenom)
    {
        return new Response("Hello $prenom !");
    }
}