<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\cornColor;

/**
 * cornColor controller.
 *
 */
class cornColorController extends Controller
{
    /**
     * Lists all cornColor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cornColors = $em->getRepository('UnicornBundle:cornColor')->findAll();

        return $this->render('corncolor/index.html.twig', array(
            'cornColors' => $cornColors,
        ));
    }

    /**
     * Finds and displays a cornColor entity.
     *
     */
    public function showAction(cornColor $cornColor)
    {

        return $this->render('corncolor/show.html.twig', array(
            'cornColor' => $cornColor,
        ));
    }
}
