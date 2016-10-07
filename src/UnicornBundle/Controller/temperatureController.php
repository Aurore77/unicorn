<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\temperature;

/**
 * temperature controller.
 *
 */
class temperatureController extends Controller
{
    /**
     * Lists all temperature entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $temperatures = $em->getRepository('UnicornBundle:temperature')->findAll();

        return $this->render('temperature/index.html.twig', array(
            'temperatures' => $temperatures,
        ));
    }

    /**
     * Finds and displays a temperature entity.
     *
     */
    public function showAction(temperature $temperature)
    {

        return $this->render('temperature/show.html.twig', array(
            'temperature' => $temperature,
        ));
    }
}
