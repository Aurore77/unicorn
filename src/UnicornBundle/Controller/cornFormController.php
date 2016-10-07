<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\cornForm;

/**
 * cornForm controller.
 *
 */
class cornFormController extends Controller
{
    /**
     * Lists all cornForm entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cornForms = $em->getRepository('UnicornBundle:cornForm')->findAll();

        return $this->render('cornform/index.html.twig', array(
            'cornForms' => $cornForms,
        ));
    }

    /**
     * Finds and displays a cornForm entity.
     *
     */
    public function showAction(cornForm $cornForm)
    {

        return $this->render('cornform/show.html.twig', array(
            'cornForm' => $cornForm,
        ));
    }
}
