<?php

/**
 * tipo actions.
 *
 * @package    pubudec
 * @subpackage tipo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tipos = Doctrine_Core::getTable('Tipo')
      ->createQuery('a')
      ->execute();
  }

  public function executeNuevo(sfWebRequest $request)
  {
    $this->form = new TipoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('nuevo');
  }

  public function executeEditar(sfWebRequest $request)
  {
    $this->forward404Unless($tipo = Doctrine_Core::getTable('Tipo')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoForm($tipo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tipo = Doctrine_Core::getTable('Tipo')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoForm($tipo);

    $this->processForm($request, $this->form);

    $this->setTemplate('editar');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tipo = Doctrine_Core::getTable('Tipo')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $tipo->delete();

    $this->redirect('tipo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tipo = $form->save();

      $this->redirect('tipo/editar?id='.$tipo->getId());
    }
  }
}
