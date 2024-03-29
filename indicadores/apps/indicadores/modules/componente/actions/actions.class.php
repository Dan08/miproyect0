<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:14:27
?>
<?php

/**
 * componente actions.
 *
 * @package    indicadores
 * @subpackage componente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class componenteActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('componente', 'list');
  }

  public function executeList()
  {
    $this->componentes = ComponentePeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->componente = ComponentePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->componente);
  }

  public function executeCreate()
  {
    $this->componente = new Componente();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->componente = ComponentePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->componente);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $componente = new Componente();
    }
    else
    {
      $componente = ComponentePeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($componente);
    }

    $componente->setId($this->getRequestParameter('id'));
    $componente->setCodigo($this->getRequestParameter('codigo'));
    $componente->setComponente($this->getRequestParameter('componente'));

    $componente->save();

    return $this->redirect('componente/show?id='.$componente->getId());
  }

  public function executeDelete()
  {
    $componente = ComponentePeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($componente);

    $componente->delete();

    return $this->redirect('componente/list');
  }
}
