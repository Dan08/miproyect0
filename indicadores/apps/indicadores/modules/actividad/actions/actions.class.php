<?php
// auto-generated by sfPropelCrud
// date: 2010/09/24 15:58:02
?>
<?php

/**
 * actividad actions.
 *
 * @package    indicadores
 * @subpackage actividad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class actividadActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('actividad', 'list');
  }

  public function executeList()
  {
    if ((!$this->getRequestParameter('proyecto')) && (!$this->getRequestParameter('mes'))) {
      // mostrar formulario
      $this->setTemplate('BuscarActividad');
    } else {
     // mostrar las actividades segun el criterio con paginacion
     $c = new Criteria();
     $c->add(ActividadPeer::PROYECTO_ID, $this->getRequestParameter('proyecto'));
     $c->add(ActividadPeer::MES_INICIO_EJECUCION, $this->getRequestParameter('mes'));

     $this->actividads = ActividadPeer::doSelect($c);
    }
  }

  public function executeShow()
  {
    $this->actividad = ActividadPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->actividad);
  }

  public function executeCreate()
  {
    $this->actividad = new Actividad();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->actividad = ActividadPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->actividad);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $actividad = new Actividad();
    }
    else
    {
      $actividad = ActividadPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($actividad);
    }

    $actividad->setId($this->getRequestParameter('id'));
    $actividad->setProyectoId($this->getRequestParameter('proyecto_id') ? $this->getRequestParameter('proyecto_id') : null);
    $actividad->setDescripcion($this->getRequestParameter('descripcion'));
    $actividad->setTipoGastoId($this->getRequestParameter('tipo_gasto_id') ? $this->getRequestParameter('tipo_gasto_id') : null);
    $actividad->setComponenteSectorId($this->getRequestParameter('componente_sector_id') ? $this->getRequestParameter('componente_sector_id') : null);
    $actividad->setConceptoGastoId($this->getRequestParameter('concepto_gasto_id') ? $this->getRequestParameter('concepto_gasto_id') : null);
    $actividad->setCodAppFvs($this->getRequestParameter('cod_app_fvs'));
    $actividad->setMetaProyectoId($this->getRequestParameter('meta_proyecto_id') ? $this->getRequestParameter('meta_proyecto_id') : null);
    $actividad->setInversionRecurrente($this->getRequestParameter('inversion_recurrente', 0));
    $actividad->setMesEtapaContractual($this->getRequestParameter('mes_etapa_contractual'));
    $actividad->setMesInicioEjecucion($this->getRequestParameter('mes_inicio_ejecucion'));
    $actividad->setReservas($this->getRequestParameter('reservas'));
    $actividad->setAreaResponsable($this->getRequestParameter('area_responsable') ? $this->getRequestParameter('area_responsable') : null);
    $actividad->setComponenteInversionId($this->getRequestParameter('componente_inversion_id') ? $this->getRequestParameter('componente_inversion_id') : null);
    $actividad->setPlurianualProgramado($this->getRequestParameter('plurianual_programado'));
    $actividad->setNumeroSolicitud($this->getRequestParameter('numero_solicitud'));
    $actividad->setCdp($this->getRequestParameter('cdp'));
    $actividad->setCrp($this->getRequestParameter('crp'));
    if ($this->getRequestParameter('fecha_solicitud'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_solicitud'), $this->getUser()->getCulture());
      $actividad->setFechaSolicitud("$y-$m-$d");
    }
    if ($this->getRequestParameter('fecha_contrato'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_contrato'), $this->getUser()->getCulture());
      $actividad->setFechaContrato("$y-$m-$d");
    }
    if ($this->getRequestParameter('fecha_acta_inicio'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_acta_inicio'), $this->getUser()->getCulture());
      $actividad->setFechaActaInicio("$y-$m-$d");
    }
    if ($this->getRequestParameter('fecha_terminacion'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_terminacion'), $this->getUser()->getCulture());
      $actividad->setFechaTerminacion("$y-$m-$d");
    }
    if ($this->getRequestParameter('fecha_liquidacion'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha_liquidacion'), $this->getUser()->getCulture());
      $actividad->setFechaLiquidacion("$y-$m-$d");
    }
    $actividad->setPlazoMeses($this->getRequestParameter('plazo_meses'));
    $actividad->setContratoId($this->getRequestParameter('contrato_id') ? $this->getRequestParameter('contrato_id') : null);
    $actividad->setExistenciaContratoNumero($this->getRequestParameter('existencia_contrato_numero'));

    $actividad->save();

    return $this->redirect('actividad/show?id='.$actividad->getId());
  }

  public function executeDelete()
  {
    $actividad = ActividadPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($actividad);

    $actividad->delete();

    return $this->redirect('actividad/list');
  }
}
