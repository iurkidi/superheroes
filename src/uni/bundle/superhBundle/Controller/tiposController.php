<?php

namespace uni\bundle\superhBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\superhBundle\Entity\tipos;
use uni\bundle\superhBundle\Form\tiposType;

/**
 * tipos controller.
 *
 */
class tiposController extends Controller
{

    /**
     * Lists all tipos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSuperhBundle:tipos')->findAll();

        return $this->render('uniSuperhBundle:tipos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tipos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tipos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipos_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSuperhBundle:tipos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tipos entity.
     *
     * @param tipos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tipos $entity)
    {
        $form = $this->createForm(new tiposType(), $entity, array(
            'action' => $this->generateUrl('tipos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tipos entity.
     *
     */
    public function newAction()
    {
        $entity = new tipos();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSuperhBundle:tipos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:tipos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSuperhBundle:tipos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:tipos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSuperhBundle:tipos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tipos entity.
    *
    * @param tipos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tipos $entity)
    {
        $form = $this->createForm(new tiposType(), $entity, array(
            'action' => $this->generateUrl('tipos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tipos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:tipos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipos_edit', array('id' => $id)));
        }

        return $this->render('uniSuperhBundle:tipos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tipos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSuperhBundle:tipos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tipos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipos'));
    }

    /**
     * Creates a form to delete a tipos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
