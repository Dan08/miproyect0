<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:13:41
?>
<?php

/**
 * cliente actions.
 *
 * @package    indicadores
 * @subpackage cliente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class clienteActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('cliente', 'list');
  }

  public function executeList()
  {
    $this->clientes = ClientePeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->cliente = ClientePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cliente);
  }

  public function executeCreate()
  {
    $this->cliente = new Cliente();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->cliente = ClientePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cliente);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $cliente = new Cliente();
    }
    else
    {
      $cliente = ClientePeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($cliente);
    }

    $cliente->setId($this->getRequestParameter('id'));
    $cliente->setCliente($this->getRequestParameter('cliente'));

    $cliente->save();

    return $this->redirect('cliente/show?id='.$cliente->getId());
  }

  public function executeDelete()
  {
    $cliente = ClientePeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($cliente);

    $cliente->delete();

    return $this->redirect('cliente/list');
  }
}
