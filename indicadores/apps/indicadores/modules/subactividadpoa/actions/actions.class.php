<?php
// auto-generated by sfPropelCrud
// date: 2010/09/20 23:38:20
?>
<?php

/**
 * subactividadpoa actions.
 *
 * @package    indicadores
 * @subpackage subactividadpoa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class subactividadpoaActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('subactividadpoa', 'list');
  }

  public function executeList()
  {
    $this->subactividad_poas = SubactividadPoaPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->subactividad_poa = SubactividadPoaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->subactividad_poa);
  }

  public function executeCreate()
  {
    $this->subactividad_poa = new SubactividadPoa();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->subactividad_poa = SubactividadPoaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->subactividad_poa);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $subactividad_poa = new SubactividadPoa();
    }
    else
    {
      $subactividad_poa = SubactividadPoaPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($subactividad_poa);
    }

    $subactividad_poa->setId($this->getRequestParameter('id'));
    $subactividad_poa->setProcedimientoId($this->getRequestParameter('procedimiento_id') ? $this->getRequestParameter('procedimiento_id') : null);
    $subactividad_poa->setDescripcion($this->getRequestParameter('descripcion'));
    $subactividad_poa->setResponsable($this->getRequestParameter('responsable'));
    $subactividad_poa->setEntregable($this->getRequestParameter('entregable'));
    if ($this->getRequestParameter('fecha_inicio'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_inicio'), $this->getUser()->getCulture());
      $subactividad_poa->setFechaInicio("$y-$m-$d");
    }
    $subactividad_poa->setDuracion($this->getRequestParameter('duracion'));
    $subactividad_poa->setPonderacion($this->getRequestParameter('ponderacion'));

    $subactividad_poa->save();

    return $this->redirect('subactividadpoa/show?id='.$subactividad_poa->getId());
  }

  public function executeDelete()
  {
    $subactividad_poa = SubactividadPoaPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($subactividad_poa);

    $subactividad_poa->delete();

    return $this->redirect('subactividadpoa/list');
  }
}