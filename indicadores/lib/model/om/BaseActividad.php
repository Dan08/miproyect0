<?php


abstract class BaseActividad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $proyecto_inversion_id;


	
	protected $descripcion;


	
	protected $tipo_gasto;


	
	protected $componente_sector;


	
	protected $concepto_gasto;


	
	protected $mes_etapa_contractual;


	
	protected $mes_ejecucion;


	
	protected $reservas;


	
	protected $area_responsable;


	
	protected $valor_proceso;


	
	protected $numero_solicitud;


	
	protected $fecha_solicitud;


	
	protected $fecha_contrato;


	
	protected $fecha_acta_inicio;


	
	protected $fecha_terminacion;


	
	protected $fecha_liquidacion;


	
	protected $plazo_meses;


	
	protected $contrato_id;


	
	protected $clase_contrato;


	
	protected $estado;


	
	protected $existencia_contrato_numero;


	
	protected $giros;


	
	protected $saldo;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aProyectoInversion;

	
	protected $aContrato;

	
	protected $collLocalidadActividads;

	
	protected $lastLocalidadActividadCriteria = null;

	
	protected $collClienteActividads;

	
	protected $lastClienteActividadCriteria = null;

	
	protected $collFuenteActividads;

	
	protected $lastFuenteActividadCriteria = null;

	
	protected $collComponenteActividads;

	
	protected $lastComponenteActividadCriteria = null;

	
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

	
	public function getProyectoInversionId()
	{

		return $this->proyecto_inversion_id;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getTipoGasto()
	{

		return $this->tipo_gasto;
	}

	
	public function getComponenteSector()
	{

		return $this->componente_sector;
	}

	
	public function getConceptoGasto()
	{

		return $this->concepto_gasto;
	}

	
	public function getMesEtapaContractual()
	{

		return $this->mes_etapa_contractual;
	}

	
	public function getMesEjecucion()
	{

		return $this->mes_ejecucion;
	}

	
	public function getReservas()
	{

		return $this->reservas;
	}

	
	public function getAreaResponsable()
	{

		return $this->area_responsable;
	}

	
	public function getValorProceso()
	{

		return $this->valor_proceso;
	}

	
	public function getNumeroSolicitud()
	{

		return $this->numero_solicitud;
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

	
	public function getClaseContrato()
	{

		return $this->clase_contrato;
	}

	
	public function getEstado()
	{

		return $this->estado;
	}

	
	public function getExistenciaContratoNumero()
	{

		return $this->existencia_contrato_numero;
	}

	
	public function getGiros()
	{

		return $this->giros;
	}

	
	public function getSaldo()
	{

		return $this->saldo;
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
	
	public function setProyectoInversionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_inversion_id !== $v) {
			$this->proyecto_inversion_id = $v;
			$this->modifiedColumns[] = ActividadPeer::PROYECTO_INVERSION_ID;
		}

		if ($this->aProyectoInversion !== null && $this->aProyectoInversion->getId() !== $v) {
			$this->aProyectoInversion = null;
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
	
	public function setTipoGasto($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo_gasto !== $v) {
			$this->tipo_gasto = $v;
			$this->modifiedColumns[] = ActividadPeer::TIPO_GASTO;
		}

	} 
	
	public function setComponenteSector($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->componente_sector !== $v) {
			$this->componente_sector = $v;
			$this->modifiedColumns[] = ActividadPeer::COMPONENTE_SECTOR;
		}

	} 
	
	public function setConceptoGasto($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->concepto_gasto !== $v) {
			$this->concepto_gasto = $v;
			$this->modifiedColumns[] = ActividadPeer::CONCEPTO_GASTO;
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
	
	public function setMesEjecucion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mes_ejecucion !== $v) {
			$this->mes_ejecucion = $v;
			$this->modifiedColumns[] = ActividadPeer::MES_EJECUCION;
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

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->area_responsable !== $v) {
			$this->area_responsable = $v;
			$this->modifiedColumns[] = ActividadPeer::AREA_RESPONSABLE;
		}

	} 
	
	public function setValorProceso($v)
	{

		if ($this->valor_proceso !== $v) {
			$this->valor_proceso = $v;
			$this->modifiedColumns[] = ActividadPeer::VALOR_PROCESO;
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
	
	public function setClaseContrato($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->clase_contrato !== $v) {
			$this->clase_contrato = $v;
			$this->modifiedColumns[] = ActividadPeer::CLASE_CONTRATO;
		}

	} 
	
	public function setEstado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = ActividadPeer::ESTADO;
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
	
	public function setGiros($v)
	{

		if ($this->giros !== $v) {
			$this->giros = $v;
			$this->modifiedColumns[] = ActividadPeer::GIROS;
		}

	} 
	
	public function setSaldo($v)
	{

		if ($this->saldo !== $v) {
			$this->saldo = $v;
			$this->modifiedColumns[] = ActividadPeer::SALDO;
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

			$this->proyecto_inversion_id = $rs->getInt($startcol + 1);

			$this->descripcion = $rs->getString($startcol + 2);

			$this->tipo_gasto = $rs->getString($startcol + 3);

			$this->componente_sector = $rs->getString($startcol + 4);

			$this->concepto_gasto = $rs->getString($startcol + 5);

			$this->mes_etapa_contractual = $rs->getString($startcol + 6);

			$this->mes_ejecucion = $rs->getString($startcol + 7);

			$this->reservas = $rs->getFloat($startcol + 8);

			$this->area_responsable = $rs->getString($startcol + 9);

			$this->valor_proceso = $rs->getFloat($startcol + 10);

			$this->numero_solicitud = $rs->getString($startcol + 11);

			$this->fecha_solicitud = $rs->getDate($startcol + 12, null);

			$this->fecha_contrato = $rs->getDate($startcol + 13, null);

			$this->fecha_acta_inicio = $rs->getDate($startcol + 14, null);

			$this->fecha_terminacion = $rs->getDate($startcol + 15, null);

			$this->fecha_liquidacion = $rs->getDate($startcol + 16, null);

			$this->plazo_meses = $rs->getInt($startcol + 17);

			$this->contrato_id = $rs->getInt($startcol + 18);

			$this->clase_contrato = $rs->getString($startcol + 19);

			$this->estado = $rs->getString($startcol + 20);

			$this->existencia_contrato_numero = $rs->getString($startcol + 21);

			$this->giros = $rs->getFloat($startcol + 22);

			$this->saldo = $rs->getFloat($startcol + 23);

			$this->created_at = $rs->getTimestamp($startcol + 24, null);

			$this->updated_at = $rs->getTimestamp($startcol + 25, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 26; 
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


												
			if ($this->aProyectoInversion !== null) {
				if ($this->aProyectoInversion->isModified()) {
					$affectedRows += $this->aProyectoInversion->save($con);
				}
				$this->setProyectoInversion($this->aProyectoInversion);
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

			if ($this->collComponenteActividads !== null) {
				foreach($this->collComponenteActividads as $referrerFK) {
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


												
			if ($this->aProyectoInversion !== null) {
				if (!$this->aProyectoInversion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyectoInversion->getValidationFailures());
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

				if ($this->collComponenteActividads !== null) {
					foreach($this->collComponenteActividads as $referrerFK) {
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
				return $this->getProyectoInversionId();
				break;
			case 2:
				return $this->getDescripcion();
				break;
			case 3:
				return $this->getTipoGasto();
				break;
			case 4:
				return $this->getComponenteSector();
				break;
			case 5:
				return $this->getConceptoGasto();
				break;
			case 6:
				return $this->getMesEtapaContractual();
				break;
			case 7:
				return $this->getMesEjecucion();
				break;
			case 8:
				return $this->getReservas();
				break;
			case 9:
				return $this->getAreaResponsable();
				break;
			case 10:
				return $this->getValorProceso();
				break;
			case 11:
				return $this->getNumeroSolicitud();
				break;
			case 12:
				return $this->getFechaSolicitud();
				break;
			case 13:
				return $this->getFechaContrato();
				break;
			case 14:
				return $this->getFechaActaInicio();
				break;
			case 15:
				return $this->getFechaTerminacion();
				break;
			case 16:
				return $this->getFechaLiquidacion();
				break;
			case 17:
				return $this->getPlazoMeses();
				break;
			case 18:
				return $this->getContratoId();
				break;
			case 19:
				return $this->getClaseContrato();
				break;
			case 20:
				return $this->getEstado();
				break;
			case 21:
				return $this->getExistenciaContratoNumero();
				break;
			case 22:
				return $this->getGiros();
				break;
			case 23:
				return $this->getSaldo();
				break;
			case 24:
				return $this->getCreatedAt();
				break;
			case 25:
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
			$keys[1] => $this->getProyectoInversionId(),
			$keys[2] => $this->getDescripcion(),
			$keys[3] => $this->getTipoGasto(),
			$keys[4] => $this->getComponenteSector(),
			$keys[5] => $this->getConceptoGasto(),
			$keys[6] => $this->getMesEtapaContractual(),
			$keys[7] => $this->getMesEjecucion(),
			$keys[8] => $this->getReservas(),
			$keys[9] => $this->getAreaResponsable(),
			$keys[10] => $this->getValorProceso(),
			$keys[11] => $this->getNumeroSolicitud(),
			$keys[12] => $this->getFechaSolicitud(),
			$keys[13] => $this->getFechaContrato(),
			$keys[14] => $this->getFechaActaInicio(),
			$keys[15] => $this->getFechaTerminacion(),
			$keys[16] => $this->getFechaLiquidacion(),
			$keys[17] => $this->getPlazoMeses(),
			$keys[18] => $this->getContratoId(),
			$keys[19] => $this->getClaseContrato(),
			$keys[20] => $this->getEstado(),
			$keys[21] => $this->getExistenciaContratoNumero(),
			$keys[22] => $this->getGiros(),
			$keys[23] => $this->getSaldo(),
			$keys[24] => $this->getCreatedAt(),
			$keys[25] => $this->getUpdatedAt(),
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
				$this->setProyectoInversionId($value);
				break;
			case 2:
				$this->setDescripcion($value);
				break;
			case 3:
				$this->setTipoGasto($value);
				break;
			case 4:
				$this->setComponenteSector($value);
				break;
			case 5:
				$this->setConceptoGasto($value);
				break;
			case 6:
				$this->setMesEtapaContractual($value);
				break;
			case 7:
				$this->setMesEjecucion($value);
				break;
			case 8:
				$this->setReservas($value);
				break;
			case 9:
				$this->setAreaResponsable($value);
				break;
			case 10:
				$this->setValorProceso($value);
				break;
			case 11:
				$this->setNumeroSolicitud($value);
				break;
			case 12:
				$this->setFechaSolicitud($value);
				break;
			case 13:
				$this->setFechaContrato($value);
				break;
			case 14:
				$this->setFechaActaInicio($value);
				break;
			case 15:
				$this->setFechaTerminacion($value);
				break;
			case 16:
				$this->setFechaLiquidacion($value);
				break;
			case 17:
				$this->setPlazoMeses($value);
				break;
			case 18:
				$this->setContratoId($value);
				break;
			case 19:
				$this->setClaseContrato($value);
				break;
			case 20:
				$this->setEstado($value);
				break;
			case 21:
				$this->setExistenciaContratoNumero($value);
				break;
			case 22:
				$this->setGiros($value);
				break;
			case 23:
				$this->setSaldo($value);
				break;
			case 24:
				$this->setCreatedAt($value);
				break;
			case 25:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProyectoInversionId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTipoGasto($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setComponenteSector($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setConceptoGasto($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMesEtapaContractual($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMesEjecucion($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setReservas($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAreaResponsable($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setValorProceso($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNumeroSolicitud($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFechaSolicitud($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setFechaContrato($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFechaActaInicio($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setFechaTerminacion($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setFechaLiquidacion($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setPlazoMeses($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setContratoId($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setClaseContrato($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setEstado($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setExistenciaContratoNumero($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setGiros($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setSaldo($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setCreatedAt($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setUpdatedAt($arr[$keys[25]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ActividadPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActividadPeer::ID)) $criteria->add(ActividadPeer::ID, $this->id);
		if ($this->isColumnModified(ActividadPeer::PROYECTO_INVERSION_ID)) $criteria->add(ActividadPeer::PROYECTO_INVERSION_ID, $this->proyecto_inversion_id);
		if ($this->isColumnModified(ActividadPeer::DESCRIPCION)) $criteria->add(ActividadPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ActividadPeer::TIPO_GASTO)) $criteria->add(ActividadPeer::TIPO_GASTO, $this->tipo_gasto);
		if ($this->isColumnModified(ActividadPeer::COMPONENTE_SECTOR)) $criteria->add(ActividadPeer::COMPONENTE_SECTOR, $this->componente_sector);
		if ($this->isColumnModified(ActividadPeer::CONCEPTO_GASTO)) $criteria->add(ActividadPeer::CONCEPTO_GASTO, $this->concepto_gasto);
		if ($this->isColumnModified(ActividadPeer::MES_ETAPA_CONTRACTUAL)) $criteria->add(ActividadPeer::MES_ETAPA_CONTRACTUAL, $this->mes_etapa_contractual);
		if ($this->isColumnModified(ActividadPeer::MES_EJECUCION)) $criteria->add(ActividadPeer::MES_EJECUCION, $this->mes_ejecucion);
		if ($this->isColumnModified(ActividadPeer::RESERVAS)) $criteria->add(ActividadPeer::RESERVAS, $this->reservas);
		if ($this->isColumnModified(ActividadPeer::AREA_RESPONSABLE)) $criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->area_responsable);
		if ($this->isColumnModified(ActividadPeer::VALOR_PROCESO)) $criteria->add(ActividadPeer::VALOR_PROCESO, $this->valor_proceso);
		if ($this->isColumnModified(ActividadPeer::NUMERO_SOLICITUD)) $criteria->add(ActividadPeer::NUMERO_SOLICITUD, $this->numero_solicitud);
		if ($this->isColumnModified(ActividadPeer::FECHA_SOLICITUD)) $criteria->add(ActividadPeer::FECHA_SOLICITUD, $this->fecha_solicitud);
		if ($this->isColumnModified(ActividadPeer::FECHA_CONTRATO)) $criteria->add(ActividadPeer::FECHA_CONTRATO, $this->fecha_contrato);
		if ($this->isColumnModified(ActividadPeer::FECHA_ACTA_INICIO)) $criteria->add(ActividadPeer::FECHA_ACTA_INICIO, $this->fecha_acta_inicio);
		if ($this->isColumnModified(ActividadPeer::FECHA_TERMINACION)) $criteria->add(ActividadPeer::FECHA_TERMINACION, $this->fecha_terminacion);
		if ($this->isColumnModified(ActividadPeer::FECHA_LIQUIDACION)) $criteria->add(ActividadPeer::FECHA_LIQUIDACION, $this->fecha_liquidacion);
		if ($this->isColumnModified(ActividadPeer::PLAZO_MESES)) $criteria->add(ActividadPeer::PLAZO_MESES, $this->plazo_meses);
		if ($this->isColumnModified(ActividadPeer::CONTRATO_ID)) $criteria->add(ActividadPeer::CONTRATO_ID, $this->contrato_id);
		if ($this->isColumnModified(ActividadPeer::CLASE_CONTRATO)) $criteria->add(ActividadPeer::CLASE_CONTRATO, $this->clase_contrato);
		if ($this->isColumnModified(ActividadPeer::ESTADO)) $criteria->add(ActividadPeer::ESTADO, $this->estado);
		if ($this->isColumnModified(ActividadPeer::EXISTENCIA_CONTRATO_NUMERO)) $criteria->add(ActividadPeer::EXISTENCIA_CONTRATO_NUMERO, $this->existencia_contrato_numero);
		if ($this->isColumnModified(ActividadPeer::GIROS)) $criteria->add(ActividadPeer::GIROS, $this->giros);
		if ($this->isColumnModified(ActividadPeer::SALDO)) $criteria->add(ActividadPeer::SALDO, $this->saldo);
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

		$copyObj->setProyectoInversionId($this->proyecto_inversion_id);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setTipoGasto($this->tipo_gasto);

		$copyObj->setComponenteSector($this->componente_sector);

		$copyObj->setConceptoGasto($this->concepto_gasto);

		$copyObj->setMesEtapaContractual($this->mes_etapa_contractual);

		$copyObj->setMesEjecucion($this->mes_ejecucion);

		$copyObj->setReservas($this->reservas);

		$copyObj->setAreaResponsable($this->area_responsable);

		$copyObj->setValorProceso($this->valor_proceso);

		$copyObj->setNumeroSolicitud($this->numero_solicitud);

		$copyObj->setFechaSolicitud($this->fecha_solicitud);

		$copyObj->setFechaContrato($this->fecha_contrato);

		$copyObj->setFechaActaInicio($this->fecha_acta_inicio);

		$copyObj->setFechaTerminacion($this->fecha_terminacion);

		$copyObj->setFechaLiquidacion($this->fecha_liquidacion);

		$copyObj->setPlazoMeses($this->plazo_meses);

		$copyObj->setContratoId($this->contrato_id);

		$copyObj->setClaseContrato($this->clase_contrato);

		$copyObj->setEstado($this->estado);

		$copyObj->setExistenciaContratoNumero($this->existencia_contrato_numero);

		$copyObj->setGiros($this->giros);

		$copyObj->setSaldo($this->saldo);

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

			foreach($this->getComponenteActividads() as $relObj) {
				$copyObj->addComponenteActividad($relObj->copy($deepCopy));
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

	
	public function setProyectoInversion($v)
	{


		if ($v === null) {
			$this->setProyectoInversionId(NULL);
		} else {
			$this->setProyectoInversionId($v->getId());
		}


		$this->aProyectoInversion = $v;
	}


	
	public function getProyectoInversion($con = null)
	{
		if ($this->aProyectoInversion === null && ($this->proyecto_inversion_id !== null)) {
						include_once 'lib/model/om/BaseProyectoInversionPeer.php';

			$this->aProyectoInversion = ProyectoInversionPeer::retrieveByPK($this->proyecto_inversion_id, $con);

			
		}
		return $this->aProyectoInversion;
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

	
	public function initComponenteActividads()
	{
		if ($this->collComponenteActividads === null) {
			$this->collComponenteActividads = array();
		}
	}

	
	public function getComponenteActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponenteActividads === null) {
			if ($this->isNew()) {
			   $this->collComponenteActividads = array();
			} else {

				$criteria->add(ComponenteActividadPeer::ACTIVIDAD_ID, $this->getId());

				ComponenteActividadPeer::addSelectColumns($criteria);
				$this->collComponenteActividads = ComponenteActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ComponenteActividadPeer::ACTIVIDAD_ID, $this->getId());

				ComponenteActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastComponenteActividadCriteria) || !$this->lastComponenteActividadCriteria->equals($criteria)) {
					$this->collComponenteActividads = ComponenteActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastComponenteActividadCriteria = $criteria;
		return $this->collComponenteActividads;
	}

	
	public function countComponenteActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ComponenteActividadPeer::ACTIVIDAD_ID, $this->getId());

		return ComponenteActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addComponenteActividad(ComponenteActividad $l)
	{
		$this->collComponenteActividads[] = $l;
		$l->setActividad($this);
	}


	
	public function getComponenteActividadsJoinComponente($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponenteActividads === null) {
			if ($this->isNew()) {
				$this->collComponenteActividads = array();
			} else {

				$criteria->add(ComponenteActividadPeer::ACTIVIDAD_ID, $this->getId());

				$this->collComponenteActividads = ComponenteActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		} else {
									
			$criteria->add(ComponenteActividadPeer::ACTIVIDAD_ID, $this->getId());

			if (!isset($this->lastComponenteActividadCriteria) || !$this->lastComponenteActividadCriteria->equals($criteria)) {
				$this->collComponenteActividads = ComponenteActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		}
		$this->lastComponenteActividadCriteria = $criteria;

		return $this->collComponenteActividads;
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