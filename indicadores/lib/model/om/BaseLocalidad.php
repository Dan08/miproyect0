<?php


abstract class BaseLocalidad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $localidad;

	
	protected $collLocalidadActividads;

	
	protected $lastLocalidadActividadCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getLocalidad()
	{

		return $this->localidad;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LocalidadPeer::ID;
		}

	} 
	
	public function setLocalidad($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->localidad !== $v) {
			$this->localidad = $v;
			$this->modifiedColumns[] = LocalidadPeer::LOCALIDAD;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->localidad = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Localidad object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LocalidadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LocalidadPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LocalidadPeer::DATABASE_NAME);
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
					$pk = LocalidadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LocalidadPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collLocalidadActividads !== null) {
				foreach($this->collLocalidadActividads as $referrerFK) {
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


			if (($retval = LocalidadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collLocalidadActividads !== null) {
					foreach($this->collLocalidadActividads as $referrerFK) {
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
		$pos = LocalidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getLocalidad();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LocalidadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getLocalidad(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LocalidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setLocalidad($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LocalidadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLocalidad($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LocalidadPeer::DATABASE_NAME);

		if ($this->isColumnModified(LocalidadPeer::ID)) $criteria->add(LocalidadPeer::ID, $this->id);
		if ($this->isColumnModified(LocalidadPeer::LOCALIDAD)) $criteria->add(LocalidadPeer::LOCALIDAD, $this->localidad);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LocalidadPeer::DATABASE_NAME);

		$criteria->add(LocalidadPeer::ID, $this->id);

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

		$copyObj->setLocalidad($this->localidad);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getLocalidadActividads() as $relObj) {
				$copyObj->addLocalidadActividad($relObj->copy($deepCopy));
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
			self::$peer = new LocalidadPeer();
		}
		return self::$peer;
	}

	
	public function initLocalidadActividads()
	{
		if ($this->collLocalidadActividads === null) {
			$this->collLocalidadActividads = array();
		}
	}

	
	public function getLocalidadActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLocalidadActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLocalidadActividads === null) {
			if ($this->isNew()) {
			   $this->collLocalidadActividads = array();
			} else {

				$criteria->add(LocalidadActividadPeer::LOCALIDAD_ID, $this->getId());

				LocalidadActividadPeer::addSelectColumns($criteria);
				$this->collLocalidadActividads = LocalidadActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(LocalidadActividadPeer::LOCALIDAD_ID, $this->getId());

				LocalidadActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastLocalidadActividadCriteria) || !$this->lastLocalidadActividadCriteria->equals($criteria)) {
					$this->collLocalidadActividads = LocalidadActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastLocalidadActividadCriteria = $criteria;
		return $this->collLocalidadActividads;
	}

	
	public function countLocalidadActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseLocalidadActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(LocalidadActividadPeer::LOCALIDAD_ID, $this->getId());

		return LocalidadActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addLocalidadActividad(LocalidadActividad $l)
	{
		$this->collLocalidadActividads[] = $l;
		$l->setLocalidad($this);
	}


	
	public function getLocalidadActividadsJoinActividad($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseLocalidadActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collLocalidadActividads === null) {
			if ($this->isNew()) {
				$this->collLocalidadActividads = array();
			} else {

				$criteria->add(LocalidadActividadPeer::LOCALIDAD_ID, $this->getId());

				$this->collLocalidadActividads = LocalidadActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		} else {
									
			$criteria->add(LocalidadActividadPeer::LOCALIDAD_ID, $this->getId());

			if (!isset($this->lastLocalidadActividadCriteria) || !$this->lastLocalidadActividadCriteria->equals($criteria)) {
				$this->collLocalidadActividads = LocalidadActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		}
		$this->lastLocalidadActividadCriteria = $criteria;

		return $this->collLocalidadActividads;
	}

} 