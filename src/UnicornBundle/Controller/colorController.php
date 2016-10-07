<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\color;

/**
 * color controller.
 *
 */
class colorController extends Controller
{
    /**
     * Lists all color entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colors = $em->getRepository('UnicornBundle:color')->findAll();

        return $this->render('color/index.html.twig', array(
            'colors' => $colors,
        ));
    }

    /**
     * Finds and displays a color entity.
     *
     */
    public function showAction(color $color)
    {

        return $this->render('color/show.html.twig', array(
            'color' => $color,
        ));
    }
}
