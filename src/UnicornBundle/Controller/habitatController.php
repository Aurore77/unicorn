<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\habitat;

/**
 * habitat controller.
 *
 */
class habitatController extends Controller
{
    /**
     * Lists all habitat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habitats = $em->getRepository('UnicornBundle:habitat')->findAll();

        return $this->render('habitat/index.html.twig', array(
            'habitats' => $habitats,
        ));
    }

    /**
     * Finds and displays a habitat entity.
     *
     */
    public function showAction(habitat $habitat)
    {

        return $this->render('habitat/show.html.twig', array(
            'habitat' => $habitat,
        ));
    }
}
