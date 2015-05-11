<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SensioLabs\Security\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    /**
     * @Route("/wrong", name="wrong_homepage")
     */
    public function indexAction() {
        if (true) return $this->render('default/index.html.twig');
    }
}
