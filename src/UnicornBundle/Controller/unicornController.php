<?php

namespace UnicornBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UnicornBundle\Entity\unicorn;
use UnicornBundle\Form\unicornType;

/**
 * unicorn controller.
 *
 */
class unicornController extends Controller
{
    /**
     * Lists all unicorn entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $unicorns = $em->getRepository('UnicornBundle:unicorn')->findAll();

        return $this->render('unicorn/index.html.twig', array(
            'unicorns' => $unicorns,
        ));
    }

    /**
     * Creates a new unicorn entity.
     *
     */
    public function newAction(Request $request)
    {
        $unicorn = new unicorn();
        $form = $this->createForm('UnicornBundle\Form\unicornType', $unicorn);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unicorn);
            $em->flush();

            return $this->redirectToRoute('unicorn_show', array('id' => $unicorn->getId()));
        }

        return $this->render('unicorn/new.html.twig', array(
            'unicorn' => $unicorn,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a unicorn entity.
     *
     */
    public function showAction(unicorn $unicorn)
    {
        $deleteForm = $this->createDeleteForm($unicorn);

        return $this->render('unicorn/show.html.twig', array(
            'unicorn' => $unicorn,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing unicorn entity.
     *
     */
    public function editAction(Request $request, unicorn $unicorn)
    {
        $deleteForm = $this->createDeleteForm($unicorn);
        $editForm = $this->createForm('UnicornBundle\Form\unicornType', $unicorn);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unicorn);
            $em->flush();

            return $this->redirectToRoute('unicorn_edit', array('id' => $unicorn->getId()));
        }

        return $this->render('unicorn/edit.html.twig', array(
            'unicorn' => $unicorn,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a unicorn entity.
     *
     */
    public function deleteAction(Request $request, unicorn $unicorn)
    {
        $form = $this->createDeleteForm($unicorn);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($unicorn);
            $em->flush();
        }

        return $this->redirectToRoute('unicorn_index');
    }

    /**
     * Creates a form to delete a unicorn entity.
     *
     * @param unicorn $unicorn The unicorn entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(unicorn $unicorn)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unicorn_delete', array('id' => $unicorn->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
