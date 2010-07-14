<?php


abstract class BaseSubactividadEjecucion extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $subactividad_proyecto_id;


	
	protected $mes;


	
	protected $avance;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aSubactividadProyecto;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getSubactividadProyectoId()
	{

		return $this->subactividad_proyecto_id;
	}

	
	public function getMes()
	{

		return $this->mes;
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
			$this->modifiedColumns[] = SubactividadEjecucionPeer::ID;
		}

	} 
	
	public function setSubactividadProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->subactividad_proyecto_id !== $v) {
			$this->subactividad_proyecto_id = $v;
			$this->modifiedColumns[] = SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID;
		}

		if ($this->aSubactividadProyecto !== null && $this->aSubactividadProyecto->getId() !== $v) {
			$this->aSubactividadProyecto = null;
		}

	} 
	
	public function setMes($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->mes !== $v) {
			$this->mes = $v;
			$this->modifiedColumns[] = SubactividadEjecucionPeer::MES;
		}

	} 
	
	public function setAvance($v)
	{

		if ($this->avance !== $v) {
			$this->avance = $v;
			$this->modifiedColumns[] = SubactividadEjecucionPeer::AVANCE;
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
			$this->modifiedColumns[] = SubactividadEjecucionPeer::CREATED_AT;
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
			$this->modifiedColumns[] = SubactividadEjecucionPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->subactividad_proyecto_id = $rs->getInt($startcol + 1);

			$this->mes = $rs->getInt($startcol + 2);

			$this->avance = $rs->getFloat($startcol + 3);

			$this->created_at = $rs->getTimestamp($startcol + 4, null);

			$this->updated_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SubactividadEjecucion object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadEjecucionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SubactividadEjecucionPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(SubactividadEjecucionPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(SubactividadEjecucionPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadEjecucionPeer::DATABASE_NAME);
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


												
			if ($this->aSubactividadProyecto !== null) {
				if ($this->aSubactividadProyecto->isModified()) {
					$affectedRows += $this->aSubactividadProyecto->save($con);
				}
				$this->setSubactividadProyecto($this->aSubactividadProyecto);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SubactividadEjecucionPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SubactividadEjecucionPeer::doUpdate($this, $con);
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


												
			if ($this->aSubactividadProyecto !== null) {
				if (!$this->aSubactividadProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSubactividadProyecto->getValidationFailures());
				}
			}


			if (($retval = SubactividadEjecucionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SubactividadEjecucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSubactividadProyectoId();
				break;
			case 2:
				return $this->getMes();
				break;
			case 3:
				return $this->getAvance();
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
		$keys = SubactividadEjecucionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSubactividadProyectoId(),
			$keys[2] => $this->getMes(),
			$keys[3] => $this->getAvance(),
			$keys[4] => $this->getCreatedAt(),
			$keys[5] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SubactividadEjecucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSubactividadProyectoId($value);
				break;
			case 2:
				$this->setMes($value);
				break;
			case 3:
				$this->setAvance($value);
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
		$keys = SubactividadEjecucionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSubactividadProyectoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMes($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAvance($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUpdatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SubactividadEjecucionPeer::DATABASE_NAME);

		if ($this->isColumnModified(SubactividadEjecucionPeer::ID)) $criteria->add(SubactividadEjecucionPeer::ID, $this->id);
		if ($this->isColumnModified(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID)) $criteria->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->subactividad_proyecto_id);
		if ($this->isColumnModified(SubactividadEjecucionPeer::MES)) $criteria->add(SubactividadEjecucionPeer::MES, $this->mes);
		if ($this->isColumnModified(SubactividadEjecucionPeer::AVANCE)) $criteria->add(SubactividadEjecucionPeer::AVANCE, $this->avance);
		if ($this->isColumnModified(SubactividadEjecucionPeer::CREATED_AT)) $criteria->add(SubactividadEjecucionPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(SubactividadEjecucionPeer::UPDATED_AT)) $criteria->add(SubactividadEjecucionPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SubactividadEjecucionPeer::DATABASE_NAME);

		$criteria->add(SubactividadEjecucionPeer::ID, $this->id);

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

		$copyObj->setSubactividadProyectoId($this->subactividad_proyecto_id);

		$copyObj->setMes($this->mes);

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
			self::$peer = new SubactividadEjecucionPeer();
		}
		return self::$peer;
	}

	
	public function setSubactividadProyecto($v)
	{


		if ($v === null) {
			$this->setSubactividadProyectoId(NULL);
		} else {
			$this->setSubactividadProyectoId($v->getId());
		}


		$this->aSubactividadProyecto = $v;
	}


	
	public function getSubactividadProyecto($con = null)
	{
		if ($this->aSubactividadProyecto === null && ($this->subactividad_proyecto_id !== null)) {
						include_once 'lib/model/om/BaseSubactividadProyectoPeer.php';

			$this->aSubactividadProyecto = SubactividadProyectoPeer::retrieveByPK($this->subactividad_proyecto_id, $con);

			
		}
		return $this->aSubactividadProyecto;
	}

} 