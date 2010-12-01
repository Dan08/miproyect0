<?php


abstract class BaseActividad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $proyecto_id;


	
	protected $descripcion;


	
	protected $tipo_gasto_id;


	
	protected $componente_sector_id;


	
	protected $concepto_gasto_id;


	
	protected $cod_app_fvs;


	
	protected $meta_proyecto_id;


	
	protected $inversion_recurrente;


	
	protected $mes_etapa_contractual;


	
	protected $mes_inicio_ejecucion;


	
	protected $reservas;


	
	protected $area_responsable;


	
	protected $componente_inversion_id;


	
	protected $plurianual_programado;


	
	protected $numero_solicitud;


	
	protected $cdp;


	
	protected $crp;


	
	protected $fecha_solicitud;


	
	protected $fecha_contrato;


	
	protected $fecha_acta_inicio;


	
	protected $fecha_terminacion;


	
	protected $fecha_liquidacion;


	
	protected $plazo_meses;


	
	protected $contrato_id;


	
	protected $existencia_contrato_numero;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aProyecto;

	
	protected $aTipoGasto;

	
	protected $aComponenteSector;

	
	protected $aConceptoGasto;

	
	protected $aMetaProyecto;

	
	protected $aDependencia;

	
	protected $aComponente;

	
	protected $aContrato;

	
	protected $collLocalidadActividads;

	
	protected $lastLocalidadActividadCriteria = null;

	
	protected $collClienteActividads;

	
	protected $lastClienteActividadCriteria = null;

	
	protected $collFuenteActividads;

	
	protected $lastFuenteActividadCriteria = null;

	
	protected $collCdpActividads;

	
	protected $lastCdpActividadCriteria = null;

	
	protected $collCrpActividads;

	
	protected $lastCrpActividadCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getProyectoId()
	{

		return $this->proyecto_id;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getTipoGastoId()
	{

		return $this->tipo_gasto_id;
	}

	
	public function getComponenteSectorId()
	{

		return $this->componente_sector_id;
	}

	
	public function getConceptoGastoId()
	{

		return $this->concepto_gasto_id;
	}

	
	public function getCodAppFvs()
	{

		return $this->cod_app_fvs;
	}

	
	public function getMetaProyectoId()
	{

		return $this->meta_proyecto_id;
	}

	
	public function getInversionRecurrente()
	{

		return $this->inversion_recurrente;
	}

	
	public function getMesEtapaContractual()
	{

		return $this->mes_etapa_contractual;
	}

	
	public function getMesInicioEjecucion()
	{

		return $this->mes_inicio_ejecucion;
	}

	
	public function getReservas()
	{

		return $this->reservas;
	}

	
	public function getAreaResponsable()
	{

		return $this->area_responsable;
	}

	
	public function getComponenteInversionId()
	{

		return $this->componente_inversion_id;
	}

	
	public function getPlurianualProgramado()
	{

		return $this->plurianual_programado;
	}

	
	public function getNumeroSolicitud()
	{

		return $this->numero_solicitud;
	}

	
	public function getCdp()
	{

		return $this->cdp;
	}

	
	public function getCrp()
	{

		return $this->crp;
	}

	
	public function getFechaSolicitud($format = 'Y-m-d')
	{

		if ($this->fecha_solicitud === null || $this->fecha_solicitud === '') {
			return null;
		} elseif (!is_int($this->fecha_solicitud)) {
						$ts = strtotime($this->fecha_solicitud);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_solicitud] as date/time value: " . var_export($this->fecha_solicitud, true));
			}
		} else {
			$ts = $this->fecha_solicitud;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFechaContrato($format = 'Y-m-d')
	{

		if ($this->fecha_contrato === null || $this->fecha_contrato === '') {
			return null;
		} elseif (!is_int($this->fecha_contrato)) {
						$ts = strtotime($this->fecha_contrato);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_contrato] as date/time value: " . var_export($this->fecha_contrato, true));
			}
		} else {
			$ts = $this->fecha_contrato;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFechaActaInicio($format = 'Y-m-d')
	{

		if ($this->fecha_acta_inicio === null || $this->fecha_acta_inicio === '') {
			return null;
		} elseif (!is_int($this->fecha_acta_inicio)) {
						$ts = strtotime($this->fecha_acta_inicio);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_acta_inicio] as date/time value: " . var_export($this->fecha_acta_inicio, true));
			}
		} else {
			$ts = $this->fecha_acta_inicio;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFechaTerminacion($format = 'Y-m-d')
	{

		if ($this->fecha_terminacion === null || $this->fecha_terminacion === '') {
			return null;
		} elseif (!is_int($this->fecha_terminacion)) {
						$ts = strtotime($this->fecha_terminacion);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_terminacion] as date/time value: " . var_export($this->fecha_terminacion, true));
			}
		} else {
			$ts = $this->fecha_terminacion;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFechaLiquidacion($format = 'Y-m-d')
	{

		if ($this->fecha_liquidacion === null || $this->fecha_liquidacion === '') {
			return null;
		} elseif (!is_int($this->fecha_liquidacion)) {
						$ts = strtotime($this->fecha_liquidacion);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_liquidacion] as date/time value: " . var_export($this->fecha_liquidacion, true));
			}
		} else {
			$ts = $this->fecha_liquidacion;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPlazoMeses()
	{

		return $this->plazo_meses;
	}

	
	public function getContratoId()
	{

		return $this->contrato_id;
	}

	
	public function getExistenciaContratoNumero()
	{

		return $this->existencia_contrato_numero;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ActividadPeer::ID;
		}

	} 
	
	public function setProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_id !== $v) {
			$this->proyecto_id = $v;
			$this->modifiedColumns[] = ActividadPeer::PROYECTO_ID;
		}

		if ($this->aProyecto !== null && $this->aProyecto->getId() !== $v) {
			$this->aProyecto = null;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ActividadPeer::DESCRIPCION;
		}

	} 
	
	public function setTipoGastoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tipo_gasto_id !== $v) {
			$this->tipo_gasto_id = $v;
			$this->modifiedColumns[] = ActividadPeer::TIPO_GASTO_ID;
		}

		if ($this->aTipoGasto !== null && $this->aTipoGasto->getId() !== $v) {
			$this->aTipoGasto = null;
		}

	} 
	
	public function setComponenteSectorId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->componente_sector_id !== $v) {
			$this->componente_sector_id = $v;
			$this->modifiedColumns[] = ActividadPeer::COMPONENTE_SECTOR_ID;
		}

		if ($this->aComponenteSector !== null && $this->aComponenteSector->getId() !== $v) {
			$this->aComponenteSector = null;
		}

	} 
	
	public function setConceptoGastoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->concepto_gasto_id !== $v) {
			$this->concepto_gasto_id = $v;
			$this->modifiedColumns[] = ActividadPeer::CONCEPTO_GASTO_ID;
		}

		if ($this->aConceptoGasto !== null && $this->aConceptoGasto->getId() !== $v) {
			$this->aConceptoGasto = null;
		}

	} 
	
	public function setCodAppFvs($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cod_app_fvs !== $v) {
			$this->cod_app_fvs = $v;
			$this->modifiedColumns[] = ActividadPeer::COD_APP_FVS;
		}

	} 
	
	public function setMetaProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->meta_proyecto_id !== $v) {
			$this->meta_proyecto_id = $v;
			$this->modifiedColumns[] = ActividadPeer::META_PROYECTO_ID;
		}

		if ($this->aMetaProyecto !== null && $this->aMetaProyecto->getId() !== $v) {
			$this->aMetaProyecto = null;
		}

	} 
	
	public function setInversionRecurrente($v)
	{

		if ($this->inversion_recurrente !== $v) {
			$this->inversion_recurrente = $v;
			$this->modifiedColumns[] = ActividadPeer::INVERSION_RECURRENTE;
		}

	} 
	
	public function setMesEtapaContractual($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mes_etapa_contractual !== $v) {
			$this->mes_etapa_contractual = $v;
			$this->modifiedColumns[] = ActividadPeer::MES_ETAPA_CONTRACTUAL;
		}

	} 
	
	public function setMesInicioEjecucion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mes_inicio_ejecucion !== $v) {
			$this->mes_inicio_ejecucion = $v;
			$this->modifiedColumns[] = ActividadPeer::MES_INICIO_EJECUCION;
		}

	} 
	
	public function setReservas($v)
	{

		if ($this->reservas !== $v) {
			$this->reservas = $v;
			$this->modifiedColumns[] = ActividadPeer::RESERVAS;
		}

	} 
	
	public function setAreaResponsable($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->area_responsable !== $v) {
			$this->area_responsable = $v;
			$this->modifiedColumns[] = ActividadPeer::AREA_RESPONSABLE;
		}

		if ($this->aDependencia !== null && $this->aDependencia->getId() !== $v) {
			$this->aDependencia = null;
		}

	} 
	
	public function setComponenteInversionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->componente_inversion_id !== $v) {
			$this->componente_inversion_id = $v;
			$this->modifiedColumns[] = ActividadPeer::COMPONENTE_INVERSION_ID;
		}

		if ($this->aComponente !== null && $this->aComponente->getId() !== $v) {
			$this->aComponente = null;
		}

	} 
	
	public function setPlurianualProgramado($v)
	{

		if ($this->plurianual_programado !== $v) {
			$this->plurianual_programado = $v;
			$this->modifiedColumns[] = ActividadPeer::PLURIANUAL_PROGRAMADO;
		}

	} 
	
	public function setNumeroSolicitud($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numero_solicitud !== $v) {
			$this->numero_solicitud = $v;
			$this->modifiedColumns[] = ActividadPeer::NUMERO_SOLICITUD;
		}

	} 
	
	public function setCdp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cdp !== $v) {
			$this->cdp = $v;
			$this->modifiedColumns[] = ActividadPeer::CDP;
		}

	} 
	
	public function setCrp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->crp !== $v) {
			$this->crp = $v;
			$this->modifiedColumns[] = ActividadPeer::CRP;
		}

	} 
	
	public function setFechaSolicitud($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_solicitud] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_solicitud !== $ts) {
			$this->fecha_solicitud = $ts;
			$this->modifiedColumns[] = ActividadPeer::FECHA_SOLICITUD;
		}

	} 
	
	public function setFechaContrato($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_contrato] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_contrato !== $ts) {
			$this->fecha_contrato = $ts;
			$this->modifiedColumns[] = ActividadPeer::FECHA_CONTRATO;
		}

	} 
	
	public function setFechaActaInicio($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_acta_inicio] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_acta_inicio !== $ts) {
			$this->fecha_acta_inicio = $ts;
			$this->modifiedColumns[] = ActividadPeer::FECHA_ACTA_INICIO;
		}

	} 
	
	public function setFechaTerminacion($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_terminacion] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_terminacion !== $ts) {
			$this->fecha_terminacion = $ts;
			$this->modifiedColumns[] = ActividadPeer::FECHA_TERMINACION;
		}

	} 
	
	public function setFechaLiquidacion($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_liquidacion] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_liquidacion !== $ts) {
			$this->fecha_liquidacion = $ts;
			$this->modifiedColumns[] = ActividadPeer::FECHA_LIQUIDACION;
		}

	} 
	
	public function setPlazoMeses($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->plazo_meses !== $v) {
			$this->plazo_meses = $v;
			$this->modifiedColumns[] = ActividadPeer::PLAZO_MESES;
		}

	} 
	
	public function setContratoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->contrato_id !== $v) {
			$this->contrato_id = $v;
			$this->modifiedColumns[] = ActividadPeer::CONTRATO_ID;
		}

		if ($this->aContrato !== null && $this->aContrato->getId() !== $v) {
			$this->aContrato = null;
		}

	} 
	
	public function setExistenciaContratoNumero($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->existencia_contrato_numero !== $v) {
			$this->existencia_contrato_numero = $v;
			$this->modifiedColumns[] = ActividadPeer::EXISTENCIA_CONTRATO_NUMERO;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = ActividadPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = ActividadPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->proyecto_id = $rs->getInt($startcol + 1);

			$this->descripcion = $rs->getString($startcol + 2);

			$this->tipo_gasto_id = $rs->getInt($startcol + 3);

			$this->componente_sector_id = $rs->getInt($startcol + 4);

			$this->concepto_gasto_id = $rs->getInt($startcol + 5);

			$this->cod_app_fvs = $rs->getString($startcol + 6);

			$this->meta_proyecto_id = $rs->getInt($startcol + 7);

			$this->inversion_recurrente = $rs->getBoolean($startcol + 8);

			$this->mes_etapa_contractual = $rs->getString($startcol + 9);

			$this->mes_inicio_ejecucion = $rs->getString($startcol + 10);

			$this->reservas = $rs->getFloat($startcol + 11);

			$this->area_responsable = $rs->getInt($startcol + 12);

			$this->componente_inversion_id = $rs->getInt($startcol + 13);

			$this->plurianual_programado = $rs->getFloat($startcol + 14);

			$this->numero_solicitud = $rs->getString($startcol + 15);

			$this->cdp = $rs->getString($startcol + 16);

			$this->crp = $rs->getString($startcol + 17);

			$this->fecha_solicitud = $rs->getDate($startcol + 18, null);

			$this->fecha_contrato = $rs->getDate($startcol + 19, null);

			$this->fecha_acta_inicio = $rs->getDate($startcol + 20, null);

			$this->fecha_terminacion = $rs->getDate($startcol + 21, null);

			$this->fecha_liquidacion = $rs->getDate($startcol + 22, null);

			$this->plazo_meses = $rs->getInt($startcol + 23);

			$this->contrato_id = $rs->getInt($startcol + 24);

			$this->existencia_contrato_numero = $rs->getString($startcol + 25);

			$this->created_at = $rs->getTimestamp($startcol + 26, null);

			$this->updated_at = $rs->getTimestamp($startcol + 27, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 28; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Actividad object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ActividadPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ActividadPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ActividadPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aProyecto !== null) {
				if ($this->aProyecto->isModified()) {
					$affectedRows += $this->aProyecto->save($con);
				}
				$this->setProyecto($this->aProyecto);
			}

			if ($this->aTipoGasto !== null) {
				if ($this->aTipoGasto->isModified()) {
					$affectedRows += $this->aTipoGasto->save($con);
				}
				$this->setTipoGasto($this->aTipoGasto);
			}

			if ($this->aComponenteSector !== null) {
				if ($this->aComponenteSector->isModified()) {
					$affectedRows += $this->aComponenteSector->save($con);
				}
				$this->setComponenteSector($this->aComponenteSector);
			}

			if ($this->aConceptoGasto !== null) {
				if ($this->aConceptoGasto->isModified()) {
					$affectedRows += $this->aConceptoGasto->save($con);
				}
				$this->setConceptoGasto($this->aConceptoGasto);
			}

			if ($this->aMetaProyecto !== null) {
				if ($this->aMetaProyecto->isModified()) {
					$affectedRows += $this->aMetaProyecto->save($con);
				}
				$this->setMetaProyecto($this->aMetaProyecto);
			}

			if ($this->aDependencia !== null) {
				if ($this->aDependencia->isModified()) {
					$affectedRows += $this->aDependencia->save($con);
				}
				$this->setDependencia($this->aDependencia);
			}

			if ($this->aComponente !== null) {
				if ($this->aComponente->isModified()) {
					$affectedRows += $this->aComponente->save($con);
				}
				$this->setComponente($this->aComponente);
			}

			if ($this->aContrato !== null) {
				if ($this->aContrato->isModified()) {
					$affectedRows += $this->aContrato->save($con);
				}
				$this->setContrato($this->aContrato);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ActividadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ActividadPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collLocalidadActividads !== null) {
				foreach($this->collLocalidadActividads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collClienteActividads !== null) {
				foreach($this->collClienteActividads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFuenteActividads !== null) {
				foreach($this->collFuenteActividads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCdpActividads !== null) {
				foreach($this->collCdpActividads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCrpActividads !== null) {
				foreach($this->collCrpActividads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aProyecto !== null) {
				if (!$this->aProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyecto->getValidationFailures());
				}
			}

			if ($this->aTipoGasto !== null) {
				if (!$this->aTipoGasto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTipoGasto->getValidationFailures());
				}
			}

			if ($this->aComponenteSector !== null) {
				if (!$this->aComponenteSector->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aComponenteSector->getValidationFailures());
				}
			}

			if ($this->aConceptoGasto !== null) {
				if (!$this->aConceptoGasto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aConceptoGasto->getValidationFailures());
				}
			}

			if ($this->aMetaProyecto !== null) {
				if (!$this->aMetaProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMetaProyecto->getValidationFailures());
				}
			}

			if ($this->aDependencia !== null) {
				if (!$this->aDependencia->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDependencia->getValidationFailures());
				}
			}

			if ($this->aComponente !== null) {
				if (!$this->aComponente->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aComponente->getValidationFailures());
				}
			}

			if ($this->aContrato !== null) {
				if (!$this->aContrato->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aContrato->getValidationFailures());
				}
			}


			if (($retval = ActividadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collLocalidadActividads !== null) {
					foreach($this->collLocalidadActividads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collClienteActividads !== null) {
					foreach($this->collClienteActividads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFuenteActividads !== null) {
					foreach($this->collFuenteActividads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCdpActividads !== null) {
					foreach($this->collCdpActividads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCrpActividads !== null) {
					foreach($this->collCrpActividads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getProyectoId();
				break;
			case 2:
				return $this->getDescripcion();
				break;
			case 3:
				return $this->getTipoGastoId();
				break;
			case 4:
				return $this->getComponenteSectorId();
				break;
			case 5:
				return $this->getConceptoGastoId();
				break;
			case 6:
				return $this->getCodAppFvs();
				break;
			case 7:
				return $this->getMetaProyectoId();
				break;
			case 8:
				return $this->getInversionRecurrente();
				break;
			case 9:
				return $this->getMesEtapaContractual();
				break;
			case 10:
				return $this->getMesInicioEjecucion();
				break;
			case 11:
				return $this->getReservas();
				break;
			case 12:
				return $this->getAreaResponsable();
				break;
			case 13:
				return $this->getComponenteInversionId();
				break;
			case 14:
				return $this->getPlurianualProgramado();
				break;
			case 15:
				return $this->getNumeroSolicitud();
				break;
			case 16:
				return $this->getCdp();
				break;
			case 17:
				return $this->getCrp();
				break;
			case 18:
				return $this->getFechaSolicitud();
				break;
			case 19:
				return $this->getFechaContrato();
				break;
			case 20:
				return $this->getFechaActaInicio();
				break;
			case 21:
				return $this->getFechaTerminacion();
				break;
			case 22:
				return $this->getFechaLiquidacion();
				break;
			case 23:
				return $this->getPlazoMeses();
				break;
			case 24:
				return $this->getContratoId();
				break;
			case 25:
				return $this->getExistenciaContratoNumero();
				break;
			case 26:
				return $this->getCreatedAt();
				break;
			case 27:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getProyectoId(),
			$keys[2] => $this->getDescripcion(),
			$keys[3] => $this->getTipoGastoId(),
			$keys[4] => $this->getComponenteSectorId(),
			$keys[5] => $this->getConceptoGastoId(),
			$keys[6] => $this->getCodAppFvs(),
			$keys[7] => $this->getMetaProyectoId(),
			$keys[8] => $this->getInversionRecurrente(),
			$keys[9] => $this->getMesEtapaContractual(),
			$keys[10] => $this->getMesInicioEjecucion(),
			$keys[11] => $this->getReservas(),
			$keys[12] => $this->getAreaResponsable(),
			$keys[13] => $this->getComponenteInversionId(),
			$keys[14] => $this->getPlurianualProgramado(),
			$keys[15] => $this->getNumeroSolicitud(),
			$keys[16] => $this->getCdp(),
			$keys[17] => $this->getCrp(),
			$keys[18] => $this->getFechaSolicitud(),
			$keys[19] => $this->getFechaContrato(),
			$keys[20] => $this->getFechaActaInicio(),
			$keys[21] => $this->getFechaTerminacion(),
			$keys[22] => $this->getFechaLiquidacion(),
			$keys[23] => $this->getPlazoMeses(),
			$keys[24] => $this->getContratoId(),
			$keys[25] => $this->getExistenciaContratoNumero(),
			$keys[26] => $this->getCreatedAt(),
			$keys[27] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setProyectoId($value);
				break;
			case 2:
				$this->setDescripcion($value);
				break;
			case 3:
				$this->setTipoGastoId($value);
				break;
			case 4:
				$this->setComponenteSectorId($value);
				break;
			case 5:
				$this->setConceptoGastoId($value);
				break;
			case 6:
				$this->setCodAppFvs($value);
				break;
			case 7:
				$this->setMetaProyectoId($value);
				break;
			case 8:
				$this->setInversionRecurrente($value);
				break;
			case 9:
				$this->setMesEtapaContractual($value);
				break;
			case 10:
				$this->setMesInicioEjecucion($value);
				break;
			case 11:
				$this->setReservas($value);
				break;
			case 12:
				$this->setAreaResponsable($value);
				break;
			case 13:
				$this->setComponenteInversionId($value);
				break;
			case 14:
				$this->setPlurianualProgramado($value);
				break;
			case 15:
				$this->setNumeroSolicitud($value);
				break;
			case 16:
				$this->setCdp($value);
				break;
			case 17:
				$this->setCrp($value);
				break;
			case 18:
				$this->setFechaSolicitud($value);
				break;
			case 19:
				$this->setFechaContrato($value);
				break;
			case 20:
				$this->setFechaActaInicio($value);
				break;
			case 21:
				$this->setFechaTerminacion($value);
				break;
			case 22:
				$this->setFechaLiquidacion($value);
				break;
			case 23:
				$this->setPlazoMeses($value);
				break;
			case 24:
				$this->setContratoId($value);
				break;
			case 25:
				$this->setExistenciaContratoNumero($value);
				break;
			case 26:
				$this->setCreatedAt($value);
				break;
			case 27:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProyectoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTipoGastoId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setComponenteSectorId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setConceptoGastoId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCodAppFvs($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMetaProyectoId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setInversionRecurrente($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMesEtapaContractual($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setMesInicioEjecucion($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setReservas($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAreaResponsable($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setComponenteInversionId($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPlurianualProgramado($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNumeroSolicitud($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCdp($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCrp($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setFechaSolicitud($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setFechaContrato($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setFechaActaInicio($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setFechaTerminacion($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setFechaLiquidacion($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setPlazoMeses($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setContratoId($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setExistenciaContratoNumero($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setCreatedAt($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setUpdatedAt($arr[$keys[27]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ActividadPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActividadPeer::ID)) $criteria->add(ActividadPeer::ID, $this->id);
		if ($this->isColumnModified(ActividadPeer::PROYECTO_ID)) $criteria->add(ActividadPeer::PROYECTO_ID, $this->proyecto_id);
		if ($this->isColumnModified(ActividadPeer::DESCRIPCION)) $criteria->add(ActividadPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ActividadPeer::TIPO_GASTO_ID)) $criteria->add(ActividadPeer::TIPO_GASTO_ID, $this->tipo_gasto_id);
		if ($this->isColumnModified(ActividadPeer::COMPONENTE_SECTOR_ID)) $criteria->add(ActividadPeer::COMPONENTE_SECTOR_ID, $this->componente_sector_id);
		if ($this->isColumnModified(ActividadPeer::CONCEPTO_GASTO_ID)) $criteria->add(ActividadPeer::CONCEPTO_GASTO_ID, $this->concepto_gasto_id);
		if ($this->isColumnModified(ActividadPeer::COD_APP_FVS)) $criteria->add(ActividadPeer::COD_APP_FVS, $this->cod_app_fvs);
		if ($this->isColumnModified(ActividadPeer::META_PROYECTO_ID)) $criteria->add(ActividadPeer::META_PROYECTO_ID, $this->meta_proyecto_id);
		if ($this->isColumnModified(ActividadPeer::INVERSION_RECURRENTE)) $criteria->add(ActividadPeer::INVERSION_RECURRENTE, $this->inversion_recurrente);
		if ($this->isColumnModified(ActividadPeer::MES_ETAPA_CONTRACTUAL)) $criteria->add(ActividadPeer::MES_ETAPA_CONTRACTUAL, $this->mes_etapa_contractual);
		if ($this->isColumnModified(ActividadPeer::MES_INICIO_EJECUCION)) $criteria->add(ActividadPeer::MES_INICIO_EJECUCION, $this->mes_inicio_ejecucion);
		if ($this->isColumnModified(ActividadPeer::RESERVAS)) $criteria->add(ActividadPeer::RESERVAS, $this->reservas);
		if ($this->isColumnModified(ActividadPeer::AREA_RESPONSABLE)) $criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->area_responsable);
		if ($this->isColumnModified(ActividadPeer::COMPONENTE_INVERSION_ID)) $criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->componente_inversion_id);
		if ($this->isColumnModified(ActividadPeer::PLURIANUAL_PROGRAMADO)) $criteria->add(ActividadPeer::PLURIANUAL_PROGRAMADO, $this->plurianual_programado);
		if ($this->isColumnModified(ActividadPeer::NUMERO_SOLICITUD)) $criteria->add(ActividadPeer::NUMERO_SOLICITUD, $this->numero_solicitud);
		if ($this->isColumnModified(ActividadPeer::CDP)) $criteria->add(ActividadPeer::CDP, $this->cdp);
		if ($this->isColumnModified(ActividadPeer::CRP)) $criteria->add(ActividadPeer::CRP, $this->crp);
		if ($this->isColumnModified(ActividadPeer::FECHA_SOLICITUD)) $criteria->add(ActividadPeer::FECHA_SOLICITUD, $this->fecha_solicitud);
		if ($this->isColumnModified(ActividadPeer::FECHA_CONTRATO)) $criteria->add(ActividadPeer::FECHA_CONTRATO, $this->fecha_contrato);
		if ($this->isColumnModified(ActividadPeer::FECHA_ACTA_INICIO)) $criteria->add(ActividadPeer::FECHA_ACTA_INICIO, $this->fecha_acta_inicio);
		if ($this->isColumnModified(ActividadPeer::FECHA_TERMINACION)) $criteria->add(ActividadPeer::FECHA_TERMINACION, $this->fecha_terminacion);
		if ($this->isColumnModified(ActividadPeer::FECHA_LIQUIDACION)) $criteria->add(ActividadPeer::FECHA_LIQUIDACION, $this->fecha_liquidacion);
		if ($this->isColumnModified(ActividadPeer::PLAZO_MESES)) $criteria->add(ActividadPeer::PLAZO_MESES, $this->plazo_meses);
		if ($this->isColumnModified(ActividadPeer::CONTRATO_ID)) $criteria->add(ActividadPeer::CONTRATO_ID, $this->contrato_id);
		if ($this->isColumnModified(ActividadPeer::EXISTENCIA_CONTRATO_NUMERO)) $criteria->add(ActividadPeer::EXISTENCIA_CONTRATO_NUMERO, $this->existencia_contrato_numero);
		if ($this->isColumnModified(ActividadPeer::CREATED_AT)) $criteria->add(ActividadPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ActividadPeer::UPDATED_AT)) $criteria->add(ActividadPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ActividadPeer::DATABASE_NAME);

		$criteria->add(ActividadPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setProyectoId($this->proyecto_id);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setTipoGastoId($this->tipo_gasto_id);

		$copyObj->setComponenteSectorId($this->componente_sector_id);

		$copyObj->setConceptoGastoId($this->concepto_gasto_id);

		$copyObj->setCodAppFvs($this->cod_app_fvs);

		$copyObj->setMetaProyectoId($this->meta_proyecto_id);

		$copyObj->setInversionRecurrente($this->inversion_recurrente);

		$copyObj->setMesEtapaContractual($this->mes_etapa_contractual);

		$copyObj->setMesInicioEjecucion($this->mes_inicio_ejecucion);

		$copyObj->setReservas($this->reservas);

		$copyObj->setAreaResponsable($this->area_responsable);

		$copyObj->setComponenteInversionId($this->componente_inversion_id);

		$copyObj->setPlurianualProgramado($this->plurianual_programado);

		$copyObj->setNumeroSolicitud($this->numero_solicitud);

		$copyObj->setCdp($this->cdp);

		$copyObj->setCrp($this->crp);

		$copyObj->setFechaSolicitud($this->fecha_solicitud);

		$copyObj->setFechaContrato($this->fecha_contrato);

		$copyObj->setFechaActaInicio($this->fecha_acta_inicio);

		$copyObj->setFechaTerminacion($this->fecha_terminacion);

		$copyObj->setFechaLiquidacion($this->fecha_liquidacion);

		$copyObj->setPlazoMeses($this->plazo_meses);

		$copyObj->setContratoId($this->contrato_id);

		$copyObj->setExistenciaContratoNumero($this->existencia_contrato_numero);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getLocalidadActividads() as $relObj) {
				$copyObj->addLocalidadActividad($relObj->copy($deepCopy));
			}

			foreach($this->getClienteActividads() as $relObj) {
				$copyObj->addClienteActividad($relObj->copy($deepCopy));
			}

			foreach($this->getFuenteActividads() as $relObj) {
				$copyObj->addFuenteActividad($relObj->copy($deepCopy));
			}

			foreach($this->getCdpActividads() as $relObj) {
				$copyObj->addCdpActividad($relObj->copy($deepCopy));
			}

			foreach($this->getCrpActividads() as $relObj) {
				$copyObj->addCrpActividad($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ActividadPeer();
		}
		return self::$peer;
	}

	
	public function setProyecto($v)
	{


		if ($v === null) {
			$this->setProyectoId(NULL);
		} else {
			$this->setProyectoId($v->getId());
		}


		$this->aProyecto = $v;
	}


	
	public function getProyecto($con = null)
	{
		if ($this->aProyecto === null && ($this->proyecto_id !== null)) {
						include_once 'lib/model/om/BaseProyectoPeer.php';

			$this->aProyecto = ProyectoPeer::retrieveByPK($this->proyecto_id, $con);

			
		}
		return $this->aProyecto;
	}

	
	public function setTipoGasto($v)
	{


		if ($v === null) {
			$this->setTipoGastoId(NULL);
		} else {
			$this->setTipoGastoId($v->getId());
		}


		$this->aTipoGasto = $v;
	}


	
	public function getTipoGasto($con = null)
	{
		if ($this->aTipoGasto === null && ($this->tipo_gasto_id !== null)) {
						include_once 'lib/model/om/BaseTipoGastoPeer.php';

			$this->aTipoGasto = TipoGastoPeer::retrieveByPK($this->tipo_gasto_id, $con);

			
		}
		return $this->aTipoGasto;
	}

	
	public function setComponenteSector($v)
	{


		if ($v === null) {
			$this->setComponenteSectorId(NULL);
		} else {
			$this->setComponenteSectorId($v->getId());
		}


		$this->aComponenteSector = $v;
	}


	
	public function getComponenteSector($con = null)
	{
		if ($this->aComponenteSector === null && ($this->componente_sector_id !== null)) {
						include_once 'lib/model/om/BaseComponenteSectorPeer.php';

			$this->aComponenteSector = ComponenteSectorPeer::retrieveByPK($this->componente_sector_id, $con);

			
		}
		return $this->aComponenteSector;
	}

	
	public function setConceptoGasto($v)
	{


		if ($v === null) {
			$this->setConceptoGastoId(NULL);
		} else {
			$this->setConceptoGastoId($v->getId());
		}


		$this->aConceptoGasto = $v;
	}


	
	public function getConceptoGasto($con = null)
	{
		if ($this->aConceptoGasto === null && ($this->concepto_gasto_id !== null)) {
						include_once 'lib/model/om/BaseConceptoGastoPeer.php';

			$this->aConceptoGasto = ConceptoGastoPeer::retrieveByPK($this->concepto_gasto_id, $con);

			
		}
		return $this->aConceptoGasto;
	}

	
	public function setMetaProyecto($v)
	{


		if ($v === null) {
			$this->setMetaProyectoId(NULL);
		} else {
			$this->setMetaProyectoId($v->getId());
		}


		$this->aMetaProyecto = $v;
	}


	
	public function getMetaProyecto($con = null)
	{
		if ($this->aMetaProyecto === null && ($this->meta_proyecto_id !== null)) {
						include_once 'lib/model/om/BaseMetaProyectoPeer.php';

			$this->aMetaProyecto = MetaProyectoPeer::retrieveByPK($this->meta_proyecto_id, $con);

			
		}
		return $this->aMetaProyecto;
	}

	
	public function setDependencia($v)
	{


		if ($v === null) {
			$this->setAreaResponsable(NULL);
		} else {
			$this->setAreaResponsable($v->getId());
		}


		$this->aDependencia = $v;
	}


	
	public function getDependencia($con = null)
	{
		if ($this->aDependencia === null && ($this->area_responsable !== null)) {
						include_once 'lib/model/om/BaseDependenciaPeer.php';

			$this->aDependencia = DependenciaPeer::retrieveByPK($this->area_responsable, $con);

			
		}
		return $this->aDependencia;
	}

	
	public function setComponente($v)
	{


		if ($v === null) {
			$this->setComponenteInversionId(NULL);
		} else {
			$this->setComponenteInversionId($v->getId());
		}


		$this->aComponente = $v;
	}


	
	public function getComponente($con = null)
	{
		if ($this->aComponente === null && ($this->componente_inversion_id !== null)) {
						include_once 'lib/model/om/BaseComponentePeer.php';

			$this->aComponente = ComponentePeer::retrieveByPK($this->componente_inversion_id, $con);

			
		}
		return $this->aComponente;
	}

	
	public function setContrato($v)
	{


		if ($v === null) {
			$this->setContratoId(NULL);
		} else {
			$this->setContratoId($v->getId());
		}


		$this->aContrato = $v;
	}


	
	public function getContrato($con = null)
	{
		if ($this->aContrato === null && ($this->contrato_id !== null)) {
						include_once 'lib/model/om/BaseContratoPeer.php';

			$this->aContrato = ContratoPeer::retrieveByPK($this->contrato_id, $con);

			
		}
		return $this->aContrato;
	}

	
	public function initLocalidadActividads()
	{
		if ($this->collLocalidadActividads === null) {
			$this->collLocalidadActividads = array();
		}
	}

	
	public function getLocalidadActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLocalidadActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLocalidadActividads === null) {
			if ($this->isNew()) {
			   $this->collLocalidadActividads = array();
			} else {

				$criteria->add(LocalidadActividadPeer::ACTIVIDAD_ID, $this->getId());

				LocalidadActividadPeer::addSelectColumns($criteria);
				$this->collLocalidadActividads = LocalidadActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(LocalidadActividadPeer::ACTIVIDAD_ID, $this->getId());

				LocalidadActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastLocalidadActividadCriteria) || !$this->lastLocalidadActividadCriteria->equals($criteria)) {
					$this->collLocalidadActividads = LocalidadActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastLocalidadActividadCriteria = $criteria;
		return $this->collLocalidadActividads;
	}

	
	public function countLocalidadActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseLocalidadActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(LocalidadActividadPeer::ACTIVIDAD_ID, $this->getId());

		return LocalidadActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addLocalidadActividad(LocalidadActividad $l)
	{
		$this->collLocalidadActividads[] = $l;
		$l->setActividad($this);
	}


	
	public function getLocalidadActividadsJoinLocalidad($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLocalidadActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLocalidadActividads === null) {
			if ($this->isNew()) {
				$this->collLocalidadActividads = array();
			} else {

				$criteria->add(LocalidadActividadPeer::ACTIVIDAD_ID, $this->getId());

				$this->collLocalidadActividads = LocalidadActividadPeer::doSelectJoinLocalidad($criteria, $con);
			}
		} else {
									
			$criteria->add(LocalidadActividadPeer::ACTIVIDAD_ID, $this->getId());

			if (!isset($this->lastLocalidadActividadCriteria) || !$this->lastLocalidadActividadCriteria->equals($criteria)) {
				$this->collLocalidadActividads = LocalidadActividadPeer::doSelectJoinLocalidad($criteria, $con);
			}
		}
		$this->lastLocalidadActividadCriteria = $criteria;

		return $this->collLocalidadActividads;
	}

	
	public function initClienteActividads()
	{
		if ($this->collClienteActividads === null) {
			$this->collClienteActividads = array();
		}
	}

	
	public function getClienteActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClienteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClienteActividads === null) {
			if ($this->isNew()) {
			   $this->collClienteActividads = array();
			} else {

				$criteria->add(ClienteActividadPeer::ACTIVIDAD_ID, $this->getId());

				ClienteActividadPeer::addSelectColumns($criteria);
				$this->collClienteActividads = ClienteActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClienteActividadPeer::ACTIVIDAD_ID, $this->getId());

				ClienteActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastClienteActividadCriteria) || !$this->lastClienteActividadCriteria->equals($criteria)) {
					$this->collClienteActividads = ClienteActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastClienteActividadCriteria = $criteria;
		return $this->collClienteActividads;
	}

	
	public function countClienteActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseClienteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ClienteActividadPeer::ACTIVIDAD_ID, $this->getId());

		return ClienteActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClienteActividad(ClienteActividad $l)
	{
		$this->collClienteActividads[] = $l;
		$l->setActividad($this);
	}


	
	public function getClienteActividadsJoinCliente($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClienteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClienteActividads === null) {
			if ($this->isNew()) {
				$this->collClienteActividads = array();
			} else {

				$criteria->add(ClienteActividadPeer::ACTIVIDAD_ID, $this->getId());

				$this->collClienteActividads = ClienteActividadPeer::doSelectJoinCliente($criteria, $con);
			}
		} else {
									
			$criteria->add(ClienteActividadPeer::ACTIVIDAD_ID, $this->getId());

			if (!isset($this->lastClienteActividadCriteria) || !$this->lastClienteActividadCriteria->equals($criteria)) {
				$this->collClienteActividads = ClienteActividadPeer::doSelectJoinCliente($criteria, $con);
			}
		}
		$this->lastClienteActividadCriteria = $criteria;

		return $this->collClienteActividads;
	}

	
	public function initFuenteActividads()
	{
		if ($this->collFuenteActividads === null) {
			$this->collFuenteActividads = array();
		}
	}

	
	public function getFuenteActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFuenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFuenteActividads === null) {
			if ($this->isNew()) {
			   $this->collFuenteActividads = array();
			} else {

				$criteria->add(FuenteActividadPeer::ACTIVIDAD_ID, $this->getId());

				FuenteActividadPeer::addSelectColumns($criteria);
				$this->collFuenteActividads = FuenteActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FuenteActividadPeer::ACTIVIDAD_ID, $this->getId());

				FuenteActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastFuenteActividadCriteria) || !$this->lastFuenteActividadCriteria->equals($criteria)) {
					$this->collFuenteActividads = FuenteActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFuenteActividadCriteria = $criteria;
		return $this->collFuenteActividads;
	}

	
	public function countFuenteActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFuenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FuenteActividadPeer::ACTIVIDAD_ID, $this->getId());

		return FuenteActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFuenteActividad(FuenteActividad $l)
	{
		$this->collFuenteActividads[] = $l;
		$l->setActividad($this);
	}


	
	public function getFuenteActividadsJoinFuente($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFuenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFuenteActividads === null) {
			if ($this->isNew()) {
				$this->collFuenteActividads = array();
			} else {

				$criteria->add(FuenteActividadPeer::ACTIVIDAD_ID, $this->getId());

				$this->collFuenteActividads = FuenteActividadPeer::doSelectJoinFuente($criteria, $con);
			}
		} else {
									
			$criteria->add(FuenteActividadPeer::ACTIVIDAD_ID, $this->getId());

			if (!isset($this->lastFuenteActividadCriteria) || !$this->lastFuenteActividadCriteria->equals($criteria)) {
				$this->collFuenteActividads = FuenteActividadPeer::doSelectJoinFuente($criteria, $con);
			}
		}
		$this->lastFuenteActividadCriteria = $criteria;

		return $this->collFuenteActividads;
	}

	
	public function initCdpActividads()
	{
		if ($this->collCdpActividads === null) {
			$this->collCdpActividads = array();
		}
	}

	
	public function getCdpActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCdpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCdpActividads === null) {
			if ($this->isNew()) {
			   $this->collCdpActividads = array();
			} else {

				$criteria->add(CdpActividadPeer::ACTIVIDAD_ID, $this->getId());

				CdpActividadPeer::addSelectColumns($criteria);
				$this->collCdpActividads = CdpActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CdpActividadPeer::ACTIVIDAD_ID, $this->getId());

				CdpActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastCdpActividadCriteria) || !$this->lastCdpActividadCriteria->equals($criteria)) {
					$this->collCdpActividads = CdpActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCdpActividadCriteria = $criteria;
		return $this->collCdpActividads;
	}

	
	public function countCdpActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCdpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CdpActividadPeer::ACTIVIDAD_ID, $this->getId());

		return CdpActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCdpActividad(CdpActividad $l)
	{
		$this->collCdpActividads[] = $l;
		$l->setActividad($this);
	}


	
	public function getCdpActividadsJoinCdp($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCdpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCdpActividads === null) {
			if ($this->isNew()) {
				$this->collCdpActividads = array();
			} else {

				$criteria->add(CdpActividadPeer::ACTIVIDAD_ID, $this->getId());

				$this->collCdpActividads = CdpActividadPeer::doSelectJoinCdp($criteria, $con);
			}
		} else {
									
			$criteria->add(CdpActividadPeer::ACTIVIDAD_ID, $this->getId());

			if (!isset($this->lastCdpActividadCriteria) || !$this->lastCdpActividadCriteria->equals($criteria)) {
				$this->collCdpActividads = CdpActividadPeer::doSelectJoinCdp($criteria, $con);
			}
		}
		$this->lastCdpActividadCriteria = $criteria;

		return $this->collCdpActividads;
	}

	
	public function initCrpActividads()
	{
		if ($this->collCrpActividads === null) {
			$this->collCrpActividads = array();
		}
	}

	
	public function getCrpActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCrpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCrpActividads === null) {
			if ($this->isNew()) {
			   $this->collCrpActividads = array();
			} else {

				$criteria->add(CrpActividadPeer::ACTIVIDAD_ID, $this->getId());

				CrpActividadPeer::addSelectColumns($criteria);
				$this->collCrpActividads = CrpActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CrpActividadPeer::ACTIVIDAD_ID, $this->getId());

				CrpActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastCrpActividadCriteria) || !$this->lastCrpActividadCriteria->equals($criteria)) {
					$this->collCrpActividads = CrpActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCrpActividadCriteria = $criteria;
		return $this->collCrpActividads;
	}

	
	public function countCrpActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCrpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CrpActividadPeer::ACTIVIDAD_ID, $this->getId());

		return CrpActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCrpActividad(CrpActividad $l)
	{
		$this->collCrpActividads[] = $l;
		$l->setActividad($this);
	}


	
	public function getCrpActividadsJoinCrp($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCrpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCrpActividads === null) {
			if ($this->isNew()) {
				$this->collCrpActividads = array();
			} else {

				$criteria->add(CrpActividadPeer::ACTIVIDAD_ID, $this->getId());

				$this->collCrpActividads = CrpActividadPeer::doSelectJoinCrp($criteria, $con);
			}
		} else {
									
			$criteria->add(CrpActividadPeer::ACTIVIDAD_ID, $this->getId());

			if (!isset($this->lastCrpActividadCriteria) || !$this->lastCrpActividadCriteria->equals($criteria)) {
				$this->collCrpActividads = CrpActividadPeer::doSelectJoinCrp($criteria, $con);
			}
		}
		$this->lastCrpActividadCriteria = $criteria;

		return $this->collCrpActividads;
	}

} 