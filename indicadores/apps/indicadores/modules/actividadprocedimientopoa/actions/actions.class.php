<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:24:46
?>
<?php

/**
 * actividadprocedimientopoa actions.
 *
 * @package    indicadores
 * @subpackage actividadprocedimientopoa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class actividadprocedimientopoaActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('actividadprocedimientopoa', 'list');
  }

  public function executeList()
  {
    $this->actividad_procedimiento_poas = ActividadProcedimientoPoaPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->actividad_procedimiento_poa = ActividadProcedimientoPoaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->actividad_procedimiento_poa);
  }

  public function executeCreate()
  {
    $this->actividad_procedimiento_poa = new ActividadProcedimientoPoa();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->actividad_procedimiento_poa = ActividadProcedimientoPoaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->actividad_procedimiento_poa);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $actividad_procedimiento_poa = new ActividadProcedimientoPoa();
    }
    else
    {
      $actividad_procedimiento_poa = ActividadProcedimientoPoaPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($actividad_procedimiento_poa);
    }

    $actividad_procedimiento_poa->setId($this->getRequestParameter('id'));
    $actividad_procedimiento_poa->setProcedimientoPoaId($this->getRequestParameter('procedimiento_poa_id') ? $this->getRequestParameter('procedimiento_poa_id') : null);
    $actividad_procedimiento_poa->setActividad($this->getRequestParameter('actividad'));
    $actividad_procedimiento_poa->setDescripcion($this->getRequestParameter('descripcion'));
    $actividad_procedimiento_poa->setPonderacion($this->getRequestParameter('ponderacion'));

    $actividad_procedimiento_poa->save();

    return $this->redirect('actividadprocedimientopoa/show?id='.$actividad_procedimiento_poa->getId());
  }

  public function executeDelete()
  {
    $actividad_procedimiento_poa = ActividadProcedimientoPoaPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($actividad_procedimiento_poa);

    $actividad_procedimiento_poa->delete();

    return $this->redirect('actividadprocedimientopoa/list');
  }
}
