<?php


abstract class BaseProcedimientoPoa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $procedimiento_id;


	
	protected $ponderacion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aProcedimiento;

	
	protected $collActividadProcedimientoPoas;

	
	protected $lastActividadProcedimientoPoaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getProcedimientoId()
	{

		return $this->procedimiento_id;
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
			$this->modifiedColumns[] = ProcedimientoPoaPeer::ID;
		}

	} 
	
	public function setProcedimientoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->procedimiento_id !== $v) {
			$this->procedimiento_id = $v;
			$this->modifiedColumns[] = ProcedimientoPoaPeer::PROCEDIMIENTO_ID;
		}

		if ($this->aProcedimiento !== null && $this->aProcedimiento->getId() !== $v) {
			$this->aProcedimiento = null;
		}

	} 
	
	public function setPonderacion($v)
	{

		if ($this->ponderacion !== $v) {
			$this->ponderacion = $v;
			$this->modifiedColumns[] = ProcedimientoPoaPeer::PONDERACION;
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
			$this->modifiedColumns[] = ProcedimientoPoaPeer::CREATED_AT;
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
			$this->modifiedColumns[] = ProcedimientoPoaPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->procedimiento_id = $rs->getInt($startcol + 1);

			$this->ponderacion = $rs->getFloat($startcol + 2);

			$this->created_at = $rs->getTimestamp($startcol + 3, null);

			$this->updated_at = $rs->getTimestamp($startcol + 4, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ProcedimientoPoa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcedimientoPoaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProcedimientoPoaPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ProcedimientoPoaPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ProcedimientoPoaPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcedimientoPoaPeer::DATABASE_NAME);
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


												
			if ($this->aProcedimiento !== null) {
				if ($this->aProcedimiento->isModified()) {
					$affectedRows += $this->aProcedimiento->save($con);
				}
				$this->setProcedimiento($this->aProcedimiento);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProcedimientoPoaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProcedimientoPoaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collActividadProcedimientoPoas !== null) {
				foreach($this->collActividadProcedimientoPoas as $referrerFK) {
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


												
			if ($this->aProcedimiento !== null) {
				if (!$this->aProcedimiento->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProcedimiento->getValidationFailures());
				}
			}


			if (($retval = ProcedimientoPoaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collActividadProcedimientoPoas !== null) {
					foreach($this->collActividadProcedimientoPoas as $referrerFK) {
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
		$pos = ProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getProcedimientoId();
				break;
			case 2:
				return $this->getPonderacion();
				break;
			case 3:
				return $this->getCreatedAt();
				break;
			case 4:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcedimientoPoaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getProcedimientoId(),
			$keys[2] => $this->getPonderacion(),
			$keys[3] => $this->getCreatedAt(),
			$keys[4] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setProcedimientoId($value);
				break;
			case 2:
				$this->setPonderacion($value);
				break;
			case 3:
				$this->setCreatedAt($value);
				break;
			case 4:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcedimientoPoaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProcedimientoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPonderacion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCreatedAt($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUpdatedAt($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProcedimientoPoaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcedimientoPoaPeer::ID)) $criteria->add(ProcedimientoPoaPeer::ID, $this->id);
		if ($this->isColumnModified(ProcedimientoPoaPeer::PROCEDIMIENTO_ID)) $criteria->add(ProcedimientoPoaPeer::PROCEDIMIENTO_ID, $this->procedimiento_id);
		if ($this->isColumnModified(ProcedimientoPoaPeer::PONDERACION)) $criteria->add(ProcedimientoPoaPeer::PONDERACION, $this->ponderacion);
		if ($this->isColumnModified(ProcedimientoPoaPeer::CREATED_AT)) $criteria->add(ProcedimientoPoaPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ProcedimientoPoaPeer::UPDATED_AT)) $criteria->add(ProcedimientoPoaPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProcedimientoPoaPeer::DATABASE_NAME);

		$criteria->add(ProcedimientoPoaPeer::ID, $this->id);

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

		$copyObj->setProcedimientoId($this->procedimiento_id);

		$copyObj->setPonderacion($this->ponderacion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getActividadProcedimientoPoas() as $relObj) {
				$copyObj->addActividadProcedimientoPoa($relObj->copy($deepCopy));
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
			self::$peer = new ProcedimientoPoaPeer();
		}
		return self::$peer;
	}

	
	public function setProcedimiento($v)
	{


		if ($v === null) {
			$this->setProcedimientoId(NULL);
		} else {
			$this->setProcedimientoId($v->getId());
		}


		$this->aProcedimiento = $v;
	}


	
	public function getProcedimiento($con = null)
	{
		if ($this->aProcedimiento === null && ($this->procedimiento_id !== null)) {
						include_once 'lib/model/om/BaseProcedimientoPeer.php';

			$this->aProcedimiento = ProcedimientoPeer::retrieveByPK($this->procedimiento_id, $con);

			
		}
		return $this->aProcedimiento;
	}

	
	public function initActividadProcedimientoPoas()
	{
		if ($this->collActividadProcedimientoPoas === null) {
			$this->collActividadProcedimientoPoas = array();
		}
	}

	
	public function getActividadProcedimientoPoas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadProcedimientoPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadProcedimientoPoas === null) {
			if ($this->isNew()) {
			   $this->collActividadProcedimientoPoas = array();
			} else {

				$criteria->add(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, $this->getId());

				ActividadProcedimientoPoaPeer::addSelectColumns($criteria);
				$this->collActividadProcedimientoPoas = ActividadProcedimientoPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, $this->getId());

				ActividadProcedimientoPoaPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadProcedimientoPoaCriteria) || !$this->lastActividadProcedimientoPoaCriteria->equals($criteria)) {
					$this->collActividadProcedimientoPoas = ActividadProcedimientoPoaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadProcedimientoPoaCriteria = $criteria;
		return $this->collActividadProcedimientoPoas;
	}

	
	public function countActividadProcedimientoPoas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadProcedimientoPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, $this->getId());

		return ActividadProcedimientoPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividadProcedimientoPoa(ActividadProcedimientoPoa $l)
	{
		$this->collActividadProcedimientoPoas[] = $l;
		$l->setProcedimientoPoa($this);
	}

} 