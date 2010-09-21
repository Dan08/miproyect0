<?php


abstract class BaseProceso extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $macroproceso_id;


	
	protected $nombre;


	
	protected $cargo_id;


	
	protected $descripcion;

	
	protected $aMacroproceso;

	
	protected $aCargo;

	
	protected $collProcedimientos;

	
	protected $lastProcedimientoCriteria = null;

	
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

	
	public function getMacroprocesoId()
	{

		return $this->macroproceso_id;
	}

	
	public function getNombre()
	{

		return $this->nombre;
	}

	
	public function getCargoId()
	{

		return $this->cargo_id;
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
			$this->modifiedColumns[] = ProcesoPeer::ID;
		}

	} 
	
	public function setMacroprocesoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->macroproceso_id !== $v) {
			$this->macroproceso_id = $v;
			$this->modifiedColumns[] = ProcesoPeer::MACROPROCESO_ID;
		}

		if ($this->aMacroproceso !== null && $this->aMacroproceso->getId() !== $v) {
			$this->aMacroproceso = null;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = ProcesoPeer::NOMBRE;
		}

	} 
	
	public function setCargoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cargo_id !== $v) {
			$this->cargo_id = $v;
			$this->modifiedColumns[] = ProcesoPeer::CARGO_ID;
		}

		if ($this->aCargo !== null && $this->aCargo->getId() !== $v) {
			$this->aCargo = null;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ProcesoPeer::DESCRIPCION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->macroproceso_id = $rs->getInt($startcol + 1);

			$this->nombre = $rs->getString($startcol + 2);

			$this->cargo_id = $rs->getInt($startcol + 3);

			$this->descripcion = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Proceso object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcesoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProcesoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProcesoPeer::DATABASE_NAME);
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


												
			if ($this->aMacroproceso !== null) {
				if ($this->aMacroproceso->isModified()) {
					$affectedRows += $this->aMacroproceso->save($con);
				}
				$this->setMacroproceso($this->aMacroproceso);
			}

			if ($this->aCargo !== null) {
				if ($this->aCargo->isModified()) {
					$affectedRows += $this->aCargo->save($con);
				}
				$this->setCargo($this->aCargo);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProcesoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProcesoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collProcedimientos !== null) {
				foreach($this->collProcedimientos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

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


												
			if ($this->aMacroproceso !== null) {
				if (!$this->aMacroproceso->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMacroproceso->getValidationFailures());
				}
			}

			if ($this->aCargo !== null) {
				if (!$this->aCargo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCargo->getValidationFailures());
				}
			}


			if (($retval = ProcesoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collProcedimientos !== null) {
					foreach($this->collProcedimientos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = ProcesoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getMacroprocesoId();
				break;
			case 2:
				return $this->getNombre();
				break;
			case 3:
				return $this->getCargoId();
				break;
			case 4:
				return $this->getDescripcion();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcesoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMacroprocesoId(),
			$keys[2] => $this->getNombre(),
			$keys[3] => $this->getCargoId(),
			$keys[4] => $this->getDescripcion(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcesoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setMacroprocesoId($value);
				break;
			case 2:
				$this->setNombre($value);
				break;
			case 3:
				$this->setCargoId($value);
				break;
			case 4:
				$this->setDescripcion($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcesoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMacroprocesoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCargoId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescripcion($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProcesoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcesoPeer::ID)) $criteria->add(ProcesoPeer::ID, $this->id);
		if ($this->isColumnModified(ProcesoPeer::MACROPROCESO_ID)) $criteria->add(ProcesoPeer::MACROPROCESO_ID, $this->macroproceso_id);
		if ($this->isColumnModified(ProcesoPeer::NOMBRE)) $criteria->add(ProcesoPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(ProcesoPeer::CARGO_ID)) $criteria->add(ProcesoPeer::CARGO_ID, $this->cargo_id);
		if ($this->isColumnModified(ProcesoPeer::DESCRIPCION)) $criteria->add(ProcesoPeer::DESCRIPCION, $this->descripcion);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProcesoPeer::DATABASE_NAME);

		$criteria->add(ProcesoPeer::ID, $this->id);

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

		$copyObj->setMacroprocesoId($this->macroproceso_id);

		$copyObj->setNombre($this->nombre);

		$copyObj->setCargoId($this->cargo_id);

		$copyObj->setDescripcion($this->descripcion);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getProcedimientos() as $relObj) {
				$copyObj->addProcedimiento($relObj->copy($deepCopy));
			}

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
			self::$peer = new ProcesoPeer();
		}
		return self::$peer;
	}

	
	public function setMacroproceso($v)
	{


		if ($v === null) {
			$this->setMacroprocesoId(NULL);
		} else {
			$this->setMacroprocesoId($v->getId());
		}


		$this->aMacroproceso = $v;
	}


	
	public function getMacroproceso($con = null)
	{
		if ($this->aMacroproceso === null && ($this->macroproceso_id !== null)) {
						include_once 'lib/model/om/BaseMacroprocesoPeer.php';

			$this->aMacroproceso = MacroprocesoPeer::retrieveByPK($this->macroproceso_id, $con);

			
		}
		return $this->aMacroproceso;
	}

	
	public function setCargo($v)
	{


		if ($v === null) {
			$this->setCargoId(NULL);
		} else {
			$this->setCargoId($v->getId());
		}


		$this->aCargo = $v;
	}


	
	public function getCargo($con = null)
	{
		if ($this->aCargo === null && ($this->cargo_id !== null)) {
						include_once 'lib/model/om/BaseCargoPeer.php';

			$this->aCargo = CargoPeer::retrieveByPK($this->cargo_id, $con);

			
		}
		return $this->aCargo;
	}

	
	public function initProcedimientos()
	{
		if ($this->collProcedimientos === null) {
			$this->collProcedimientos = array();
		}
	}

	
	public function getProcedimientos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProcedimientoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProcedimientos === null) {
			if ($this->isNew()) {
			   $this->collProcedimientos = array();
			} else {

				$criteria->add(ProcedimientoPeer::PROCESO_ID, $this->getId());

				ProcedimientoPeer::addSelectColumns($criteria);
				$this->collProcedimientos = ProcedimientoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProcedimientoPeer::PROCESO_ID, $this->getId());

				ProcedimientoPeer::addSelectColumns($criteria);
				if (!isset($this->lastProcedimientoCriteria) || !$this->lastProcedimientoCriteria->equals($criteria)) {
					$this->collProcedimientos = ProcedimientoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProcedimientoCriteria = $criteria;
		return $this->collProcedimientos;
	}

	
	public function countProcedimientos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseProcedimientoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ProcedimientoPeer::PROCESO_ID, $this->getId());

		return ProcedimientoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProcedimiento(Procedimiento $l)
	{
		$this->collProcedimientos[] = $l;
		$l->setProceso($this);
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

				$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

				ActividadPoaPeer::addSelectColumns($criteria);
				$this->collActividadPoas = ActividadPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

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

		$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

		return ActividadPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividadPoa(ActividadPoa $l)
	{
		$this->collActividadPoas[] = $l;
		$l->setProceso($this);
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

				$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinMetaPoa($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinMetaPoa($criteria, $con);
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

				$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

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

				$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinActividadProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROCESO_ID, $this->getId());

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

				$criteria->add(ProcedimientoPoaPeer::PROCESO_ID, $this->getId());

				ProcedimientoPoaPeer::addSelectColumns($criteria);
				$this->collProcedimientoPoas = ProcedimientoPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProcedimientoPoaPeer::PROCESO_ID, $this->getId());

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

		$criteria->add(ProcedimientoPoaPeer::PROCESO_ID, $this->getId());

		return ProcedimientoPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProcedimientoPoa(ProcedimientoPoa $l)
	{
		$this->collProcedimientoPoas[] = $l;
		$l->setProceso($this);
	}


	
	public function getProcedimientoPoasJoinProcedimiento($criteria = null, $con = null)
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

				$criteria->add(ProcedimientoPoaPeer::PROCESO_ID, $this->getId());

				$this->collProcedimientoPoas = ProcedimientoPoaPeer::doSelectJoinProcedimiento($criteria, $con);
			}
		} else {
									
			$criteria->add(ProcedimientoPoaPeer::PROCESO_ID, $this->getId());

			if (!isset($this->lastProcedimientoPoaCriteria) || !$this->lastProcedimientoPoaCriteria->equals($criteria)) {
				$this->collProcedimientoPoas = ProcedimientoPoaPeer::doSelectJoinProcedimiento($criteria, $con);
			}
		}
		$this->lastProcedimientoPoaCriteria = $criteria;

		return $this->collProcedimientoPoas;
	}

} 