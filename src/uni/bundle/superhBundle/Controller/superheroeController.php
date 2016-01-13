<?php

namespace uni\bundle\superhBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\superhBundle\Entity\superheroe;
use uni\bundle\superhBundle\Form\superheroeType;

/**
 * superheroe controller.
 *
 */
class superheroeController extends Controller
{

    /**
     * Lists all superheroe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSuperhBundle:superheroe')->findAll();

        return $this->render('uniSuperhBundle:superheroe:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
     /**
     * Lists all superheroe entities.
     *
     */
    public function buscarSuperHAction()
    {        
        
        $nomTipo=null;
        
        return $this->render('uniSuperhBundle:superheroe:buscarSuperh.html.twig', array(
            'nomTipo' => $nomTipo,            
        ));
    }
    
    public function respSuperHAction(Request $res)
    { 
        $nom= $res->request->get('superh'); // Modo symfony2
         
        $em = $this->getDoctrine()->getManager();
        
//        $dql = "select s from uniSuperhBundle:tipos s where s.nombre like :nombre";
//        $query = $em->createQuery($dql);
//        $query->setParameter('nombre', '%'.$nom.'%');
//        $entities = $query->getResult();
        
        $entity = $em->getRepository('uniSuperhBundle:tipos')->  findOneByNombre($nom);       
        
        return $this->render('uniSuperhBundle:superheroe:buscarSuperh.html.twig', array(
            'tabla' => $entity,
            'nomTipo' => $nom
        ));
    }
    
    /**
     * 
     *
     */
    public function createAction(Request $request)
    {
        $entity = new superheroe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('superheroe_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSuperhBundle:superheroe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a superheroe entity.
     *
     * @param superheroe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(superheroe $entity)
    {
        $form = $this->createForm(new superheroeType(), $entity, array(
            'action' => $this->generateUrl('superheroe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new superheroe entity.
     *
     */
    public function newAction()
    {
        $entity = new superheroe();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSuperhBundle:superheroe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a superheroe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:superheroe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find superheroe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSuperhBundle:superheroe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing superheroe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:superheroe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find superheroe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSuperhBundle:superheroe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a superheroe entity.
    *
    * @param superheroe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(superheroe $entity)
    {
        $form = $this->createForm(new superheroeType(), $entity, array(
            'action' => $this->generateUrl('superheroe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing superheroe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSuperhBundle:superheroe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find superheroe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('superheroe_edit', array('id' => $id)));
        }

        return $this->render('uniSuperhBundle:superheroe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a superheroe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSuperhBundle:superheroe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find superheroe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('superheroe'));
    }

    /**
     * Creates a form to delete a superheroe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('superheroe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
