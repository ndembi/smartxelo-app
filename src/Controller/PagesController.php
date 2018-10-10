<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class PagesController
{
   public function index(Environment $twig){
       return new Response ($twig->render('pages/welcome.html.twig'));

    }

}
