<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\hairType;

/**
 * hairType controller.
 *
 */
class hairTypeController extends Controller
{
    /**
     * Lists all hairType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hairTypes = $em->getRepository('UnicornBundle:hairType')->findAll();

        return $this->render('hairtype/index.html.twig', array(
            'hairTypes' => $hairTypes,
        ));
    }

    /**
     * Finds and displays a hairType entity.
     *
     */
    public function showAction(hairType $hairType)
    {

        return $this->render('hairtype/show.html.twig', array(
            'hairType' => $hairType,
        ));
    }
}
