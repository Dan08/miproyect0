<?php


abstract class BaseContrato extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $numero;


	
	protected $contratista;


	
	protected $fecha_firma;


	
	protected $fecha_acta_inicio;


	
	protected $fecha_terminacion;


	
	protected $fecha_liquidacion;


	
	protected $modalidad_contratacion;


	
	protected $cantidad;


	
	protected $unidad_medida;


	
	protected $clase_contrato;


	
	protected $plazo;


	
	protected $estado;

	
	protected $collActividads;

	
	protected $lastActividadCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNumero()
	{

		return $this->numero;
	}

	
	public function getContratista()
	{

		return $this->contratista;
	}

	
	public function getFechaFirma($format = 'Y-m-d')
	{

		if ($this->fecha_firma === null || $this->fecha_firma === '') {
			return null;
		} elseif (!is_int($this->fecha_firma)) {
						$ts = strtotime($this->fecha_firma);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_firma] as date/time value: " . var_export($this->fecha_firma, true));
			}
		} else {
			$ts = $this->fecha_firma;
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

	
	public function getModalidadContratacion()
	{

		return $this->modalidad_contratacion;
	}

	
	public function getCantidad()
	{

		return $this->cantidad;
	}

	
	public function getUnidadMedida()
	{

		return $this->unidad_medida;
	}

	
	public function getClaseContrato()
	{

		return $this->clase_contrato;
	}

	
	public function getPlazo()
	{

		return $this->plazo;
	}

	
	public function getEstado()
	{

		return $this->estado;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ContratoPeer::ID;
		}

	} 
	
	public function setNumero($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numero !== $v) {
			$this->numero = $v;
			$this->modifiedColumns[] = ContratoPeer::NUMERO;
		}

	} 
	
	public function setContratista($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contratista !== $v) {
			$this->contratista = $v;
			$this->modifiedColumns[] = ContratoPeer::CONTRATISTA;
		}

	} 
	
	public function setFechaFirma($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_firma] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_firma !== $ts) {
			$this->fecha_firma = $ts;
			$this->modifiedColumns[] = ContratoPeer::FECHA_FIRMA;
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
			$this->modifiedColumns[] = ContratoPeer::FECHA_ACTA_INICIO;
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
			$this->modifiedColumns[] = ContratoPeer::FECHA_TERMINACION;
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
			$this->modifiedColumns[] = ContratoPeer::FECHA_LIQUIDACION;
		}

	} 
	
	public function setModalidadContratacion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modalidad_contratacion !== $v) {
			$this->modalidad_contratacion = $v;
			$this->modifiedColumns[] = ContratoPeer::MODALIDAD_CONTRATACION;
		}

	} 
	
	public function setCantidad($v)
	{

		if ($this->cantidad !== $v) {
			$this->cantidad = $v;
			$this->modifiedColumns[] = ContratoPeer::CANTIDAD;
		}

	} 
	
	public function setUnidadMedida($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->unidad_medida !== $v) {
			$this->unidad_medida = $v;
			$this->modifiedColumns[] = ContratoPeer::UNIDAD_MEDIDA;
		}

	} 
	
	public function setClaseContrato($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->clase_contrato !== $v) {
			$this->clase_contrato = $v;
			$this->modifiedColumns[] = ContratoPeer::CLASE_CONTRATO;
		}

	} 
	
	public function setPlazo($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->plazo !== $v) {
			$this->plazo = $v;
			$this->modifiedColumns[] = ContratoPeer::PLAZO;
		}

	} 
	
	public function setEstado($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->estado !== $v) {
			$this->estado = $v;
			$this->modifiedColumns[] = ContratoPeer::ESTADO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->numero = $rs->getString($startcol + 1);

			$this->contratista = $rs->getString($startcol + 2);

			$this->fecha_firma = $rs->getDate($startcol + 3, null);

			$this->fecha_acta_inicio = $rs->getDate($startcol + 4, null);

			$this->fecha_terminacion = $rs->getDate($startcol + 5, null);

			$this->fecha_liquidacion = $rs->getDate($startcol + 6, null);

			$this->modalidad_contratacion = $rs->getString($startcol + 7);

			$this->cantidad = $rs->getFloat($startcol + 8);

			$this->unidad_medida = $rs->getString($startcol + 9);

			$this->clase_contrato = $rs->getString($startcol + 10);

			$this->plazo = $rs->getInt($startcol + 11);

			$this->estado = $rs->getString($startcol + 12);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 13; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Contrato object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ContratoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ContratoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ContratoPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ContratoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ContratoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collActividads !== null) {
				foreach($this->collActividads as $referrerFK) {
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


			if (($retval = ContratoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collActividads !== null) {
					foreach($this->collActividads as $referrerFK) {
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
		$pos = ContratoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNumero();
				break;
			case 2:
				return $this->getContratista();
				break;
			case 3:
				return $this->getFechaFirma();
				break;
			case 4:
				return $this->getFechaActaInicio();
				break;
			case 5:
				return $this->getFechaTerminacion();
				break;
			case 6:
				return $this->getFechaLiquidacion();
				break;
			case 7:
				return $this->getModalidadContratacion();
				break;
			case 8:
				return $this->getCantidad();
				break;
			case 9:
				return $this->getUnidadMedida();
				break;
			case 10:
				return $this->getClaseContrato();
				break;
			case 11:
				return $this->getPlazo();
				break;
			case 12:
				return $this->getEstado();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ContratoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNumero(),
			$keys[2] => $this->getContratista(),
			$keys[3] => $this->getFechaFirma(),
			$keys[4] => $this->getFechaActaInicio(),
			$keys[5] => $this->getFechaTerminacion(),
			$keys[6] => $this->getFechaLiquidacion(),
			$keys[7] => $this->getModalidadContratacion(),
			$keys[8] => $this->getCantidad(),
			$keys[9] => $this->getUnidadMedida(),
			$keys[10] => $this->getClaseContrato(),
			$keys[11] => $this->getPlazo(),
			$keys[12] => $this->getEstado(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ContratoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNumero($value);
				break;
			case 2:
				$this->setContratista($value);
				break;
			case 3:
				$this->setFechaFirma($value);
				break;
			case 4:
				$this->setFechaActaInicio($value);
				break;
			case 5:
				$this->setFechaTerminacion($value);
				break;
			case 6:
				$this->setFechaLiquidacion($value);
				break;
			case 7:
				$this->setModalidadContratacion($value);
				break;
			case 8:
				$this->setCantidad($value);
				break;
			case 9:
				$this->setUnidadMedida($value);
				break;
			case 10:
				$this->setClaseContrato($value);
				break;
			case 11:
				$this->setPlazo($value);
				break;
			case 12:
				$this->setEstado($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ContratoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNumero($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setContratista($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFechaFirma($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFechaActaInicio($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFechaTerminacion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFechaLiquidacion($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setModalidadContratacion($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCantidad($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUnidadMedida($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setClaseContrato($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPlazo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEstado($arr[$keys[12]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ContratoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ContratoPeer::ID)) $criteria->add(ContratoPeer::ID, $this->id);
		if ($this->isColumnModified(ContratoPeer::NUMERO)) $criteria->add(ContratoPeer::NUMERO, $this->numero);
		if ($this->isColumnModified(ContratoPeer::CONTRATISTA)) $criteria->add(ContratoPeer::CONTRATISTA, $this->contratista);
		if ($this->isColumnModified(ContratoPeer::FECHA_FIRMA)) $criteria->add(ContratoPeer::FECHA_FIRMA, $this->fecha_firma);
		if ($this->isColumnModified(ContratoPeer::FECHA_ACTA_INICIO)) $criteria->add(ContratoPeer::FECHA_ACTA_INICIO, $this->fecha_acta_inicio);
		if ($this->isColumnModified(ContratoPeer::FECHA_TERMINACION)) $criteria->add(ContratoPeer::FECHA_TERMINACION, $this->fecha_terminacion);
		if ($this->isColumnModified(ContratoPeer::FECHA_LIQUIDACION)) $criteria->add(ContratoPeer::FECHA_LIQUIDACION, $this->fecha_liquidacion);
		if ($this->isColumnModified(ContratoPeer::MODALIDAD_CONTRATACION)) $criteria->add(ContratoPeer::MODALIDAD_CONTRATACION, $this->modalidad_contratacion);
		if ($this->isColumnModified(ContratoPeer::CANTIDAD)) $criteria->add(ContratoPeer::CANTIDAD, $this->cantidad);
		if ($this->isColumnModified(ContratoPeer::UNIDAD_MEDIDA)) $criteria->add(ContratoPeer::UNIDAD_MEDIDA, $this->unidad_medida);
		if ($this->isColumnModified(ContratoPeer::CLASE_CONTRATO)) $criteria->add(ContratoPeer::CLASE_CONTRATO, $this->clase_contrato);
		if ($this->isColumnModified(ContratoPeer::PLAZO)) $criteria->add(ContratoPeer::PLAZO, $this->plazo);
		if ($this->isColumnModified(ContratoPeer::ESTADO)) $criteria->add(ContratoPeer::ESTADO, $this->estado);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ContratoPeer::DATABASE_NAME);

		$criteria->add(ContratoPeer::ID, $this->id);

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

		$copyObj->setNumero($this->numero);

		$copyObj->setContratista($this->contratista);

		$copyObj->setFechaFirma($this->fecha_firma);

		$copyObj->setFechaActaInicio($this->fecha_acta_inicio);

		$copyObj->setFechaTerminacion($this->fecha_terminacion);

		$copyObj->setFechaLiquidacion($this->fecha_liquidacion);

		$copyObj->setModalidadContratacion($this->modalidad_contratacion);

		$copyObj->setCantidad($this->cantidad);

		$copyObj->setUnidadMedida($this->unidad_medida);

		$copyObj->setClaseContrato($this->clase_contrato);

		$copyObj->setPlazo($this->plazo);

		$copyObj->setEstado($this->estado);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getActividads() as $relObj) {
				$copyObj->addActividad($relObj->copy($deepCopy));
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
			self::$peer = new ContratoPeer();
		}
		return self::$peer;
	}

	
	public function initActividads()
	{
		if ($this->collActividads === null) {
			$this->collActividads = array();
		}
	}

	
	public function getActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
			   $this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				$this->collActividads = ActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
					$this->collActividads = ActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadCriteria = $criteria;
		return $this->collActividads;
	}

	
	public function countActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

		return ActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividad(Actividad $l)
	{
		$this->collActividads[] = $l;
		$l->setContrato($this);
	}


	
	public function getActividadsJoinProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinProyecto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinTipoGasto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinTipoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinTipoGasto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinComponenteSector($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinComponenteSector($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinComponenteSector($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinConceptoGasto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinConceptoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinConceptoGasto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinMetaProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinDependencia($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinDependencia($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinDependencia($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinComponente($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}

} 