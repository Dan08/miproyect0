<?php


abstract class BaseCargo extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nombre;


	
	protected $dependencia_id;

	
	protected $aDependencia;

	
	protected $collProcesos;

	
	protected $lastProcesoCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNombre()
	{

		return $this->nombre;
	}

	
	public function getDependenciaId()
	{

		return $this->dependencia_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CargoPeer::ID;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = CargoPeer::NOMBRE;
		}

	} 
	
	public function setDependenciaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dependencia_id !== $v) {
			$this->dependencia_id = $v;
			$this->modifiedColumns[] = CargoPeer::DEPENDENCIA_ID;
		}

		if ($this->aDependencia !== null && $this->aDependencia->getId() !== $v) {
			$this->aDependencia = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->nombre = $rs->getString($startcol + 1);

			$this->dependencia_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Cargo object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CargoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CargoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CargoPeer::DATABASE_NAME);
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


												
			if ($this->aDependencia !== null) {
				if ($this->aDependencia->isModified()) {
					$affectedRows += $this->aDependencia->save($con);
				}
				$this->setDependencia($this->aDependencia);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CargoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CargoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collProcesos !== null) {
				foreach($this->collProcesos as $referrerFK) {
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


												
			if ($this->aDependencia !== null) {
				if (!$this->aDependencia->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDependencia->getValidationFailures());
				}
			}


			if (($retval = CargoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collProcesos !== null) {
					foreach($this->collProcesos as $referrerFK) {
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
		$pos = CargoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNombre();
				break;
			case 2:
				return $this->getDependenciaId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CargoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNombre(),
			$keys[2] => $this->getDependenciaId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CargoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNombre($value);
				break;
			case 2:
				$this->setDependenciaId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CargoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDependenciaId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CargoPeer::DATABASE_NAME);

		if ($this->isColumnModified(CargoPeer::ID)) $criteria->add(CargoPeer::ID, $this->id);
		if ($this->isColumnModified(CargoPeer::NOMBRE)) $criteria->add(CargoPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(CargoPeer::DEPENDENCIA_ID)) $criteria->add(CargoPeer::DEPENDENCIA_ID, $this->dependencia_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CargoPeer::DATABASE_NAME);

		$criteria->add(CargoPeer::ID, $this->id);

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

		$copyObj->setNombre($this->nombre);

		$copyObj->setDependenciaId($this->dependencia_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getProcesos() as $relObj) {
				$copyObj->addProceso($relObj->copy($deepCopy));
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
			self::$peer = new CargoPeer();
		}
		return self::$peer;
	}

	
	public function setDependencia($v)
	{


		if ($v === null) {
			$this->setDependenciaId(NULL);
		} else {
			$this->setDependenciaId($v->getId());
		}


		$this->aDependencia = $v;
	}


	
	public function getDependencia($con = null)
	{
		if ($this->aDependencia === null && ($this->dependencia_id !== null)) {
						include_once 'lib/model/om/BaseDependenciaPeer.php';

			$this->aDependencia = DependenciaPeer::retrieveByPK($this->dependencia_id, $con);

			
		}
		return $this->aDependencia;
	}

	
	public function initProcesos()
	{
		if ($this->collProcesos === null) {
			$this->collProcesos = array();
		}
	}

	
	public function getProcesos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProcesoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProcesos === null) {
			if ($this->isNew()) {
			   $this->collProcesos = array();
			} else {

				$criteria->add(ProcesoPeer::CARGO_ID, $this->getId());

				ProcesoPeer::addSelectColumns($criteria);
				$this->collProcesos = ProcesoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProcesoPeer::CARGO_ID, $this->getId());

				ProcesoPeer::addSelectColumns($criteria);
				if (!isset($this->lastProcesoCriteria) || !$this->lastProcesoCriteria->equals($criteria)) {
					$this->collProcesos = ProcesoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProcesoCriteria = $criteria;
		return $this->collProcesos;
	}

	
	public function countProcesos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseProcesoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ProcesoPeer::CARGO_ID, $this->getId());

		return ProcesoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProceso(Proceso $l)
	{
		$this->collProcesos[] = $l;
		$l->setCargo($this);
	}


	
	public function getProcesosJoinMacroproceso($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProcesoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProcesos === null) {
			if ($this->isNew()) {
				$this->collProcesos = array();
			} else {

				$criteria->add(ProcesoPeer::CARGO_ID, $this->getId());

				$this->collProcesos = ProcesoPeer::doSelectJoinMacroproceso($criteria, $con);
			}
		} else {
									
			$criteria->add(ProcesoPeer::CARGO_ID, $this->getId());

			if (!isset($this->lastProcesoCriteria) || !$this->lastProcesoCriteria->equals($criteria)) {
				$this->collProcesos = ProcesoPeer::doSelectJoinMacroproceso($criteria, $con);
			}
		}
		$this->lastProcesoCriteria = $criteria;

		return $this->collProcesos;
	}

} 