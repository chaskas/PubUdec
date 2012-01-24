<?php

/**
 * autor actions.
 *
 * @package    pubudec
 * @subpackage autor
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class autorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->autors = Doctrine_Core::getTable('Autor')
      ->createQuery('a')
      ->orderBy('nombre ASC')
      ->execute();
  }

  public function executeNuevo(sfWebRequest $request)
  {
    $this->form = new AutorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AutorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('nuevo');
  }

  public function executeEditar(sfWebRequest $request)
  {
    $this->forward404Unless($autor = Doctrine_Core::getTable('Autor')->find(array($request->getParameter('id'))), sprintf('Object autor does not exist (%s).', $request->getParameter('id')));
    $this->form = new AutorForm($autor);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($autor = Doctrine_Core::getTable('Autor')->find(array($request->getParameter('id'))), sprintf('Object autor does not exist (%s).', $request->getParameter('id')));
    $this->form = new AutorForm($autor);

    $this->processForm($request, $this->form);

    $this->setTemplate('editar');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($autor = Doctrine_Core::getTable('Autor')->find(array($request->getParameter('id'))), sprintf('Object autor does not exist (%s).', $request->getParameter('id')));
    $autor->delete();

    $this->redirect('autor/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $autor = $form->save();

      $this->redirect('autor/editar?id='.$autor->getId());
    }
  }
}
