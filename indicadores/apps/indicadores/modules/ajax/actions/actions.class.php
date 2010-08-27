<?php

/**
 * ajax actions.
 *
 * @package    indicadores
 * @subpackage ajax
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class ajaxActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }

  /**
   * Obtiene la sumatoria de ponderaciones de una meta y la envia por ajax
   */
  public function executeActividad()
  {
    $this->metapd = MetaPdPeer::retrieveByPK($this->getRequestParameter('meta'));
  }

  public function  executeSubactividad()
  {
    $this->actividad = ActividadProyectoPeer::retrieveByPK($this->getRequestParameter('actividad'));
  }

  public function executeActividadporproyecto()
  {
    $this->actividades = ActividadProyectoPeer::doSelectByProyecto($this->getRequestParameter('proyecto'));
  }
}
