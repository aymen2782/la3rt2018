<?php

namespace Insat\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@InsatFirst/Default/index.html.twig');
    }
}
