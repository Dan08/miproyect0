<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:16:47
?>
<?php

/**
 * subactividadejecucion actions.
 *
 * @package    indicadores
 * @subpackage subactividadejecucion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class subactividadejecucionActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('subactividadejecucion', 'list');
  }

  public function executeList()
  {
    // listar subactividades
    if ($this->getRequestParameter('actividad'))
    {
      $c = new Criteria();
      $c->add(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, $this->getRequestParameter('actividad'));
      
      $this->subactividad_proyectos = SubactividadProyectoPeer::doSelect($c);
      $this->setTemplate('listSubActividades');
    // listar actividades
    } elseif ($this->getRequestParameter('proyecto'))
    {
      $c = new Criteria();
      $c->add(ActividadProyectoPeer::PROYECTO_ID, $this->getRequestParameter('proyecto'));
      $this->actividad_proyectos = ActividadProyectoPeer::doSelect($c);
      $this->setTemplate('listActividades');

    // listar proyectos
    } else {
      $this->proyectos = ProyectoPeer::doSelect(new Criteria());
      $this->setTemplate('listProyectos');
    }
    //$this->subactividad_ejecucions = SubactividadEjecucionPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->subactividad_ejecucion = SubactividadEjecucionPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->subactividad_ejecucion);
  }

  public function executeCreate()
  {
    // tomar el identificador de la subactividad
    $this->id = $this->getRequestParameter('subactividad');
    // consultar el numero de mediciones que existen
    $this->subactividad = SubactividadProyectoPeer::retrieveByPK($this->id);
    $this->subactividad_ejecucion = new SubactividadEjecucion();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->subactividad_ejecucion = SubactividadEjecucionPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->subactividad_ejecucion);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $subactividad_ejecucion = new SubactividadEjecucion();
    }
    else
    {
      $subactividad_ejecucion = SubactividadEjecucionPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($subactividad_ejecucion);
    }

    $subactividad_ejecucion->setId($this->getRequestParameter('id'));
    $subactividad_ejecucion->setSubactividadProyectoId($this->getRequestParameter('subactividad_proyecto_id') ? $this->getRequestParameter('subactividad_proyecto_id') : null);
    $subactividad_ejecucion->setMes($this->getRequestParameter('mes'));
    $subactividad_ejecucion->setAvance($this->getRequestParameter('avance'));

    $subactividad_ejecucion->save();

    return $this->redirect('subactividadejecucion/show?id='.$subactividad_ejecucion->getId());
  }

  public function executeDelete()
  {
    $subactividad_ejecucion = SubactividadEjecucionPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($subactividad_ejecucion);

    $subactividad_ejecucion->delete();

    return $this->redirect('subactividadejecucion/list');
  }
}
