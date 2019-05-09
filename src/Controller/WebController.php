<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('web/index.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/contact/maps", name="contact_maps")
     */
    public function contact_maps()
    {
        return $this->render('web/contact/contact_maps.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("/contact/messenger", name="contact_messenger")
     */
    public function contact_messenger()
    {
        return $this->render('web/contact/contact_messenger.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/politics/corporate", name="politics_corporate")
     */
    public function politics_corporate()
    {
        return $this->render('web/politics/politics_corporate.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/politics/resource", name="politics_resource")
     */
    public function politics_resource()
    {
        return $this->render('web/politics/politics_resource.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/politics/quality", name="politics_quality")
     */
    public function politics_quality()
    {
        return $this->render('web/politics/politics_quality.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/politics/confidentiality", name="politics_confidentiality")
     */
    public function politics_confidentiality()
    {
        return $this->render('web/politics/politics_confidentiality.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }



}

