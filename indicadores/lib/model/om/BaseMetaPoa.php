<?php


abstract class BaseMetaPoa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $meta;


	
	protected $descripcion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collActividadPoas;

	
	protected $lastActividadPoaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getMeta()
	{

		return $this->meta;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
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
			$this->modifiedColumns[] = MetaPoaPeer::ID;
		}

	} 
	
	public function setMeta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->meta !== $v) {
			$this->meta = $v;
			$this->modifiedColumns[] = MetaPoaPeer::META;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = MetaPoaPeer::DESCRIPCION;
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
			$this->modifiedColumns[] = MetaPoaPeer::CREATED_AT;
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
			$this->modifiedColumns[] = MetaPoaPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->meta = $rs->getString($startcol + 1);

			$this->descripcion = $rs->getString($startcol + 2);

			$this->created_at = $rs->getTimestamp($startcol + 3, null);

			$this->updated_at = $rs->getTimestamp($startcol + 4, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating MetaPoa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MetaPoaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MetaPoaPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(MetaPoaPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(MetaPoaPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MetaPoaPeer::DATABASE_NAME);
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
					$pk = MetaPoaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MetaPoaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collActividadPoas !== null) {
				foreach($this->collActividadPoas as $referrerFK) {
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


			if (($retval = MetaPoaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collActividadPoas !== null) {
					foreach($this->collActividadPoas as $referrerFK) {
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
		$pos = MetaPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getMeta();
				break;
			case 2:
				return $this->getDescripcion();
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
		$keys = MetaPoaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMeta(),
			$keys[2] => $this->getDescripcion(),
			$keys[3] => $this->getCreatedAt(),
			$keys[4] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MetaPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setMeta($value);
				break;
			case 2:
				$this->setDescripcion($value);
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
		$keys = MetaPoaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMeta($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCreatedAt($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUpdatedAt($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MetaPoaPeer::DATABASE_NAME);

		if ($this->isColumnModified(MetaPoaPeer::ID)) $criteria->add(MetaPoaPeer::ID, $this->id);
		if ($this->isColumnModified(MetaPoaPeer::META)) $criteria->add(MetaPoaPeer::META, $this->meta);
		if ($this->isColumnModified(MetaPoaPeer::DESCRIPCION)) $criteria->add(MetaPoaPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(MetaPoaPeer::CREATED_AT)) $criteria->add(MetaPoaPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(MetaPoaPeer::UPDATED_AT)) $criteria->add(MetaPoaPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MetaPoaPeer::DATABASE_NAME);

		$criteria->add(MetaPoaPeer::ID, $this->id);

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

		$copyObj->setMeta($this->meta);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getActividadPoas() as $relObj) {
				$copyObj->addActividadPoa($relObj->copy($deepCopy));
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
			self::$peer = new MetaPoaPeer();
		}
		return self::$peer;
	}

	
	public function initActividadPoas()
	{
		if ($this->collActividadPoas === null) {
			$this->collActividadPoas = array();
		}
	}

	
	public function getActividadPoas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadPoas === null) {
			if ($this->isNew()) {
			   $this->collActividadPoas = array();
			} else {

				$criteria->add(ActividadPoaPeer::META_POA_ID, $this->getId());

				ActividadPoaPeer::addSelectColumns($criteria);
				$this->collActividadPoas = ActividadPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPoaPeer::META_POA_ID, $this->getId());

				ActividadPoaPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
					$this->collActividadPoas = ActividadPoaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadPoaCriteria = $criteria;
		return $this->collActividadPoas;
	}

	
	public function countActividadPoas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadPoaPeer::META_POA_ID, $this->getId());

		return ActividadPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividadPoa(ActividadPoa $l)
	{
		$this->collActividadPoas[] = $l;
		$l->setMetaPoa($this);
	}


	
	public function getActividadPoasJoinProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadPoas === null) {
			if ($this->isNew()) {
				$this->collActividadPoas = array();
			} else {

				$criteria->add(ActividadPoaPeer::META_POA_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::META_POA_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProyecto($criteria, $con);
			}
		}
		$this->lastActividadPoaCriteria = $criteria;

		return $this->collActividadPoas;
	}

} 