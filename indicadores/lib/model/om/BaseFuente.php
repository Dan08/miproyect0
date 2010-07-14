<?php


abstract class BaseFuente extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $codigo;


	
	protected $fuente;

	
	protected $collFuenteActividads;

	
	protected $lastFuenteActividadCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCodigo()
	{

		return $this->codigo;
	}

	
	public function getFuente()
	{

		return $this->fuente;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = FuentePeer::ID;
		}

	} 
	
	public function setCodigo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->codigo !== $v) {
			$this->codigo = $v;
			$this->modifiedColumns[] = FuentePeer::CODIGO;
		}

	} 
	
	public function setFuente($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fuente !== $v) {
			$this->fuente = $v;
			$this->modifiedColumns[] = FuentePeer::FUENTE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->codigo = $rs->getString($startcol + 1);

			$this->fuente = $rs->getString($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Fuente object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FuentePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FuentePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FuentePeer::DATABASE_NAME);
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
					$pk = FuentePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += FuentePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collFuenteActividads !== null) {
				foreach($this->collFuenteActividads as $referrerFK) {
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


			if (($retval = FuentePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collFuenteActividads !== null) {
					foreach($this->collFuenteActividads as $referrerFK) {
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
		$pos = FuentePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCodigo();
				break;
			case 2:
				return $this->getFuente();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FuentePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCodigo(),
			$keys[2] => $this->getFuente(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FuentePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCodigo($value);
				break;
			case 2:
				$this->setFuente($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FuentePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodigo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFuente($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FuentePeer::DATABASE_NAME);

		if ($this->isColumnModified(FuentePeer::ID)) $criteria->add(FuentePeer::ID, $this->id);
		if ($this->isColumnModified(FuentePeer::CODIGO)) $criteria->add(FuentePeer::CODIGO, $this->codigo);
		if ($this->isColumnModified(FuentePeer::FUENTE)) $criteria->add(FuentePeer::FUENTE, $this->fuente);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FuentePeer::DATABASE_NAME);

		$criteria->add(FuentePeer::ID, $this->id);

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

		$copyObj->setCodigo($this->codigo);

		$copyObj->setFuente($this->fuente);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getFuenteActividads() as $relObj) {
				$copyObj->addFuenteActividad($relObj->copy($deepCopy));
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
			self::$peer = new FuentePeer();
		}
		return self::$peer;
	}

	
	public function initFuenteActividads()
	{
		if ($this->collFuenteActividads === null) {
			$this->collFuenteActividads = array();
		}
	}

	
	public function getFuenteActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFuenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFuenteActividads === null) {
			if ($this->isNew()) {
			   $this->collFuenteActividads = array();
			} else {

				$criteria->add(FuenteActividadPeer::FUENTE_ID, $this->getId());

				FuenteActividadPeer::addSelectColumns($criteria);
				$this->collFuenteActividads = FuenteActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(FuenteActividadPeer::FUENTE_ID, $this->getId());

				FuenteActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastFuenteActividadCriteria) || !$this->lastFuenteActividadCriteria->equals($criteria)) {
					$this->collFuenteActividads = FuenteActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastFuenteActividadCriteria = $criteria;
		return $this->collFuenteActividads;
	}

	
	public function countFuenteActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseFuenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(FuenteActividadPeer::FUENTE_ID, $this->getId());

		return FuenteActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addFuenteActividad(FuenteActividad $l)
	{
		$this->collFuenteActividads[] = $l;
		$l->setFuente($this);
	}


	
	public function getFuenteActividadsJoinActividad($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseFuenteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collFuenteActividads === null) {
			if ($this->isNew()) {
				$this->collFuenteActividads = array();
			} else {

				$criteria->add(FuenteActividadPeer::FUENTE_ID, $this->getId());

				$this->collFuenteActividads = FuenteActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		} else {
									
			$criteria->add(FuenteActividadPeer::FUENTE_ID, $this->getId());

			if (!isset($this->lastFuenteActividadCriteria) || !$this->lastFuenteActividadCriteria->equals($criteria)) {
				$this->collFuenteActividads = FuenteActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		}
		$this->lastFuenteActividadCriteria = $criteria;

		return $this->collFuenteActividads;
	}

} 