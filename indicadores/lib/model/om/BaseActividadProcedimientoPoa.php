<?php


abstract class BaseActividadProcedimientoPoa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $procedimiento_poa_id;


	
	protected $actividad;


	
	protected $descripcion;


	
	protected $ponderacion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aProcedimientoPoa;

	
	protected $collSubactividadProcedimientoPoas;

	
	protected $lastSubactividadProcedimientoPoaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getProcedimientoPoaId()
	{

		return $this->procedimiento_poa_id;
	}

	
	public function getActividad()
	{

		return $this->actividad;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getPonderacion()
	{

		return $this->ponderacion;
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
			$this->modifiedColumns[] = ActividadProcedimientoPoaPeer::ID;
		}

	} 
	
	public function setProcedimientoPoaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->procedimiento_poa_id !== $v) {
			$this->procedimiento_poa_id = $v;
			$this->modifiedColumns[] = ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID;
		}

		if ($this->aProcedimientoPoa !== null && $this->aProcedimientoPoa->getId() !== $v) {
			$this->aProcedimientoPoa = null;
		}

	} 
	
	public function setActividad($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->actividad !== $v) {
			$this->actividad = $v;
			$this->modifiedColumns[] = ActividadProcedimientoPoaPeer::ACTIVIDAD;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ActividadProcedimientoPoaPeer::DESCRIPCION;
		}

	} 
	
	public function setPonderacion($v)
	{

		if ($this->ponderacion !== $v) {
			$this->ponderacion = $v;
			$this->modifiedColumns[] = ActividadProcedimientoPoaPeer::PONDERACION;
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
			$this->modifiedColumns[] = ActividadProcedimientoPoaPeer::CREATED_AT;
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
			$this->modifiedColumns[] = ActividadProcedimientoPoaPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->procedimiento_poa_id = $rs->getInt($startcol + 1);

			$this->actividad = $rs->getString($startcol + 2);

			$this->descripcion = $rs->getString($startcol + 3);

			$this->ponderacion = $rs->getFloat($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ActividadProcedimientoPoa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadProcedimientoPoaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ActividadProcedimientoPoaPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ActividadProcedimientoPoaPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ActividadProcedimientoPoaPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadProcedimientoPoaPeer::DATABASE_NAME);
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


												
			if ($this->aProcedimientoPoa !== null) {
				if ($this->aProcedimientoPoa->isModified()) {
					$affectedRows += $this->aProcedimientoPoa->save($con);
				}
				$this->setProcedimientoPoa($this->aProcedimientoPoa);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ActividadProcedimientoPoaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ActividadProcedimientoPoaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collSubactividadProcedimientoPoas !== null) {
				foreach($this->collSubactividadProcedimientoPoas as $referrerFK) {
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


												
			if ($this->aProcedimientoPoa !== null) {
				if (!$this->aProcedimientoPoa->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProcedimientoPoa->getValidationFailures());
				}
			}


			if (($retval = ActividadProcedimientoPoaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSubactividadProcedimientoPoas !== null) {
					foreach($this->collSubactividadProcedimientoPoas as $referrerFK) {
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
		$pos = ActividadProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getProcedimientoPoaId();
				break;
			case 2:
				return $this->getActividad();
				break;
			case 3:
				return $this->getDescripcion();
				break;
			case 4:
				return $this->getPonderacion();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadProcedimientoPoaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getProcedimientoPoaId(),
			$keys[2] => $this->getActividad(),
			$keys[3] => $this->getDescripcion(),
			$keys[4] => $this->getPonderacion(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setProcedimientoPoaId($value);
				break;
			case 2:
				$this->setActividad($value);
				break;
			case 3:
				$this->setDescripcion($value);
				break;
			case 4:
				$this->setPonderacion($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadProcedimientoPoaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProcedimientoPoaId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setActividad($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescripcion($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPonderacion($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ActividadProcedimientoPoaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActividadProcedimientoPoaPeer::ID)) $criteria->add(ActividadProcedimientoPoaPeer::ID, $this->id);
		if ($this->isColumnModified(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID)) $criteria->add(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, $this->procedimiento_poa_id);
		if ($this->isColumnModified(ActividadProcedimientoPoaPeer::ACTIVIDAD)) $criteria->add(ActividadProcedimientoPoaPeer::ACTIVIDAD, $this->actividad);
		if ($this->isColumnModified(ActividadProcedimientoPoaPeer::DESCRIPCION)) $criteria->add(ActividadProcedimientoPoaPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ActividadProcedimientoPoaPeer::PONDERACION)) $criteria->add(ActividadProcedimientoPoaPeer::PONDERACION, $this->ponderacion);
		if ($this->isColumnModified(ActividadProcedimientoPoaPeer::CREATED_AT)) $criteria->add(ActividadProcedimientoPoaPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ActividadProcedimientoPoaPeer::UPDATED_AT)) $criteria->add(ActividadProcedimientoPoaPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ActividadProcedimientoPoaPeer::DATABASE_NAME);

		$criteria->add(ActividadProcedimientoPoaPeer::ID, $this->id);

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

		$copyObj->setProcedimientoPoaId($this->procedimiento_poa_id);

		$copyObj->setActividad($this->actividad);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setPonderacion($this->ponderacion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getSubactividadProcedimientoPoas() as $relObj) {
				$copyObj->addSubactividadProcedimientoPoa($relObj->copy($deepCopy));
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
			self::$peer = new ActividadProcedimientoPoaPeer();
		}
		return self::$peer;
	}

	
	public function setProcedimientoPoa($v)
	{


		if ($v === null) {
			$this->setProcedimientoPoaId(NULL);
		} else {
			$this->setProcedimientoPoaId($v->getId());
		}


		$this->aProcedimientoPoa = $v;
	}


	
	public function getProcedimientoPoa($con = null)
	{
		if ($this->aProcedimientoPoa === null && ($this->procedimiento_poa_id !== null)) {
						include_once 'lib/model/om/BaseProcedimientoPoaPeer.php';

			$this->aProcedimientoPoa = ProcedimientoPoaPeer::retrieveByPK($this->procedimiento_poa_id, $con);

			
		}
		return $this->aProcedimientoPoa;
	}

	
	public function initSubactividadProcedimientoPoas()
	{
		if ($this->collSubactividadProcedimientoPoas === null) {
			$this->collSubactividadProcedimientoPoas = array();
		}
	}

	
	public function getSubactividadProcedimientoPoas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadProcedimientoPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSubactividadProcedimientoPoas === null) {
			if ($this->isNew()) {
			   $this->collSubactividadProcedimientoPoas = array();
			} else {

				$criteria->add(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, $this->getId());

				SubactividadProcedimientoPoaPeer::addSelectColumns($criteria);
				$this->collSubactividadProcedimientoPoas = SubactividadProcedimientoPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, $this->getId());

				SubactividadProcedimientoPoaPeer::addSelectColumns($criteria);
				if (!isset($this->lastSubactividadProcedimientoPoaCriteria) || !$this->lastSubactividadProcedimientoPoaCriteria->equals($criteria)) {
					$this->collSubactividadProcedimientoPoas = SubactividadProcedimientoPoaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSubactividadProcedimientoPoaCriteria = $criteria;
		return $this->collSubactividadProcedimientoPoas;
	}

	
	public function countSubactividadProcedimientoPoas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadProcedimientoPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, $this->getId());

		return SubactividadProcedimientoPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSubactividadProcedimientoPoa(SubactividadProcedimientoPoa $l)
	{
		$this->collSubactividadProcedimientoPoas[] = $l;
		$l->setActividadProcedimientoPoa($this);
	}

} 