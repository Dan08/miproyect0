<?php


abstract class BaseCdpActividad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $cdp_id;


	
	protected $actividad_id;

	
	protected $aCdp;

	
	protected $aActividad;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCdpId()
	{

		return $this->cdp_id;
	}

	
	public function getActividadId()
	{

		return $this->actividad_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CdpActividadPeer::ID;
		}

	} 
	
	public function setCdpId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cdp_id !== $v) {
			$this->cdp_id = $v;
			$this->modifiedColumns[] = CdpActividadPeer::CDP_ID;
		}

		if ($this->aCdp !== null && $this->aCdp->getId() !== $v) {
			$this->aCdp = null;
		}

	} 
	
	public function setActividadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_id !== $v) {
			$this->actividad_id = $v;
			$this->modifiedColumns[] = CdpActividadPeer::ACTIVIDAD_ID;
		}

		if ($this->aActividad !== null && $this->aActividad->getId() !== $v) {
			$this->aActividad = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->cdp_id = $rs->getInt($startcol + 1);

			$this->actividad_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CdpActividad object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CdpActividadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CdpActividadPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CdpActividadPeer::DATABASE_NAME);
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


												
			if ($this->aCdp !== null) {
				if ($this->aCdp->isModified()) {
					$affectedRows += $this->aCdp->save($con);
				}
				$this->setCdp($this->aCdp);
			}

			if ($this->aActividad !== null) {
				if ($this->aActividad->isModified()) {
					$affectedRows += $this->aActividad->save($con);
				}
				$this->setActividad($this->aActividad);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CdpActividadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CdpActividadPeer::doUpdate($this, $con);
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


												
			if ($this->aCdp !== null) {
				if (!$this->aCdp->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCdp->getValidationFailures());
				}
			}

			if ($this->aActividad !== null) {
				if (!$this->aActividad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividad->getValidationFailures());
				}
			}


			if (($retval = CdpActividadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CdpActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCdpId();
				break;
			case 2:
				return $this->getActividadId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CdpActividadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCdpId(),
			$keys[2] => $this->getActividadId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CdpActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCdpId($value);
				break;
			case 2:
				$this->setActividadId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CdpActividadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCdpId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setActividadId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CdpActividadPeer::DATABASE_NAME);

		if ($this->isColumnModified(CdpActividadPeer::ID)) $criteria->add(CdpActividadPeer::ID, $this->id);
		if ($this->isColumnModified(CdpActividadPeer::CDP_ID)) $criteria->add(CdpActividadPeer::CDP_ID, $this->cdp_id);
		if ($this->isColumnModified(CdpActividadPeer::ACTIVIDAD_ID)) $criteria->add(CdpActividadPeer::ACTIVIDAD_ID, $this->actividad_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CdpActividadPeer::DATABASE_NAME);

		$criteria->add(CdpActividadPeer::ID, $this->id);

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

		$copyObj->setCdpId($this->cdp_id);

		$copyObj->setActividadId($this->actividad_id);


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
			self::$peer = new CdpActividadPeer();
		}
		return self::$peer;
	}

	
	public function setCdp($v)
	{


		if ($v === null) {
			$this->setCdpId(NULL);
		} else {
			$this->setCdpId($v->getId());
		}


		$this->aCdp = $v;
	}


	
	public function getCdp($con = null)
	{
		if ($this->aCdp === null && ($this->cdp_id !== null)) {
						include_once 'lib/model/om/BaseCdpPeer.php';

			$this->aCdp = CdpPeer::retrieveByPK($this->cdp_id, $con);

			
		}
		return $this->aCdp;
	}

	
	public function setActividad($v)
	{


		if ($v === null) {
			$this->setActividadId(NULL);
		} else {
			$this->setActividadId($v->getId());
		}


		$this->aActividad = $v;
	}


	
	public function getActividad($con = null)
	{
		if ($this->aActividad === null && ($this->actividad_id !== null)) {
						include_once 'lib/model/om/BaseActividadPeer.php';

			$this->aActividad = ActividadPeer::retrieveByPK($this->actividad_id, $con);

			
		}
		return $this->aActividad;
	}

} 