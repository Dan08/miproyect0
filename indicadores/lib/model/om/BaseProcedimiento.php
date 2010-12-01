<?php


abstract class BaseProcedimiento extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $proceso_id;


	
	protected $nombre;


	
	protected $descripcion;

	
	protected $aProceso;

	
	protected $collActividadPoas;

	
	protected $lastActividadPoaCriteria = null;

	
	protected $collProcedimientoPoas;

	
	protected $lastProcedimientoPoaCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getProcesoId()
	{

		return $this->proceso_id;
	}

	
	public function getNombre()
	{

		return $this->nombre;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ProcedimientoPeer::ID;
		}

	} 
	
	public function setProcesoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proceso_id !== $v) {
			$this->proceso_id = $v;
			$this->modifiedColumns[] = ProcedimientoPeer::PROCESO_ID;
		}

		if ($this->aProceso !== null && $this->aProceso->getId() !== $v) {
			$this->aProceso = null;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = ProcedimientoPeer::NOMBRE;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ProcedimientoPeer::DESCRIPCION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->proceso_id = $rs->getInt($startcol + 1);

			$this->nombre = $rs->getString($startcol + 2);

			$this->descripcion = $rs->getString($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Procedimiento object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcedimientoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProcedimientoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProcedimientoPeer::DATABASE_NAME);
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


												
			if ($this->aProceso !== null) {
				if ($this->aProceso->isModified()) {
					$affectedRows += $this->aProceso->save($con);
				}
				$this->setProceso($this->aProceso);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProcedimientoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProcedimientoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collActividadPoas !== null) {
				foreach($this->collActividadPoas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collProcedimientoPoas !== null) {
				foreach($this->collProcedimientoPoas as $referrerFK) {
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


												
			if ($this->aProceso !== null) {
				if (!$this->aProceso->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProceso->getValidationFailures());
				}
			}


			if (($retval = ProcedimientoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collActividadPoas !== null) {
					foreach($this->collActividadPoas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collProcedimientoPoas !== null) {
					foreach($this->collProcedimientoPoas as $referrerFK) {
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
		$pos = ProcedimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getProcesoId();
				break;
			case 2:
				return $this->getNombre();
				break;
			case 3:
				return $this->getDescripcion();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcedimientoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getProcesoId(),
			$keys[2] => $this->getNombre(),
			$keys[3] => $this->getDescripcion(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcedimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setProcesoId($value);
				break;
			case 2:
				$this->setNombre($value);
				break;
			case 3:
				$this->setDescripcion($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcedimientoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProcesoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescripcion($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProcedimientoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcedimientoPeer::ID)) $criteria->add(ProcedimientoPeer::ID, $this->id);
		if ($this->isColumnModified(ProcedimientoPeer::PROCESO_ID)) $criteria->add(ProcedimientoPeer::PROCESO_ID, $this->proceso_id);
		if ($this->isColumnModified(ProcedimientoPeer::NOMBRE)) $criteria->add(ProcedimientoPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(ProcedimientoPeer::DESCRIPCION)) $criteria->add(ProcedimientoPeer::DESCRIPCION, $this->descripcion);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProcedimientoPeer::DATABASE_NAME);

		$criteria->add(ProcedimientoPeer::ID, $this->id);

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

		$copyObj->setProcesoId($this->proceso_id);

		$copyObj->setNombre($this->nombre);

		$copyObj->setDescripcion($this->descripcion);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getActividadPoas() as $relObj) {
				$copyObj->addActividadPoa($relObj->copy($deepCopy));
			}

			foreach($this->getProcedimientoPoas() as $relObj) {
				$copyObj->addProcedimientoPoa($relObj->copy($deepCopy));
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
			self::$peer = new ProcedimientoPeer();
		}
		return self::$peer;
	}

	
	public function setProceso($v)
	{


		if ($v === null) {
			$this->setProcesoId(NULL);
		} else {
			$this->setProcesoId($v->getId());
		}


		$this->aProceso = $v;
	}


	
	public function getProceso($con = null)
	{
		if ($this->aProceso === null && ($this->proceso_id !== null)) {
						include_once 'lib/model/om/BaseProcesoPeer.php';

			$this->aProceso = ProcesoPeer::retrieveByPK($this->proceso_id, $con);

			
		}
		return $this->aProceso;
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

				$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

				ActividadPoaPeer::addSelectColumns($criteria);
				$this->collActividadPoas = ActividadPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

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

		$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

		return ActividadPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividadPoa(ActividadPoa $l)
	{
		$this->collActividadPoas[] = $l;
		$l->setProcedimiento($this);
	}


	
	public function getActividadPoasJoinMetaPoa($criteria = null, $con = null)
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

				$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinMetaPoa($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinMetaPoa($criteria, $con);
			}
		}
		$this->lastActividadPoaCriteria = $criteria;

		return $this->collActividadPoas;
	}


	
	public function getActividadPoasJoinProceso($criteria = null, $con = null)
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

				$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProceso($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProceso($criteria, $con);
			}
		}
		$this->lastActividadPoaCriteria = $criteria;

		return $this->collActividadPoas;
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

				$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProyecto($criteria, $con);
			}
		}
		$this->lastActividadPoaCriteria = $criteria;

		return $this->collActividadPoas;
	}


	
	public function getActividadPoasJoinActividadProyecto($criteria = null, $con = null)
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

				$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinActividadProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROCEDIMIENTO_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinActividadProyecto($criteria, $con);
			}
		}
		$this->lastActividadPoaCriteria = $criteria;

		return $this->collActividadPoas;
	}

	
	public function initProcedimientoPoas()
	{
		if ($this->collProcedimientoPoas === null) {
			$this->collProcedimientoPoas = array();
		}
	}

	
	public function getProcedimientoPoas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProcedimientoPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProcedimientoPoas === null) {
			if ($this->isNew()) {
			   $this->collProcedimientoPoas = array();
			} else {

				$criteria->add(ProcedimientoPoaPeer::PROCEDIMIENTO_ID, $this->getId());

				ProcedimientoPoaPeer::addSelectColumns($criteria);
				$this->collProcedimientoPoas = ProcedimientoPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProcedimientoPoaPeer::PROCEDIMIENTO_ID, $this->getId());

				ProcedimientoPoaPeer::addSelectColumns($criteria);
				if (!isset($this->lastProcedimientoPoaCriteria) || !$this->lastProcedimientoPoaCriteria->equals($criteria)) {
					$this->collProcedimientoPoas = ProcedimientoPoaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProcedimientoPoaCriteria = $criteria;
		return $this->collProcedimientoPoas;
	}

	
	public function countProcedimientoPoas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseProcedimientoPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ProcedimientoPoaPeer::PROCEDIMIENTO_ID, $this->getId());

		return ProcedimientoPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProcedimientoPoa(ProcedimientoPoa $l)
	{
		$this->collProcedimientoPoas[] = $l;
		$l->setProcedimiento($this);
	}

} 