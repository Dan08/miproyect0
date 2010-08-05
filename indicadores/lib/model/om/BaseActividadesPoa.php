<?php


abstract class BaseActividadesPoa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $meta_poa_id;


	
	protected $proyecto_id;


	
	protected $descripcion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aMetaPoa;

	
	protected $aProyecto;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getMetaPoaId()
	{

		return $this->meta_poa_id;
	}

	
	public function getProyectoId()
	{

		return $this->proyecto_id;
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
			$this->modifiedColumns[] = ActividadesPoaPeer::ID;
		}

	} 
	
	public function setMetaPoaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->meta_poa_id !== $v) {
			$this->meta_poa_id = $v;
			$this->modifiedColumns[] = ActividadesPoaPeer::META_POA_ID;
		}

		if ($this->aMetaPoa !== null && $this->aMetaPoa->getId() !== $v) {
			$this->aMetaPoa = null;
		}

	} 
	
	public function setProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_id !== $v) {
			$this->proyecto_id = $v;
			$this->modifiedColumns[] = ActividadesPoaPeer::PROYECTO_ID;
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
			$this->modifiedColumns[] = ActividadesPoaPeer::DESCRIPCION;
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
			$this->modifiedColumns[] = ActividadesPoaPeer::CREATED_AT;
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
			$this->modifiedColumns[] = ActividadesPoaPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->meta_poa_id = $rs->getInt($startcol + 1);

			$this->proyecto_id = $rs->getInt($startcol + 2);

			$this->descripcion = $rs->getString($startcol + 3);

			$this->created_at = $rs->getTimestamp($startcol + 4, null);

			$this->updated_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ActividadesPoa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadesPoaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ActividadesPoaPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ActividadesPoaPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ActividadesPoaPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadesPoaPeer::DATABASE_NAME);
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


												
			if ($this->aMetaPoa !== null) {
				if ($this->aMetaPoa->isModified()) {
					$affectedRows += $this->aMetaPoa->save($con);
				}
				$this->setMetaPoa($this->aMetaPoa);
			}

			if ($this->aProyecto !== null) {
				if ($this->aProyecto->isModified()) {
					$affectedRows += $this->aProyecto->save($con);
				}
				$this->setProyecto($this->aProyecto);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ActividadesPoaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ActividadesPoaPeer::doUpdate($this, $con);
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


												
			if ($this->aMetaPoa !== null) {
				if (!$this->aMetaPoa->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMetaPoa->getValidationFailures());
				}
			}

			if ($this->aProyecto !== null) {
				if (!$this->aProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyecto->getValidationFailures());
				}
			}


			if (($retval = ActividadesPoaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadesPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getMetaPoaId();
				break;
			case 2:
				return $this->getProyectoId();
				break;
			case 3:
				return $this->getDescripcion();
				break;
			case 4:
				return $this->getCreatedAt();
				break;
			case 5:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadesPoaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMetaPoaId(),
			$keys[2] => $this->getProyectoId(),
			$keys[3] => $this->getDescripcion(),
			$keys[4] => $this->getCreatedAt(),
			$keys[5] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadesPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setMetaPoaId($value);
				break;
			case 2:
				$this->setProyectoId($value);
				break;
			case 3:
				$this->setDescripcion($value);
				break;
			case 4:
				$this->setCreatedAt($value);
				break;
			case 5:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadesPoaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMetaPoaId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProyectoId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescripcion($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUpdatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ActividadesPoaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActividadesPoaPeer::ID)) $criteria->add(ActividadesPoaPeer::ID, $this->id);
		if ($this->isColumnModified(ActividadesPoaPeer::META_POA_ID)) $criteria->add(ActividadesPoaPeer::META_POA_ID, $this->meta_poa_id);
		if ($this->isColumnModified(ActividadesPoaPeer::PROYECTO_ID)) $criteria->add(ActividadesPoaPeer::PROYECTO_ID, $this->proyecto_id);
		if ($this->isColumnModified(ActividadesPoaPeer::DESCRIPCION)) $criteria->add(ActividadesPoaPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ActividadesPoaPeer::CREATED_AT)) $criteria->add(ActividadesPoaPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ActividadesPoaPeer::UPDATED_AT)) $criteria->add(ActividadesPoaPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ActividadesPoaPeer::DATABASE_NAME);

		$criteria->add(ActividadesPoaPeer::ID, $this->id);

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

		$copyObj->setMetaPoaId($this->meta_poa_id);

		$copyObj->setProyectoId($this->proyecto_id);

		$copyObj->setDescripcion($this->descripcion);

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
			self::$peer = new ActividadesPoaPeer();
		}
		return self::$peer;
	}

	
	public function setMetaPoa($v)
	{


		if ($v === null) {
			$this->setMetaPoaId(NULL);
		} else {
			$this->setMetaPoaId($v->getId());
		}


		$this->aMetaPoa = $v;
	}


	
	public function getMetaPoa($con = null)
	{
		if ($this->aMetaPoa === null && ($this->meta_poa_id !== null)) {
						include_once 'lib/model/om/BaseMetaPoaPeer.php';

			$this->aMetaPoa = MetaPoaPeer::retrieveByPK($this->meta_poa_id, $con);

			
		}
		return $this->aMetaPoa;
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

} 