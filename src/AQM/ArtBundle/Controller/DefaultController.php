<?php

namespace AQM\ArtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AQMArtBundle:Default:index.html.twig');
    }
}
