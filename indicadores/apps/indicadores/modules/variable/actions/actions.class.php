<?php
// auto-generated by sfPropelCrud
// date: 2009/02/04 17:12:26
?>
<?php

/**
 * variable actions.
 *
 * @package    indicadores
 * @subpackage variable
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class variableActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('variable', 'list');
  }

  public function executeList()
  {
    $this->variables = VariablePeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->variable = VariablePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->variable);
  }

  public function executeCreate()
  {
    $this->variable = new Variable();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->variable = VariablePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->variable);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $variable = new Variable();
    }
    else
    {
      $variable = VariablePeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($variable);
    }

    $variable->setId($this->getRequestParameter('id'));
    $variable->setNombre($this->getRequestParameter('nombre'));
    $variable->setDescripcion($this->getRequestParameter('descripcion'));

    $variable->save();

    return $this->redirect('variable/show?id='.$variable->getId());
  }

  public function executeDelete()
  {
    $variable = VariablePeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($variable);

    $variable->delete();

    return $this->redirect('variable/list');
  }
}
