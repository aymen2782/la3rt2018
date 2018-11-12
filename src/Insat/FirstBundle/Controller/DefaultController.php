<?php

namespace Insat\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        dump($request);
        $response = new Response('<h1>Bonjour</h1>');
        return $response;
        //        return $this->render('@InsatFirst/Default/index.html.twig');
    }
}
