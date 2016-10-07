<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\furColor;

/**
 * furColor controller.
 *
 */
class furColorController extends Controller
{
    /**
     * Lists all furColor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $furColors = $em->getRepository('UnicornBundle:furColor')->findAll();

        return $this->render('furcolor/index.html.twig', array(
            'furColors' => $furColors,
        ));
    }

    /**
     * Finds and displays a furColor entity.
     *
     */
    public function showAction(furColor $furColor)
    {

        return $this->render('furcolor/show.html.twig', array(
            'furColor' => $furColor,
        ));
    }
}
