<?php


abstract class BaseContrato extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $numero;


	
	protected $id_contratista;


	
	protected $contratista;

	
	protected $collActividads;

	
	protected $lastActividadCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNumero()
	{

		return $this->numero;
	}

	
	public function getIdContratista()
	{

		return $this->id_contratista;
	}

	
	public function getContratista()
	{

		return $this->contratista;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ContratoPeer::ID;
		}

	} 
	
	public function setNumero($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numero !== $v) {
			$this->numero = $v;
			$this->modifiedColumns[] = ContratoPeer::NUMERO;
		}

	} 
	
	public function setIdContratista($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id_contratista !== $v) {
			$this->id_contratista = $v;
			$this->modifiedColumns[] = ContratoPeer::ID_CONTRATISTA;
		}

	} 
	
	public function setContratista($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contratista !== $v) {
			$this->contratista = $v;
			$this->modifiedColumns[] = ContratoPeer::CONTRATISTA;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->numero = $rs->getString($startcol + 1);

			$this->id_contratista = $rs->getString($startcol + 2);

			$this->contratista = $rs->getString($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Contrato object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ContratoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ContratoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ContratoPeer::DATABASE_NAME);
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
					$pk = ContratoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ContratoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collActividads !== null) {
				foreach($this->collActividads as $referrerFK) {
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


			if (($retval = ContratoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collActividads !== null) {
					foreach($this->collActividads as $referrerFK) {
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
		$pos = ContratoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNumero();
				break;
			case 2:
				return $this->getIdContratista();
				break;
			case 3:
				return $this->getContratista();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ContratoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNumero(),
			$keys[2] => $this->getIdContratista(),
			$keys[3] => $this->getContratista(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ContratoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNumero($value);
				break;
			case 2:
				$this->setIdContratista($value);
				break;
			case 3:
				$this->setContratista($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ContratoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNumero($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdContratista($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setContratista($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ContratoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ContratoPeer::ID)) $criteria->add(ContratoPeer::ID, $this->id);
		if ($this->isColumnModified(ContratoPeer::NUMERO)) $criteria->add(ContratoPeer::NUMERO, $this->numero);
		if ($this->isColumnModified(ContratoPeer::ID_CONTRATISTA)) $criteria->add(ContratoPeer::ID_CONTRATISTA, $this->id_contratista);
		if ($this->isColumnModified(ContratoPeer::CONTRATISTA)) $criteria->add(ContratoPeer::CONTRATISTA, $this->contratista);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ContratoPeer::DATABASE_NAME);

		$criteria->add(ContratoPeer::ID, $this->id);

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

		$copyObj->setNumero($this->numero);

		$copyObj->setIdContratista($this->id_contratista);

		$copyObj->setContratista($this->contratista);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getActividads() as $relObj) {
				$copyObj->addActividad($relObj->copy($deepCopy));
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
			self::$peer = new ContratoPeer();
		}
		return self::$peer;
	}

	
	public function initActividads()
	{
		if ($this->collActividads === null) {
			$this->collActividads = array();
		}
	}

	
	public function getActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
			   $this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				$this->collActividads = ActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
					$this->collActividads = ActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadCriteria = $criteria;
		return $this->collActividads;
	}

	
	public function countActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

		return ActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividad(Actividad $l)
	{
		$this->collActividads[] = $l;
		$l->setContrato($this);
	}


	
	public function getActividadsJoinProyectoInversion($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinProyectoInversion($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::CONTRATO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinProyectoInversion($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}

} 