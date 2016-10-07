<?php

namespace UnicornBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\furTexture;

/**
 * furTexture controller.
 *
 */
class furTextureController extends Controller
{
    /**
     * Lists all furTexture entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $furTextures = $em->getRepository('UnicornBundle:furTexture')->findAll();

        return $this->render('furtexture/index.html.twig', array(
            'furTextures' => $furTextures,
        ));
    }

    /**
     * Finds and displays a furTexture entity.
     *
     */
    public function showAction(furTexture $furTexture)
    {

        return $this->render('furtexture/show.html.twig', array(
            'furTexture' => $furTexture,
        ));
    }
}
