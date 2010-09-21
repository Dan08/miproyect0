<?php
// auto-generated by sfPropelCrud
// date: 2010/08/03 04:03:47
?>
<?php

/**
 * actividadproyecto actions.
 *
 * @package    indicadores
 * @subpackage actividadproyecto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class actividadproyectoActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('actividadproyecto', 'list');
  }

  public function executeList()
  {
    /**
     * Si no se tiene ningun parametro, se muestra la lista de proyectos, si se tiene
     * el parametro proyecto, se muestra la lista de actividades asociadas a ese proyecto
     */
    if ($this->getRequestParameter('proyecto')) {
      $c = new Criteria();
      $c->add(ActividadProyectoPeer::PROYECTO_ID, $this->getRequestParameter('proyecto'));
      $this->actividad_proyectos = ActividadProyectoPeer::doSelect($c);

    // listar proyectos
    } else {
      $this->proyectos = ProyectoPeer::doSelect(new Criteria());
      $this->setTemplate('listProyectos');
    }
  }

  public function executeShow()
  {
    $this->actividad_proyecto = ActividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->actividad_proyecto);
  }

  public function executeCreate()
  {
    $this->actividad_proyecto = new ActividadProyecto();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->actividad_proyecto = ActividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->actividad_proyecto);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $actividad_proyecto = new ActividadProyecto();
    }
    else
    {
      $actividad_proyecto = ActividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($actividad_proyecto);
    }

    $actividad_proyecto->setId($this->getRequestParameter('id'));
    $actividad_proyecto->setProyectoId($this->getRequestParameter('proyecto_id') ? $this->getRequestParameter('proyecto_id') : null);
    $actividad_proyecto->setMetaPdId($this->getRequestParameter('meta_pd_id') ? $this->getRequestParameter('meta_pd_id') : null);
    $actividad_proyecto->setMetaProyectoId($this->getRequestParameter('meta_proyecto_id') ? $this->getRequestParameter('meta_proyecto_id') : null);
    $actividad_proyecto->setActividad($this->getRequestParameter('actividad'));
    $actividad_proyecto->setDescripcion($this->getRequestParameter('descripcion'));
    $actividad_proyecto->setPonderacion($this->getRequestParameter('ponderacion'));

    $actividad_proyecto->save();

    return $this->redirect('actividadproyecto/show?id='.$actividad_proyecto->getId());
  }

  public function executeDelete()
  {
    $actividad_proyecto = ActividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($actividad_proyecto);

    $actividad_proyecto->delete();

    return $this->redirect('actividadproyecto/list');
  }
}
