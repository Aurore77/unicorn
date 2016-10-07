<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\eyeColor;

/**
 * eyeColor controller.
 *
 */
class eyeColorController extends Controller
{
    /**
     * Lists all eyeColor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eyeColors = $em->getRepository('UnicornBundle:eyeColor')->findAll();

        return $this->render('eyecolor/index.html.twig', array(
            'eyeColors' => $eyeColors,
        ));
    }

    /**
     * Finds and displays a eyeColor entity.
     *
     */
    public function showAction(eyeColor $eyeColor)
    {

        return $this->render('eyecolor/show.html.twig', array(
            'eyeColor' => $eyeColor,
        ));
    }
}
