<?php


abstract class BaseCliente extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $cliente;

	
	protected $collClienteActividads;

	
	protected $lastClienteActividadCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCliente()
	{

		return $this->cliente;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ClientePeer::ID;
		}

	} 
	
	public function setCliente($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cliente !== $v) {
			$this->cliente = $v;
			$this->modifiedColumns[] = ClientePeer::CLIENTE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->cliente = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Cliente object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ClientePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME);
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
					$pk = ClientePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ClientePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collClienteActividads !== null) {
				foreach($this->collClienteActividads as $referrerFK) {
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


			if (($retval = ClientePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collClienteActividads !== null) {
					foreach($this->collClienteActividads as $referrerFK) {
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
		$pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCliente();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClientePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCliente(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCliente($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClientePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCliente($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ClientePeer::DATABASE_NAME);

		if ($this->isColumnModified(ClientePeer::ID)) $criteria->add(ClientePeer::ID, $this->id);
		if ($this->isColumnModified(ClientePeer::CLIENTE)) $criteria->add(ClientePeer::CLIENTE, $this->cliente);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ClientePeer::DATABASE_NAME);

		$criteria->add(ClientePeer::ID, $this->id);

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

		$copyObj->setCliente($this->cliente);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getClienteActividads() as $relObj) {
				$copyObj->addClienteActividad($relObj->copy($deepCopy));
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
			self::$peer = new ClientePeer();
		}
		return self::$peer;
	}

	
	public function initClienteActividads()
	{
		if ($this->collClienteActividads === null) {
			$this->collClienteActividads = array();
		}
	}

	
	public function getClienteActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClienteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClienteActividads === null) {
			if ($this->isNew()) {
			   $this->collClienteActividads = array();
			} else {

				$criteria->add(ClienteActividadPeer::CLIENTE_ID, $this->getId());

				ClienteActividadPeer::addSelectColumns($criteria);
				$this->collClienteActividads = ClienteActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ClienteActividadPeer::CLIENTE_ID, $this->getId());

				ClienteActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastClienteActividadCriteria) || !$this->lastClienteActividadCriteria->equals($criteria)) {
					$this->collClienteActividads = ClienteActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastClienteActividadCriteria = $criteria;
		return $this->collClienteActividads;
	}

	
	public function countClienteActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseClienteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ClienteActividadPeer::CLIENTE_ID, $this->getId());

		return ClienteActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addClienteActividad(ClienteActividad $l)
	{
		$this->collClienteActividads[] = $l;
		$l->setCliente($this);
	}


	
	public function getClienteActividadsJoinActividad($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseClienteActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collClienteActividads === null) {
			if ($this->isNew()) {
				$this->collClienteActividads = array();
			} else {

				$criteria->add(ClienteActividadPeer::CLIENTE_ID, $this->getId());

				$this->collClienteActividads = ClienteActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		} else {
									
			$criteria->add(ClienteActividadPeer::CLIENTE_ID, $this->getId());

			if (!isset($this->lastClienteActividadCriteria) || !$this->lastClienteActividadCriteria->equals($criteria)) {
				$this->collClienteActividads = ClienteActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		}
		$this->lastClienteActividadCriteria = $criteria;

		return $this->collClienteActividads;
	}

} 