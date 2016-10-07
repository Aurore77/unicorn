<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\hoof;

/**
 * hoof controller.
 *
 */
class hoofController extends Controller
{
    /**
     * Lists all hoof entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hoofs = $em->getRepository('UnicornBundle:hoof')->findAll();

        return $this->render('hoof/index.html.twig', array(
            'hoofs' => $hoofs,
        ));
    }

    /**
     * Finds and displays a hoof entity.
     *
     */
    public function showAction(hoof $hoof)
    {

        return $this->render('hoof/show.html.twig', array(
            'hoof' => $hoof,
        ));
    }
}
