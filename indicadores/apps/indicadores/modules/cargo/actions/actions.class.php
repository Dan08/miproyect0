<?php
// auto-generated by sfPropelCrud
// date: 2009/03/10 16:40:12
?>
<?php

/**
 * cargo actions.
 *
 * @package    indicadores
 * @subpackage cargo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class cargoActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('cargo', 'list');
  }

  public function executeList()
  {
    $this->cargos = CargoPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->cargo = CargoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cargo);
  }

  public function executeCreate()
  {
    $this->cargo = new Cargo();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->cargo = CargoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cargo);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $cargo = new Cargo();
    }
    else
    {
      $cargo = CargoPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($cargo);
    }

    $cargo->setId($this->getRequestParameter('id'));
    $cargo->setNombre($this->getRequestParameter('nombre'));
    $cargo->setDependenciaId($this->getRequestParameter('dependencia_id') ? $this->getRequestParameter('dependencia_id') : null);

    $cargo->save();

    return $this->redirect('cargo/show?id='.$cargo->getId());
  }

  public function executeDelete()
  {
    $cargo = CargoPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($cargo);

    $cargo->delete();

    return $this->redirect('cargo/list');
  }
}
