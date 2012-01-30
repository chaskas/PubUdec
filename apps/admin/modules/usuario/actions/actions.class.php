<?php

/**
 * publicacion actions.
 *
 * @package    pubudec
 * @subpackage publicacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioActions extends sfActions
{
  public function executeIndex(){
    $this->usuarios = Doctrine_Core::getTable('sfGuardUser')
      ->createQuery('a')
      ->orderBy('first_name ASC')
      ->execute();
  }
  public function executeNuevo(sfWebRequest $request)
  {
    $this->form = new sfGuardUserAdminForm();
  }
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardUserAdminForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('nuevo');
  }
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($usuario = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserAdminForm($usuario);

    $this->processForm($request, $this->form);

    $this->setTemplate('editar');
  }
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $usuario = $form->save();

      $this->redirect('usuario/editar?id='.$usuario->getId());
    }
  }
  public function executeEditar(sfWebRequest $request)
  {
    $this->forward404Unless($usuario = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserAdminForm($usuario);
  }
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($publicacion = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $publicacion->delete();

    $this->redirect('usuario/index');
  }
}
