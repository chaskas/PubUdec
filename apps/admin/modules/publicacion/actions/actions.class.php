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
  public function executeIndex(sfWebRequest $request)
  {
    $this->publicacions = Doctrine_Core::getTable('Publicacion')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PublicacionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PublicacionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($publicacion = Doctrine_Core::getTable('Publicacion')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new PublicacionForm($publicacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($publicacion = Doctrine_Core::getTable('Publicacion')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new PublicacionForm($publicacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($publicacion = Doctrine_Core::getTable('Publicacion')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $publicacion->delete();

    $this->redirect('publicacion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $publicacion = $form->save();

      $this->redirect('publicacion/edit?id='.$publicacion->getId());
    }
  }
}
