<?php
// auto-generated by sfPropelCrud
// date: 2010/08/03 01:36:47
?>
<?php

/**
 * subactividadproyecto actions.
 *
 * @package    indicadores
 * @subpackage subactividadproyecto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class subactividadproyectoActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('subactividadproyecto', 'list');
  }

  public function executeList()
  {
    $this->subactividad_proyectos = SubactividadProyectoPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->subactividad_proyecto = SubactividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->subactividad_proyecto);
  }

  public function executeCreate()
  {
    $this->subactividad_proyecto = new SubactividadProyecto();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->subactividad_proyecto = SubactividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->subactividad_proyecto);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $subactividad_proyecto = new SubactividadProyecto();
    }
    else
    {
      $subactividad_proyecto = SubactividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($subactividad_proyecto);
    }

    $subactividad_proyecto->setId($this->getRequestParameter('id'));
    $subactividad_proyecto->setActividadProyectoId($this->getRequestParameter('actividad_proyecto_id') ? $this->getRequestParameter('actividad_proyecto_id') : null);
    $subactividad_proyecto->setDescripcion($this->getRequestParameter('descripcion'));
    $subactividad_proyecto->setEntregable($this->getRequestParameter('entregable'));
    if ($this->getRequestParameter('fecha_inicio'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_inicio'), $this->getUser()->getCulture());
      $subactividad_proyecto->setFechaInicio("$y-$m-$d");
    }
    $subactividad_proyecto->setDuracion($this->getRequestParameter('duracion'));
    $subactividad_proyecto->setPonderacion($this->getRequestParameter('ponderacion'));

    $subactividad_proyecto->save();

    return $this->redirect('subactividadproyecto/show?id='.$subactividad_proyecto->getId());
  }

  public function executeDelete()
  {
    $subactividad_proyecto = SubactividadProyectoPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($subactividad_proyecto);

    $subactividad_proyecto->delete();

    return $this->redirect('subactividadproyecto/list');
  }
}
