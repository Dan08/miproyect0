<?php


abstract class BaseIndicador extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $indicador;


	
	protected $borrador;


	
	protected $objetivo_id;


	
	protected $objetivo_estr;


	
	protected $categoria_id;


	
	protected $proceso;


	
	protected $defincion;


	
	protected $medicion;


	
	protected $descripcion;


	
	protected $formula_textual;


	
	protected $tipo;


	
	protected $frecuencia;


	
	protected $responsable_id;


	
	protected $quien_id;


	
	protected $como;


	
	protected $que;


	
	protected $formula;


	
	protected $umbral_rojo;


	
	protected $umbral_amarillo;


	
	protected $umbral_verde;


	
	protected $meta;


	
	protected $iniciativa;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aObjetivo;

	
	protected $aCategoria;

	
	protected $aDependenciaRelatedByResponsableId;

	
	protected $aDependenciaRelatedByQuienId;

	
	protected $collIndicadorVariables;

	
	protected $lastIndicadorVariableCriteria = null;

	
	protected $collHistoricoIndicadors;

	
	protected $lastHistoricoIndicadorCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getIndicador()
	{

		return $this->indicador;
	}

	
	public function getBorrador()
	{

		return $this->borrador;
	}

	
	public function getObjetivoId()
	{

		return $this->objetivo_id;
	}

	
	public function getObjetivoEstr()
	{

		return $this->objetivo_estr;
	}

	
	public function getCategoriaId()
	{

		return $this->categoria_id;
	}

	
	public function getProceso()
	{

		return $this->proceso;
	}

	
	public function getDefincion()
	{

		return $this->defincion;
	}

	
	public function getMedicion()
	{

		return $this->medicion;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getFormulaTextual()
	{

		return $this->formula_textual;
	}

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getFrecuencia()
	{

		return $this->frecuencia;
	}

	
	public function getResponsableId()
	{

		return $this->responsable_id;
	}

	
	public function getQuienId()
	{

		return $this->quien_id;
	}

	
	public function getComo()
	{

		return $this->como;
	}

	
	public function getQue()
	{

		return $this->que;
	}

	
	public function getFormula()
	{

		return $this->formula;
	}

	
	public function getUmbralRojo()
	{

		return $this->umbral_rojo;
	}

	
	public function getUmbralAmarillo()
	{

		return $this->umbral_amarillo;
	}

	
	public function getUmbralVerde()
	{

		return $this->umbral_verde;
	}

	
	public function getMeta()
	{

		return $this->meta;
	}

	
	public function getIniciativa()
	{

		return $this->iniciativa;
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
			$this->modifiedColumns[] = IndicadorPeer::ID;
		}

	} 
	
	public function setIndicador($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->indicador !== $v) {
			$this->indicador = $v;
			$this->modifiedColumns[] = IndicadorPeer::INDICADOR;
		}

	} 
	
	public function setBorrador($v)
	{

		if ($this->borrador !== $v) {
			$this->borrador = $v;
			$this->modifiedColumns[] = IndicadorPeer::BORRADOR;
		}

	} 
	
	public function setObjetivoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->objetivo_id !== $v) {
			$this->objetivo_id = $v;
			$this->modifiedColumns[] = IndicadorPeer::OBJETIVO_ID;
		}

		if ($this->aObjetivo !== null && $this->aObjetivo->getId() !== $v) {
			$this->aObjetivo = null;
		}

	} 
	
	public function setObjetivoEstr($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->objetivo_estr !== $v) {
			$this->objetivo_estr = $v;
			$this->modifiedColumns[] = IndicadorPeer::OBJETIVO_ESTR;
		}

	} 
	
	public function setCategoriaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->categoria_id !== $v) {
			$this->categoria_id = $v;
			$this->modifiedColumns[] = IndicadorPeer::CATEGORIA_ID;
		}

		if ($this->aCategoria !== null && $this->aCategoria->getId() !== $v) {
			$this->aCategoria = null;
		}

	} 
	
	public function setProceso($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proceso !== $v) {
			$this->proceso = $v;
			$this->modifiedColumns[] = IndicadorPeer::PROCESO;
		}

	} 
	
	public function setDefincion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->defincion !== $v) {
			$this->defincion = $v;
			$this->modifiedColumns[] = IndicadorPeer::DEFINCION;
		}

	} 
	
	public function setMedicion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->medicion !== $v) {
			$this->medicion = $v;
			$this->modifiedColumns[] = IndicadorPeer::MEDICION;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = IndicadorPeer::DESCRIPCION;
		}

	} 
	
	public function setFormulaTextual($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->formula_textual !== $v) {
			$this->formula_textual = $v;
			$this->modifiedColumns[] = IndicadorPeer::FORMULA_TEXTUAL;
		}

	} 
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v) {
			$this->tipo = $v;
			$this->modifiedColumns[] = IndicadorPeer::TIPO;
		}

	} 
	
	public function setFrecuencia($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->frecuencia !== $v) {
			$this->frecuencia = $v;
			$this->modifiedColumns[] = IndicadorPeer::FRECUENCIA;
		}

	} 
	
	public function setResponsableId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->responsable_id !== $v) {
			$this->responsable_id = $v;
			$this->modifiedColumns[] = IndicadorPeer::RESPONSABLE_ID;
		}

		if ($this->aDependenciaRelatedByResponsableId !== null && $this->aDependenciaRelatedByResponsableId->getId() !== $v) {
			$this->aDependenciaRelatedByResponsableId = null;
		}

	} 
	
	public function setQuienId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->quien_id !== $v) {
			$this->quien_id = $v;
			$this->modifiedColumns[] = IndicadorPeer::QUIEN_ID;
		}

		if ($this->aDependenciaRelatedByQuienId !== null && $this->aDependenciaRelatedByQuienId->getId() !== $v) {
			$this->aDependenciaRelatedByQuienId = null;
		}

	} 
	
	public function setComo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->como !== $v) {
			$this->como = $v;
			$this->modifiedColumns[] = IndicadorPeer::COMO;
		}

	} 
	
	public function setQue($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->que !== $v) {
			$this->que = $v;
			$this->modifiedColumns[] = IndicadorPeer::QUE;
		}

	} 
	
	public function setFormula($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->formula !== $v) {
			$this->formula = $v;
			$this->modifiedColumns[] = IndicadorPeer::FORMULA;
		}

	} 
	
	public function setUmbralRojo($v)
	{

		if ($this->umbral_rojo !== $v) {
			$this->umbral_rojo = $v;
			$this->modifiedColumns[] = IndicadorPeer::UMBRAL_ROJO;
		}

	} 
	
	public function setUmbralAmarillo($v)
	{

		if ($this->umbral_amarillo !== $v) {
			$this->umbral_amarillo = $v;
			$this->modifiedColumns[] = IndicadorPeer::UMBRAL_AMARILLO;
		}

	} 
	
	public function setUmbralVerde($v)
	{

		if ($this->umbral_verde !== $v) {
			$this->umbral_verde = $v;
			$this->modifiedColumns[] = IndicadorPeer::UMBRAL_VERDE;
		}

	} 
	
	public function setMeta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->meta !== $v) {
			$this->meta = $v;
			$this->modifiedColumns[] = IndicadorPeer::META;
		}

	} 
	
	public function setIniciativa($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->iniciativa !== $v) {
			$this->iniciativa = $v;
			$this->modifiedColumns[] = IndicadorPeer::INICIATIVA;
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
			$this->modifiedColumns[] = IndicadorPeer::CREATED_AT;
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
			$this->modifiedColumns[] = IndicadorPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->indicador = $rs->getString($startcol + 1);

			$this->borrador = $rs->getBoolean($startcol + 2);

			$this->objetivo_id = $rs->getInt($startcol + 3);

			$this->objetivo_estr = $rs->getString($startcol + 4);

			$this->categoria_id = $rs->getInt($startcol + 5);

			$this->proceso = $rs->getInt($startcol + 6);

			$this->defincion = $rs->getString($startcol + 7);

			$this->medicion = $rs->getString($startcol + 8);

			$this->descripcion = $rs->getString($startcol + 9);

			$this->formula_textual = $rs->getString($startcol + 10);

			$this->tipo = $rs->getString($startcol + 11);

			$this->frecuencia = $rs->getString($startcol + 12);

			$this->responsable_id = $rs->getInt($startcol + 13);

			$this->quien_id = $rs->getInt($startcol + 14);

			$this->como = $rs->getString($startcol + 15);

			$this->que = $rs->getString($startcol + 16);

			$this->formula = $rs->getString($startcol + 17);

			$this->umbral_rojo = $rs->getFloat($startcol + 18);

			$this->umbral_amarillo = $rs->getFloat($startcol + 19);

			$this->umbral_verde = $rs->getFloat($startcol + 20);

			$this->meta = $rs->getString($startcol + 21);

			$this->iniciativa = $rs->getString($startcol + 22);

			$this->created_at = $rs->getTimestamp($startcol + 23, null);

			$this->updated_at = $rs->getTimestamp($startcol + 24, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 25; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Indicador object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(IndicadorPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			IndicadorPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(IndicadorPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(IndicadorPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(IndicadorPeer::DATABASE_NAME);
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


												
			if ($this->aObjetivo !== null) {
				if ($this->aObjetivo->isModified()) {
					$affectedRows += $this->aObjetivo->save($con);
				}
				$this->setObjetivo($this->aObjetivo);
			}

			if ($this->aCategoria !== null) {
				if ($this->aCategoria->isModified()) {
					$affectedRows += $this->aCategoria->save($con);
				}
				$this->setCategoria($this->aCategoria);
			}

			if ($this->aDependenciaRelatedByResponsableId !== null) {
				if ($this->aDependenciaRelatedByResponsableId->isModified()) {
					$affectedRows += $this->aDependenciaRelatedByResponsableId->save($con);
				}
				$this->setDependenciaRelatedByResponsableId($this->aDependenciaRelatedByResponsableId);
			}

			if ($this->aDependenciaRelatedByQuienId !== null) {
				if ($this->aDependenciaRelatedByQuienId->isModified()) {
					$affectedRows += $this->aDependenciaRelatedByQuienId->save($con);
				}
				$this->setDependenciaRelatedByQuienId($this->aDependenciaRelatedByQuienId);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = IndicadorPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += IndicadorPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collIndicadorVariables !== null) {
				foreach($this->collIndicadorVariables as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collHistoricoIndicadors !== null) {
				foreach($this->collHistoricoIndicadors as $referrerFK) {
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


												
			if ($this->aObjetivo !== null) {
				if (!$this->aObjetivo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aObjetivo->getValidationFailures());
				}
			}

			if ($this->aCategoria !== null) {
				if (!$this->aCategoria->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCategoria->getValidationFailures());
				}
			}

			if ($this->aDependenciaRelatedByResponsableId !== null) {
				if (!$this->aDependenciaRelatedByResponsableId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDependenciaRelatedByResponsableId->getValidationFailures());
				}
			}

			if ($this->aDependenciaRelatedByQuienId !== null) {
				if (!$this->aDependenciaRelatedByQuienId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDependenciaRelatedByQuienId->getValidationFailures());
				}
			}


			if (($retval = IndicadorPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIndicadorVariables !== null) {
					foreach($this->collIndicadorVariables as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collHistoricoIndicadors !== null) {
					foreach($this->collHistoricoIndicadors as $referrerFK) {
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
		$pos = IndicadorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getIndicador();
				break;
			case 2:
				return $this->getBorrador();
				break;
			case 3:
				return $this->getObjetivoId();
				break;
			case 4:
				return $this->getObjetivoEstr();
				break;
			case 5:
				return $this->getCategoriaId();
				break;
			case 6:
				return $this->getProceso();
				break;
			case 7:
				return $this->getDefincion();
				break;
			case 8:
				return $this->getMedicion();
				break;
			case 9:
				return $this->getDescripcion();
				break;
			case 10:
				return $this->getFormulaTextual();
				break;
			case 11:
				return $this->getTipo();
				break;
			case 12:
				return $this->getFrecuencia();
				break;
			case 13:
				return $this->getResponsableId();
				break;
			case 14:
				return $this->getQuienId();
				break;
			case 15:
				return $this->getComo();
				break;
			case 16:
				return $this->getQue();
				break;
			case 17:
				return $this->getFormula();
				break;
			case 18:
				return $this->getUmbralRojo();
				break;
			case 19:
				return $this->getUmbralAmarillo();
				break;
			case 20:
				return $this->getUmbralVerde();
				break;
			case 21:
				return $this->getMeta();
				break;
			case 22:
				return $this->getIniciativa();
				break;
			case 23:
				return $this->getCreatedAt();
				break;
			case 24:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IndicadorPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndicador(),
			$keys[2] => $this->getBorrador(),
			$keys[3] => $this->getObjetivoId(),
			$keys[4] => $this->getObjetivoEstr(),
			$keys[5] => $this->getCategoriaId(),
			$keys[6] => $this->getProceso(),
			$keys[7] => $this->getDefincion(),
			$keys[8] => $this->getMedicion(),
			$keys[9] => $this->getDescripcion(),
			$keys[10] => $this->getFormulaTextual(),
			$keys[11] => $this->getTipo(),
			$keys[12] => $this->getFrecuencia(),
			$keys[13] => $this->getResponsableId(),
			$keys[14] => $this->getQuienId(),
			$keys[15] => $this->getComo(),
			$keys[16] => $this->getQue(),
			$keys[17] => $this->getFormula(),
			$keys[18] => $this->getUmbralRojo(),
			$keys[19] => $this->getUmbralAmarillo(),
			$keys[20] => $this->getUmbralVerde(),
			$keys[21] => $this->getMeta(),
			$keys[22] => $this->getIniciativa(),
			$keys[23] => $this->getCreatedAt(),
			$keys[24] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IndicadorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setIndicador($value);
				break;
			case 2:
				$this->setBorrador($value);
				break;
			case 3:
				$this->setObjetivoId($value);
				break;
			case 4:
				$this->setObjetivoEstr($value);
				break;
			case 5:
				$this->setCategoriaId($value);
				break;
			case 6:
				$this->setProceso($value);
				break;
			case 7:
				$this->setDefincion($value);
				break;
			case 8:
				$this->setMedicion($value);
				break;
			case 9:
				$this->setDescripcion($value);
				break;
			case 10:
				$this->setFormulaTextual($value);
				break;
			case 11:
				$this->setTipo($value);
				break;
			case 12:
				$this->setFrecuencia($value);
				break;
			case 13:
				$this->setResponsableId($value);
				break;
			case 14:
				$this->setQuienId($value);
				break;
			case 15:
				$this->setComo($value);
				break;
			case 16:
				$this->setQue($value);
				break;
			case 17:
				$this->setFormula($value);
				break;
			case 18:
				$this->setUmbralRojo($value);
				break;
			case 19:
				$this->setUmbralAmarillo($value);
				break;
			case 20:
				$this->setUmbralVerde($value);
				break;
			case 21:
				$this->setMeta($value);
				break;
			case 22:
				$this->setIniciativa($value);
				break;
			case 23:
				$this->setCreatedAt($value);
				break;
			case 24:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IndicadorPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndicador($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBorrador($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setObjetivoId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setObjetivoEstr($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCategoriaId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setProceso($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDefincion($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMedicion($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDescripcion($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFormulaTextual($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTipo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFrecuencia($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setResponsableId($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setQuienId($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setComo($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setQue($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setFormula($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setUmbralRojo($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setUmbralAmarillo($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUmbralVerde($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setMeta($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setIniciativa($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setCreatedAt($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setUpdatedAt($arr[$keys[24]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(IndicadorPeer::DATABASE_NAME);

		if ($this->isColumnModified(IndicadorPeer::ID)) $criteria->add(IndicadorPeer::ID, $this->id);
		if ($this->isColumnModified(IndicadorPeer::INDICADOR)) $criteria->add(IndicadorPeer::INDICADOR, $this->indicador);
		if ($this->isColumnModified(IndicadorPeer::BORRADOR)) $criteria->add(IndicadorPeer::BORRADOR, $this->borrador);
		if ($this->isColumnModified(IndicadorPeer::OBJETIVO_ID)) $criteria->add(IndicadorPeer::OBJETIVO_ID, $this->objetivo_id);
		if ($this->isColumnModified(IndicadorPeer::OBJETIVO_ESTR)) $criteria->add(IndicadorPeer::OBJETIVO_ESTR, $this->objetivo_estr);
		if ($this->isColumnModified(IndicadorPeer::CATEGORIA_ID)) $criteria->add(IndicadorPeer::CATEGORIA_ID, $this->categoria_id);
		if ($this->isColumnModified(IndicadorPeer::PROCESO)) $criteria->add(IndicadorPeer::PROCESO, $this->proceso);
		if ($this->isColumnModified(IndicadorPeer::DEFINCION)) $criteria->add(IndicadorPeer::DEFINCION, $this->defincion);
		if ($this->isColumnModified(IndicadorPeer::MEDICION)) $criteria->add(IndicadorPeer::MEDICION, $this->medicion);
		if ($this->isColumnModified(IndicadorPeer::DESCRIPCION)) $criteria->add(IndicadorPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(IndicadorPeer::FORMULA_TEXTUAL)) $criteria->add(IndicadorPeer::FORMULA_TEXTUAL, $this->formula_textual);
		if ($this->isColumnModified(IndicadorPeer::TIPO)) $criteria->add(IndicadorPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(IndicadorPeer::FRECUENCIA)) $criteria->add(IndicadorPeer::FRECUENCIA, $this->frecuencia);
		if ($this->isColumnModified(IndicadorPeer::RESPONSABLE_ID)) $criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->responsable_id);
		if ($this->isColumnModified(IndicadorPeer::QUIEN_ID)) $criteria->add(IndicadorPeer::QUIEN_ID, $this->quien_id);
		if ($this->isColumnModified(IndicadorPeer::COMO)) $criteria->add(IndicadorPeer::COMO, $this->como);
		if ($this->isColumnModified(IndicadorPeer::QUE)) $criteria->add(IndicadorPeer::QUE, $this->que);
		if ($this->isColumnModified(IndicadorPeer::FORMULA)) $criteria->add(IndicadorPeer::FORMULA, $this->formula);
		if ($this->isColumnModified(IndicadorPeer::UMBRAL_ROJO)) $criteria->add(IndicadorPeer::UMBRAL_ROJO, $this->umbral_rojo);
		if ($this->isColumnModified(IndicadorPeer::UMBRAL_AMARILLO)) $criteria->add(IndicadorPeer::UMBRAL_AMARILLO, $this->umbral_amarillo);
		if ($this->isColumnModified(IndicadorPeer::UMBRAL_VERDE)) $criteria->add(IndicadorPeer::UMBRAL_VERDE, $this->umbral_verde);
		if ($this->isColumnModified(IndicadorPeer::META)) $criteria->add(IndicadorPeer::META, $this->meta);
		if ($this->isColumnModified(IndicadorPeer::INICIATIVA)) $criteria->add(IndicadorPeer::INICIATIVA, $this->iniciativa);
		if ($this->isColumnModified(IndicadorPeer::CREATED_AT)) $criteria->add(IndicadorPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(IndicadorPeer::UPDATED_AT)) $criteria->add(IndicadorPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(IndicadorPeer::DATABASE_NAME);

		$criteria->add(IndicadorPeer::ID, $this->id);

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

		$copyObj->setIndicador($this->indicador);

		$copyObj->setBorrador($this->borrador);

		$copyObj->setObjetivoId($this->objetivo_id);

		$copyObj->setObjetivoEstr($this->objetivo_estr);

		$copyObj->setCategoriaId($this->categoria_id);

		$copyObj->setProceso($this->proceso);

		$copyObj->setDefincion($this->defincion);

		$copyObj->setMedicion($this->medicion);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setFormulaTextual($this->formula_textual);

		$copyObj->setTipo($this->tipo);

		$copyObj->setFrecuencia($this->frecuencia);

		$copyObj->setResponsableId($this->responsable_id);

		$copyObj->setQuienId($this->quien_id);

		$copyObj->setComo($this->como);

		$copyObj->setQue($this->que);

		$copyObj->setFormula($this->formula);

		$copyObj->setUmbralRojo($this->umbral_rojo);

		$copyObj->setUmbralAmarillo($this->umbral_amarillo);

		$copyObj->setUmbralVerde($this->umbral_verde);

		$copyObj->setMeta($this->meta);

		$copyObj->setIniciativa($this->iniciativa);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getIndicadorVariables() as $relObj) {
				$copyObj->addIndicadorVariable($relObj->copy($deepCopy));
			}

			foreach($this->getHistoricoIndicadors() as $relObj) {
				$copyObj->addHistoricoIndicador($relObj->copy($deepCopy));
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
			self::$peer = new IndicadorPeer();
		}
		return self::$peer;
	}

	
	public function setObjetivo($v)
	{


		if ($v === null) {
			$this->setObjetivoId(NULL);
		} else {
			$this->setObjetivoId($v->getId());
		}


		$this->aObjetivo = $v;
	}


	
	public function getObjetivo($con = null)
	{
		if ($this->aObjetivo === null && ($this->objetivo_id !== null)) {
						include_once 'lib/model/om/BaseObjetivoPeer.php';

			$this->aObjetivo = ObjetivoPeer::retrieveByPK($this->objetivo_id, $con);

			
		}
		return $this->aObjetivo;
	}

	
	public function setCategoria($v)
	{


		if ($v === null) {
			$this->setCategoriaId(NULL);
		} else {
			$this->setCategoriaId($v->getId());
		}


		$this->aCategoria = $v;
	}


	
	public function getCategoria($con = null)
	{
		if ($this->aCategoria === null && ($this->categoria_id !== null)) {
						include_once 'lib/model/om/BaseCategoriaPeer.php';

			$this->aCategoria = CategoriaPeer::retrieveByPK($this->categoria_id, $con);

			
		}
		return $this->aCategoria;
	}

	
	public function setDependenciaRelatedByResponsableId($v)
	{


		if ($v === null) {
			$this->setResponsableId(NULL);
		} else {
			$this->setResponsableId($v->getId());
		}


		$this->aDependenciaRelatedByResponsableId = $v;
	}


	
	public function getDependenciaRelatedByResponsableId($con = null)
	{
		if ($this->aDependenciaRelatedByResponsableId === null && ($this->responsable_id !== null)) {
						include_once 'lib/model/om/BaseDependenciaPeer.php';

			$this->aDependenciaRelatedByResponsableId = DependenciaPeer::retrieveByPK($this->responsable_id, $con);

			
		}
		return $this->aDependenciaRelatedByResponsableId;
	}

	
	public function setDependenciaRelatedByQuienId($v)
	{


		if ($v === null) {
			$this->setQuienId(NULL);
		} else {
			$this->setQuienId($v->getId());
		}


		$this->aDependenciaRelatedByQuienId = $v;
	}


	
	public function getDependenciaRelatedByQuienId($con = null)
	{
		if ($this->aDependenciaRelatedByQuienId === null && ($this->quien_id !== null)) {
						include_once 'lib/model/om/BaseDependenciaPeer.php';

			$this->aDependenciaRelatedByQuienId = DependenciaPeer::retrieveByPK($this->quien_id, $con);

			
		}
		return $this->aDependenciaRelatedByQuienId;
	}

	
	public function initIndicadorVariables()
	{
		if ($this->collIndicadorVariables === null) {
			$this->collIndicadorVariables = array();
		}
	}

	
	public function getIndicadorVariables($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorVariables === null) {
			if ($this->isNew()) {
			   $this->collIndicadorVariables = array();
			} else {

				$criteria->add(IndicadorVariablePeer::INDICADOR_ID, $this->getId());

				IndicadorVariablePeer::addSelectColumns($criteria);
				$this->collIndicadorVariables = IndicadorVariablePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorVariablePeer::INDICADOR_ID, $this->getId());

				IndicadorVariablePeer::addSelectColumns($criteria);
				if (!isset($this->lastIndicadorVariableCriteria) || !$this->lastIndicadorVariableCriteria->equals($criteria)) {
					$this->collIndicadorVariables = IndicadorVariablePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastIndicadorVariableCriteria = $criteria;
		return $this->collIndicadorVariables;
	}

	
	public function countIndicadorVariables($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(IndicadorVariablePeer::INDICADOR_ID, $this->getId());

		return IndicadorVariablePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicadorVariable(IndicadorVariable $l)
	{
		$this->collIndicadorVariables[] = $l;
		$l->setIndicador($this);
	}


	
	public function getIndicadorVariablesJoinVariable($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorVariables === null) {
			if ($this->isNew()) {
				$this->collIndicadorVariables = array();
			} else {

				$criteria->add(IndicadorVariablePeer::INDICADOR_ID, $this->getId());

				$this->collIndicadorVariables = IndicadorVariablePeer::doSelectJoinVariable($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorVariablePeer::INDICADOR_ID, $this->getId());

			if (!isset($this->lastIndicadorVariableCriteria) || !$this->lastIndicadorVariableCriteria->equals($criteria)) {
				$this->collIndicadorVariables = IndicadorVariablePeer::doSelectJoinVariable($criteria, $con);
			}
		}
		$this->lastIndicadorVariableCriteria = $criteria;

		return $this->collIndicadorVariables;
	}

	
	public function initHistoricoIndicadors()
	{
		if ($this->collHistoricoIndicadors === null) {
			$this->collHistoricoIndicadors = array();
		}
	}

	
	public function getHistoricoIndicadors($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseHistoricoIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHistoricoIndicadors === null) {
			if ($this->isNew()) {
			   $this->collHistoricoIndicadors = array();
			} else {

				$criteria->add(HistoricoIndicadorPeer::INDICADOR_ID, $this->getId());

				HistoricoIndicadorPeer::addSelectColumns($criteria);
				$this->collHistoricoIndicadors = HistoricoIndicadorPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HistoricoIndicadorPeer::INDICADOR_ID, $this->getId());

				HistoricoIndicadorPeer::addSelectColumns($criteria);
				if (!isset($this->lastHistoricoIndicadorCriteria) || !$this->lastHistoricoIndicadorCriteria->equals($criteria)) {
					$this->collHistoricoIndicadors = HistoricoIndicadorPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastHistoricoIndicadorCriteria = $criteria;
		return $this->collHistoricoIndicadors;
	}

	
	public function countHistoricoIndicadors($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseHistoricoIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(HistoricoIndicadorPeer::INDICADOR_ID, $this->getId());

		return HistoricoIndicadorPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHistoricoIndicador(HistoricoIndicador $l)
	{
		$this->collHistoricoIndicadors[] = $l;
		$l->setIndicador($this);
	}

} 