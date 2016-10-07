<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\unicornByUser;

/**
 * unicornByUser controller.
 *
 */
class unicornByUserController extends Controller
{
    /**
     * Lists all unicornByUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $unicornByUsers = $em->getRepository('UnicornBundle:unicornByUser')->findAll();

        return $this->render('unicornbyuser/index.html.twig', array(
            'unicornByUsers' => $unicornByUsers,
        ));
    }

    /**
     * Finds and displays a unicornByUser entity.
     *
     */
    public function showAction(unicornByUser $unicornByUser)
    {

        return $this->render('unicornbyuser/show.html.twig', array(
            'unicornByUser' => $unicornByUser,
        ));
    }
}
