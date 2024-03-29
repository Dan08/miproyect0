<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:24:27
?>
<?php

/**
 * clienteact actions.
 *
 * @package    indicadores
 * @subpackage clienteact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class clienteactActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('clienteact', 'list');
  }

  public function executeList()
  {
    $this->cliente_actividads = ClienteActividadPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->cliente_actividad = ClienteActividadPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cliente_actividad);
  }

  public function executeCreate()
  {
    $this->cliente_actividad = new ClienteActividad();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->cliente_actividad = ClienteActividadPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cliente_actividad);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $cliente_actividad = new ClienteActividad();
    }
    else
    {
      $cliente_actividad = ClienteActividadPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($cliente_actividad);
    }

    $cliente_actividad->setId($this->getRequestParameter('id'));
    $cliente_actividad->setClienteId($this->getRequestParameter('cliente_id') ? $this->getRequestParameter('cliente_id') : null);
    $cliente_actividad->setActividadId($this->getRequestParameter('actividad_id') ? $this->getRequestParameter('actividad_id') : null);
    $cliente_actividad->setMonto($this->getRequestParameter('monto'));
    $cliente_actividad->setCantidad($this->getRequestParameter('cantidad'));

    $cliente_actividad->save();

    return $this->redirect('clienteact/show?id='.$cliente_actividad->getId());
  }

  public function executeDelete()
  {
    $cliente_actividad = ClienteActividadPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($cliente_actividad);

    $cliente_actividad->delete();

    return $this->redirect('clienteact/list');
  }
}
