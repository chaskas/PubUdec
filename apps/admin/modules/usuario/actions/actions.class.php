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
    $this->form = new sfGuardUserForm();
  }
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($publicacion = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object publicacion does not exist (%s).', $request->getParameter('id')));
    $publicacion->delete();

    $this->redirect('usuario/index');
  }
}
