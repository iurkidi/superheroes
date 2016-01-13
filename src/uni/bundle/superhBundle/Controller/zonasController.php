<?php

namespace uni\bundle\superhBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;

use uni\bundle\superhBundle\Entity\zonas;
use uni\bundle\superhBundle\Form\zonasType;

/**
 * zonas controller.
 *
 */
class zonasController extends Controller
{

    /**
     * Lists all zonas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSuperhBundle:zonas')->findAll();
        
        $superhZona=new ArrayCollection();
        $nomZona=null;

        return $this->render('uniSuperhBundle:zonas:index.html.twig', array(
            'entities' => $entities,
            'eSuperH' => $superhZona,
            'nomZona' => $nomZona
        ));
    }
    
    
        /**
     * Respuesta de pagina de busqueda de zonas.
     *
     */
    public function buscarZonaRespAction(Request $req)
    {
        $idZona = $req->request->get('nombre');
        $nomZona = $req->request->get('nomOculto');
        $em = $this->getDoctrine()->getManager();
        //echo($nomZona);
        
//        $superhZona = $em->getRepository('uniSuperhBundle:superheroe')->  findByZona($idZona);
        
        $superhZona = $em->getRepository('uniSuperhBundle:zonas')->  find($idZona);
        
        $entities = $em->getRepository('uniSuperhBundle:zonas')->findAll();

        return $this->render('uniSuperhBundle:zonas:index.html.twig', array(
            'entities' => $entities,
            'eSuperH' => $superhZona,
            'nomZona' => $nomZona
        ));
    }
    
    
    /**
     * Creates a new zonas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new zonas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('zonas_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSuperhBundle:zonas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a zonas entity.
     *
     * @param zonas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(zonas $entity)
    {
        $form = $this->createForm(new zonasType(), $entity, array(
            'action' => $this->generateUrl('zonas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new zonas entity.
     *
     */
    public function newAction()
    {
        $entity = new zonas();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSuperhBundle:zonas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a zonas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:zonas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find zonas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSuperhBundle:zonas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing zonas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:zonas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find zonas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSuperhBundle:zonas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a zonas entity.
    *
    * @param zonas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(zonas $entity)
    {
        $form = $this->createForm(new zonasType(), $entity, array(
            'action' => $this->generateUrl('zonas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing zonas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:zonas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find zonas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('zonas_edit', array('id' => $id)));
        }

        return $this->render('uniSuperhBundle:zonas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a zonas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSuperhBundle:zonas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find zonas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('zonas'));
    }

    /**
     * Creates a form to delete a zonas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('zonas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
