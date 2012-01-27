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
  public function executePerfil(sfWebRequest $request)
  {
//    $this->autor = Doctrine_Core::getTable('Autor')->find(array($request->getParameter('id')));
//    $this->forward404Unless($this->autor);
    $this->autor = $this->getRoute()->getObject();
    
    $this->publicaciones = Doctrine_Core::getTable('Publicacion')
            ->createQuery('a')
            ->where('autor_id = ?', $this->autor->getId())
            ->orderBy('created_at DESC')
            ->execute();
  }
}
