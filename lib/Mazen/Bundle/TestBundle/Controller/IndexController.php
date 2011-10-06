<?php
/*
 * This file is part of the HUB Project
 *
 * copyright 2011 Marcel Beerta <marcel@etcpasswd.de>
 */
namespace Mazen\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        $security = $this->get('security.context');
        $token = $security->getToken();
        
        return $this->render('MazenTestBundle:Index:index.html.twig', array(
        ));
    }
}