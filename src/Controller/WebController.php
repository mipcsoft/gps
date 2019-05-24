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

    /**
    * @Route("/briefcase/polygraphy", name="briefcase_polygraphy")
    * Poligrafía
    */
    public function briefcase_polygraphy()
    {
        return $this->render('web/briefcase/briefcase_polygraphy.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/briefcase/management", name="briefcase_management")
     * Gestión
     */
    public function briefcase_management()
    {
        return $this->render('web/briefcase/briefcase_management.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/briefcase/personal", name="briefcase_personal")
     * Estudios y pre selección de personal
     */
    public function briefcase_personal()
    {
        return $this->render('web/briefcase/briefcase_personal.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/briefcase/information", name="briefcase_information")
     * Administración estratégica de la información
     */
    public function briefcase_information()
    {
        return $this->render('web/briefcase/briefcase_information.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/briefcase/security", name="briefcase_security")
     * Estrategias de seguridad y administración del riesgo
     */
    public function briefcase_security()
    {
        return $this->render('web/briefcase/briefcase_security.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/enterprise/about", name="enterprise_about")
     * Empresa quienes somos
     */
    public function enterprise_about()
    {
        return $this->render('web/enterprise/enterprise_about.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/enterprise/mission", name="enterprise_mission")
     * Empresa Mision
     */
    public function enterprise_mission()
    {
        return $this->render('web/enterprise/enterprise_mission.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/enterprise/view", name="enterprise_view")
     * Empresa Vision
     */
    public function enterprise_view()
    {
        return $this->render('web/enterprise/enterprise_view.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


}

