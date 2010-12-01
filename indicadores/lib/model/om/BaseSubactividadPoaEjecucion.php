<?php


abstract class BaseSubactividadPoaEjecucion extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $subactividad_poa_id;


	
	protected $mes;


	
	protected $descripcion;


	
	protected $avance;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aSubactividadProcedimientoPoa;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getSubactividadPoaId()
	{

		return $this->subactividad_poa_id;
	}

	
	public function getMes()
	{

		return $this->mes;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getAvance()
	{

		return $this->avance;
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
			$this->modifiedColumns[] = SubactividadPoaEjecucionPeer::ID;
		}

	} 
	
	public function setSubactividadPoaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->subactividad_poa_id !== $v) {
			$this->subactividad_poa_id = $v;
			$this->modifiedColumns[] = SubactividadPoaEjecucionPeer::SUBACTIVIDAD_POA_ID;
		}

		if ($this->aSubactividadProcedimientoPoa !== null && $this->aSubactividadProcedimientoPoa->getId() !== $v) {
			$this->aSubactividadProcedimientoPoa = null;
		}

	} 
	
	public function setMes($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->mes !== $v) {
			$this->mes = $v;
			$this->modifiedColumns[] = SubactividadPoaEjecucionPeer::MES;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = SubactividadPoaEjecucionPeer::DESCRIPCION;
		}

	} 
	
	public function setAvance($v)
	{

		if ($this->avance !== $v) {
			$this->avance = $v;
			$this->modifiedColumns[] = SubactividadPoaEjecucionPeer::AVANCE;
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
			$this->modifiedColumns[] = SubactividadPoaEjecucionPeer::CREATED_AT;
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
			$this->modifiedColumns[] = SubactividadPoaEjecucionPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->subactividad_poa_id = $rs->getInt($startcol + 1);

			$this->mes = $rs->getInt($startcol + 2);

			$this->descripcion = $rs->getString($startcol + 3);

			$this->avance = $rs->getFloat($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SubactividadPoaEjecucion object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadPoaEjecucionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SubactividadPoaEjecucionPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(SubactividadPoaEjecucionPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(SubactividadPoaEjecucionPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadPoaEjecucionPeer::DATABASE_NAME);
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


												
			if ($this->aSubactividadProcedimientoPoa !== null) {
				if ($this->aSubactividadProcedimientoPoa->isModified()) {
					$affectedRows += $this->aSubactividadProcedimientoPoa->save($con);
				}
				$this->setSubactividadProcedimientoPoa($this->aSubactividadProcedimientoPoa);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SubactividadPoaEjecucionPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SubactividadPoaEjecucionPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


												
			if ($this->aSubactividadProcedimientoPoa !== null) {
				if (!$this->aSubactividadProcedimientoPoa->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSubactividadProcedimientoPoa->getValidationFailures());
				}
			}


			if (($retval = SubactividadPoaEjecucionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SubactividadPoaEjecucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSubactividadPoaId();
				break;
			case 2:
				return $this->getMes();
				break;
			case 3:
				return $this->getDescripcion();
				break;
			case 4:
				return $this->getAvance();
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
		$keys = SubactividadPoaEjecucionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSubactividadPoaId(),
			$keys[2] => $this->getMes(),
			$keys[3] => $this->getDescripcion(),
			$keys[4] => $this->getAvance(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SubactividadPoaEjecucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSubactividadPoaId($value);
				break;
			case 2:
				$this->setMes($value);
				break;
			case 3:
				$this->setDescripcion($value);
				break;
			case 4:
				$this->setAvance($value);
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
		$keys = SubactividadPoaEjecucionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSubactividadPoaId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMes($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescripcion($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAvance($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SubactividadPoaEjecucionPeer::DATABASE_NAME);

		if ($this->isColumnModified(SubactividadPoaEjecucionPeer::ID)) $criteria->add(SubactividadPoaEjecucionPeer::ID, $this->id);
		if ($this->isColumnModified(SubactividadPoaEjecucionPeer::SUBACTIVIDAD_POA_ID)) $criteria->add(SubactividadPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, $this->subactividad_poa_id);
		if ($this->isColumnModified(SubactividadPoaEjecucionPeer::MES)) $criteria->add(SubactividadPoaEjecucionPeer::MES, $this->mes);
		if ($this->isColumnModified(SubactividadPoaEjecucionPeer::DESCRIPCION)) $criteria->add(SubactividadPoaEjecucionPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(SubactividadPoaEjecucionPeer::AVANCE)) $criteria->add(SubactividadPoaEjecucionPeer::AVANCE, $this->avance);
		if ($this->isColumnModified(SubactividadPoaEjecucionPeer::CREATED_AT)) $criteria->add(SubactividadPoaEjecucionPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(SubactividadPoaEjecucionPeer::UPDATED_AT)) $criteria->add(SubactividadPoaEjecucionPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SubactividadPoaEjecucionPeer::DATABASE_NAME);

		$criteria->add(SubactividadPoaEjecucionPeer::ID, $this->id);

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

		$copyObj->setSubactividadPoaId($this->subactividad_poa_id);

		$copyObj->setMes($this->mes);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setAvance($this->avance);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


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
			self::$peer = new SubactividadPoaEjecucionPeer();
		}
		return self::$peer;
	}

	
	public function setSubactividadProcedimientoPoa($v)
	{


		if ($v === null) {
			$this->setSubactividadPoaId(NULL);
		} else {
			$this->setSubactividadPoaId($v->getId());
		}


		$this->aSubactividadProcedimientoPoa = $v;
	}


	
	public function getSubactividadProcedimientoPoa($con = null)
	{
		if ($this->aSubactividadProcedimientoPoa === null && ($this->subactividad_poa_id !== null)) {
						include_once 'lib/model/om/BaseSubactividadProcedimientoPoaPeer.php';

			$this->aSubactividadProcedimientoPoa = SubactividadProcedimientoPoaPeer::retrieveByPK($this->subactividad_poa_id, $con);

			
		}
		return $this->aSubactividadProcedimientoPoa;
	}

} 