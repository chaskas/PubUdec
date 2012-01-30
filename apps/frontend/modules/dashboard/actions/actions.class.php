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
    
    //$this->forwardUnless($query = $request->getParameter('autor'), 'dashboard', 'resultado');
    
    $autor_id = $request->getParameter('autor');
    $tipo_pub_id = $request->getParameter('tipo');
    $desde = $request->getParameter('desde');
    $hasta = $request->getParameter('hasta');
    
    $q = Doctrine_Query::create()->select('*')->from('Publicacion p,Autor a');
    
    if(!empty($autor_id)){
      $q->andWhere("p.autor_id = ? ",$autor_id);
    }
    if(!empty($tipo_pub_id)){
      $q->andWhere("p.tipo_pub_id = ?",$tipo_pub_id);
    }
    
    if(!empty($desde['year']) && !empty($desde['month']) && !empty($desde['day']) && !empty($hasta['year']) && !empty($hasta['month']) && !empty($hasta['day'])){
      $q->andWhere("p.created_at BETWEEN ? and ?",array(
          $desde['year']."-".$desde['month']."-".$desde['day']." 00:00:00",
          $hasta['year']."-".$hasta['month']."-".$hasta['day']." 23:59:59"
          ));
    }

    $this->resultados = $q->execute();
  }

}
