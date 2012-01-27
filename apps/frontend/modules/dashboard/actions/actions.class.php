<?php

/**
 * dashboard actions.
 *
 * @package    pubudec
 * @subpackage dashboard
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dashboardActions extends sfActions {

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request) {
    $this->autores = Doctrine_Core::getTable('Autor')
            ->createQuery('a')
            ->orderBy('nombre ASC')
            ->execute();
    $this->form = new BuscadorForm();
  }

  public function executeAjax(sfWebRequest $request) {
    $this->getResponse()->setContentType('application/json');

    $autores = Doctrine::getTable('Autor')->getAutoresBySearch(
            $request->getParameter('q'), $request->getParameter('limit')
    );

    return $this->renderText(json_encode($autores));
  }

  public function executeResultado(sfWebRequest $request) {
    $autor_id = $request->getParameter('autor');
    $tipo_pub_id = $request->getParameter('tipo');
    $this->resultados = Doctrine_Query::create()
    ->select('*')
    ->from('Publicacion p,Autor a')
    ->where('p.autor_id = ?',2)
    ->andWhere('p.estado = ?',$tipo_pub_id)
    //->orWhere('p.created_at BETWEEN ? AND ?',array($request->getParameter('desde'),$request->getParameter('hasta')))
    ->execute();
  }

}
