<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:13:25
?>
<?php

/**
 * localidadactividad actions.
 *
 * @package    indicadores
 * @subpackage localidadactividad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class localidadactividadActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('localidadactividad', 'list');
  }

  public function executeList()
  {
    $this->localidad_actividads = LocalidadActividadPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->localidad_actividad = LocalidadActividadPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->localidad_actividad);
  }

  public function executeCreate()
  {
    $this->localidad_actividad = new LocalidadActividad();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->localidad_actividad = LocalidadActividadPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->localidad_actividad);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $localidad_actividad = new LocalidadActividad();
    }
    else
    {
      $localidad_actividad = LocalidadActividadPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($localidad_actividad);
    }

    $localidad_actividad->setId($this->getRequestParameter('id'));
    $localidad_actividad->setLocalidadId($this->getRequestParameter('localidad_id') ? $this->getRequestParameter('localidad_id') : null);
    $localidad_actividad->setActividadId($this->getRequestParameter('actividad_id') ? $this->getRequestParameter('actividad_id') : null);
    $localidad_actividad->setMonto($this->getRequestParameter('monto'));
    $localidad_actividad->setCantidad($this->getRequestParameter('cantidad'));

    $localidad_actividad->save();

    return $this->redirect('localidadactividad/show?id='.$localidad_actividad->getId());
  }

  public function executeDelete()
  {
    $localidad_actividad = LocalidadActividadPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($localidad_actividad);

    $localidad_actividad->delete();

    return $this->redirect('localidadactividad/list');
  }
}