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
     * @Route("/enterprise/about", name="about")
     * Empresa QUIENES SOMOS
     */
    public function enterprise_about()
    {
        return $this->render('web/enterprise/about.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/enterprise/mission", name="mission")
     * Empresa MISION
     */
    public function enterprise_mission()
    {
        return $this->render('web/enterprise/mission.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/enterprise/view", name="view")
     * Empresa VISION
     */
    public function enterprise_view()
    {
        return $this->render('web/enterprise/view.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("/politics/corporate", name="corporate")
     * Politica  VALORES CORPORATIVOS
     */
    public function politics_corporate()
    {
        return $this->render('web/politics/corporate.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/politics/resource", name="resource")
     * Politica  RECURSO HUMANO
     */
    public function politics_resource()
    {
        return $this->render('web/politics/resource.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/politics/quality", name="quality")
     * Politica  POLITICA DE CALIDAD
     */
    public function politics_quality()
    {
        return $this->render('web/politics/quality.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/politics/confidentiality", name="confidentiality")
     * Politica  POLITICA DE CONFIDENCIALIDAD
     */
    public function politics_confidentiality()
    {
        return $this->render('web/politics/confidentiality.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("/briefcase/polygraphy", name="polygraphy")
     * portafolio POLIGRAFIA
     */
    public function briefcase_polygraphy()
    {
        return $this->render('web/briefcase/polygraphy.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/briefcase/management", name="management")
     * portafolio GESTION
     */
    public function briefcase_management()
    {
        return $this->render('web/briefcase/management.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/briefcase/personal", name="personal")
     * portafolio ESTUDIOS Y  PRE SELECCION DE PERSONAL
     */
    public function briefcase_personal()
    {
        return $this->render('web/briefcase/personal.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("/briefcase/information", name="information")
     * portafolio ADMINISTRACION ESTRATEGICA DE LA INFORMACION
     */
    public function briefcase_information()
    {
        return $this->render('web/briefcase/information.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/briefcase/security", name="security")
     * portafolio ESTRATEGIAS DE SEGURIDAD Y ADMINISTRACION DEL RIESGO
     */
    public function briefcase_security()
    {
        return $this->render('web/briefcase/security.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/contact/messenger", name="messenger")
     * contacto ESCRIBANOS
     */
    public function contact_messenger()
    {
        return $this->render('web/contact/messenger.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


}

