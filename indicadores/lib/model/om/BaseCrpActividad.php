<?php


abstract class BaseCrpActividad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $crp_id;


	
	protected $actividad_id;

	
	protected $aCrp;

	
	protected $aActividad;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCrpId()
	{

		return $this->crp_id;
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
			$this->modifiedColumns[] = CrpActividadPeer::ID;
		}

	} 
	
	public function setCrpId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->crp_id !== $v) {
			$this->crp_id = $v;
			$this->modifiedColumns[] = CrpActividadPeer::CRP_ID;
		}

		if ($this->aCrp !== null && $this->aCrp->getId() !== $v) {
			$this->aCrp = null;
		}

	} 
	
	public function setActividadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_id !== $v) {
			$this->actividad_id = $v;
			$this->modifiedColumns[] = CrpActividadPeer::ACTIVIDAD_ID;
		}

		if ($this->aActividad !== null && $this->aActividad->getId() !== $v) {
			$this->aActividad = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->crp_id = $rs->getInt($startcol + 1);

			$this->actividad_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CrpActividad object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CrpActividadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CrpActividadPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CrpActividadPeer::DATABASE_NAME);
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


												
			if ($this->aCrp !== null) {
				if ($this->aCrp->isModified()) {
					$affectedRows += $this->aCrp->save($con);
				}
				$this->setCrp($this->aCrp);
			}

			if ($this->aActividad !== null) {
				if ($this->aActividad->isModified()) {
					$affectedRows += $this->aActividad->save($con);
				}
				$this->setActividad($this->aActividad);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CrpActividadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CrpActividadPeer::doUpdate($this, $con);
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


												
			if ($this->aCrp !== null) {
				if (!$this->aCrp->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCrp->getValidationFailures());
				}
			}

			if ($this->aActividad !== null) {
				if (!$this->aActividad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividad->getValidationFailures());
				}
			}


			if (($retval = CrpActividadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CrpActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCrpId();
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
		$keys = CrpActividadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCrpId(),
			$keys[2] => $this->getActividadId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CrpActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCrpId($value);
				break;
			case 2:
				$this->setActividadId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CrpActividadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCrpId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setActividadId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CrpActividadPeer::DATABASE_NAME);

		if ($this->isColumnModified(CrpActividadPeer::ID)) $criteria->add(CrpActividadPeer::ID, $this->id);
		if ($this->isColumnModified(CrpActividadPeer::CRP_ID)) $criteria->add(CrpActividadPeer::CRP_ID, $this->crp_id);
		if ($this->isColumnModified(CrpActividadPeer::ACTIVIDAD_ID)) $criteria->add(CrpActividadPeer::ACTIVIDAD_ID, $this->actividad_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CrpActividadPeer::DATABASE_NAME);

		$criteria->add(CrpActividadPeer::ID, $this->id);

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

		$copyObj->setCrpId($this->crp_id);

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
			self::$peer = new CrpActividadPeer();
		}
		return self::$peer;
	}

	
	public function setCrp($v)
	{


		if ($v === null) {
			$this->setCrpId(NULL);
		} else {
			$this->setCrpId($v->getId());
		}


		$this->aCrp = $v;
	}


	
	public function getCrp($con = null)
	{
		if ($this->aCrp === null && ($this->crp_id !== null)) {
						include_once 'lib/model/om/BaseCrpPeer.php';

			$this->aCrp = CrpPeer::retrieveByPK($this->crp_id, $con);

			
		}
		return $this->aCrp;
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