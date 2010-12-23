<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:30
?>
<?php

/**
 * contrato actions.
 *
 * @package    indicadores
 * @subpackage contrato
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class contratoActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('contrato', 'list');
  }

  public function executeList()
  {
    if (!$this->getRequestParameter('contrato')) {
      $this->setTemplate('BuscarContrato');
    } else {
      $c = new Criteria();
      $c->add(ContratoPeer::NUMERO, $this->getRequestParameter('contrato'));

      $this->contratos = ContratoPeer::doSelect($c);
    }
  }

  public function executeShow()
  {
    $this->contrato = ContratoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->contrato);
  }

  public function executeCreate()
  {
    $this->contrato = new Contrato();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->contrato = ContratoPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->contrato);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $contrato = new Contrato();
    }
    else
    {
      $contrato = ContratoPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($contrato);
    }

    $contrato->setId($this->getRequestParameter('id'));
    $contrato->setNumero($this->getRequestParameter('numero'));
    $contrato->setContratista($this->getRequestParameter('contratista'));
    if ($this->getRequestParameter('fecha_firma'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_firma'), $this->getUser()->getCulture());
      $contrato->setFechaFirma("$y-$m-$d");
    }
    if ($this->getRequestParameter('fecha_acta_inicio'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_acta_inicio'), $this->getUser()->getCulture());
      $contrato->setFechaActaInicio("$y-$m-$d");
    }
    if ($this->getRequestParameter('fecha_terminacion'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_terminacion'), $this->getUser()->getCulture());
      $contrato->setFechaTerminacion("$y-$m-$d");
    }
    if ($this->getRequestParameter('fecha_liquidacion'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_liquidacion'), $this->getUser()->getCulture());
      $contrato->setFechaLiquidacion("$y-$m-$d");
    }
    $contrato->setModalidadContratacion($this->getRequestParameter('modalidad_contratacion'));
    $contrato->setCantidad($this->getRequestParameter('cantidad'));
    $contrato->setUnidadMedida($this->getRequestParameter('unidad_medida'));
    $contrato->setClaseContrato($this->getRequestParameter('clase_contrato'));
    $contrato->setPlazo($this->getRequestParameter('plazo'));
    $contrato->setEstado($this->getRequestParameter('estado'));

    $contrato->save();

    return $this->redirect('contrato/show?id='.$contrato->getId());
  }

  public function executeDelete()
  {
    $contrato = ContratoPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($contrato);

    $contrato->delete();

    return $this->redirect('contrato/list');
  }
}
