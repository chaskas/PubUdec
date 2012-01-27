<?php

/**
 * publicacion actions.
 *
 * @package    pubudec
 * @subpackage publicacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class publicacionActions extends sfActions
{
  public function executeNueva(sfWebRequest $request)
  {
    $this->autor = Doctrine_Core::getTable('Autor')->find($request->getParameter('autor_id'));
    $pub = new Publicacion();
    $pub->setAutorId($request->getParameter('autor_id'));
    $this->form = new PublicacionForm($pub);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PublicacionForm();

    $this->processForm($request, $this->form);

    $this->autor = Doctrine_Core::getTable('Autor')->find($request->getParameter('autor_id'));
    $this->setTemplate('nueva');
//    $this->redirect('publicacion/nueva?autor_id='.$request->getParameter('autor_id'));
  }
  
  public function executeEditar(sfWebRequest $request)
  {
    $this->autor = Doctrine_Core::getTable('Autor')->find($request->getParameter('autor_id'));
    $this->forward404Unless($publicacion = Doctrine_Core::getTable('Publicacion')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new PublicacionForm($publicacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($publicacion = Doctrine_Core::getTable('Publicacion')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new PublicacionForm($publicacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('editar');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($publicacion = Doctrine_Core::getTable('Publicacion')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $publicacion->delete();

    $this->redirect('publicacion/autor?autor_id='.$request->getParameter('autor_id'));
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $publicacion = $form->save();

      $this->redirect('publicacion/editar?id='.$publicacion->getId().'&autor_id='.$request->getParameter('autor_id'));
    }
  }
  
  public function executeAutor(sfWebRequest $request)
  {
    $this->forward404Unless($this->autor = Doctrine_Core::getTable('Autor')->find($request->getParameter('autor_id')),sprintf('No hay publicaciones de ese autor.', $request->getParameter('autor_id')));
    
    $this->publicaciones = Doctrine_Core::getTable('Publicacion')->findByAutorId($this->autor->getId());
  }
}
