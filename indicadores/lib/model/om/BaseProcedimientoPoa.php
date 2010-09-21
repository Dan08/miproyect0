<?php


abstract class BaseProcedimientoPoa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $proceso_id;


	
	protected $procedimiento_id;


	
	protected $ponderacion;

	
	protected $aProceso;

	
	protected $aProcedimiento;

	
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

	
	public function getProcedimientoId()
	{

		return $this->procedimiento_id;
	}

	
	public function getPonderacion()
	{

		return $this->ponderacion;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ProcedimientoPoaPeer::ID;
		}

	} 
	
	public function setProcesoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proceso_id !== $v) {
			$this->proceso_id = $v;
			$this->modifiedColumns[] = ProcedimientoPoaPeer::PROCESO_ID;
		}

		if ($this->aProceso !== null && $this->aProceso->getId() !== $v) {
			$this->aProceso = null;
		}

	} 
	
	public function setProcedimientoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->procedimiento_id !== $v) {
			$this->procedimiento_id = $v;
			$this->modifiedColumns[] = ProcedimientoPoaPeer::PROCEDIMIENTO_ID;
		}

		if ($this->aProcedimiento !== null && $this->aProcedimiento->getId() !== $v) {
			$this->aProcedimiento = null;
		}

	} 
	
	public function setPonderacion($v)
	{

		if ($this->ponderacion !== $v) {
			$this->ponderacion = $v;
			$this->modifiedColumns[] = ProcedimientoPoaPeer::PONDERACION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->proceso_id = $rs->getInt($startcol + 1);

			$this->procedimiento_id = $rs->getInt($startcol + 2);

			$this->ponderacion = $rs->getFloat($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ProcedimientoPoa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcedimientoPoaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProcedimientoPoaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProcedimientoPoaPeer::DATABASE_NAME);
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

			if ($this->aProcedimiento !== null) {
				if ($this->aProcedimiento->isModified()) {
					$affectedRows += $this->aProcedimiento->save($con);
				}
				$this->setProcedimiento($this->aProcedimiento);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProcedimientoPoaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProcedimientoPoaPeer::doUpdate($this, $con);
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


												
			if ($this->aProceso !== null) {
				if (!$this->aProceso->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProceso->getValidationFailures());
				}
			}

			if ($this->aProcedimiento !== null) {
				if (!$this->aProcedimiento->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProcedimiento->getValidationFailures());
				}
			}


			if (($retval = ProcedimientoPoaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getProcedimientoId();
				break;
			case 3:
				return $this->getPonderacion();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcedimientoPoaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getProcesoId(),
			$keys[2] => $this->getProcedimientoId(),
			$keys[3] => $this->getPonderacion(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setProcedimientoId($value);
				break;
			case 3:
				$this->setPonderacion($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProcedimientoPoaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProcesoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProcedimientoId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPonderacion($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProcedimientoPoaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcedimientoPoaPeer::ID)) $criteria->add(ProcedimientoPoaPeer::ID, $this->id);
		if ($this->isColumnModified(ProcedimientoPoaPeer::PROCESO_ID)) $criteria->add(ProcedimientoPoaPeer::PROCESO_ID, $this->proceso_id);
		if ($this->isColumnModified(ProcedimientoPoaPeer::PROCEDIMIENTO_ID)) $criteria->add(ProcedimientoPoaPeer::PROCEDIMIENTO_ID, $this->procedimiento_id);
		if ($this->isColumnModified(ProcedimientoPoaPeer::PONDERACION)) $criteria->add(ProcedimientoPoaPeer::PONDERACION, $this->ponderacion);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProcedimientoPoaPeer::DATABASE_NAME);

		$criteria->add(ProcedimientoPoaPeer::ID, $this->id);

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

		$copyObj->setProcedimientoId($this->procedimiento_id);

		$copyObj->setPonderacion($this->ponderacion);


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
			self::$peer = new ProcedimientoPoaPeer();
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

	
	public function setProcedimiento($v)
	{


		if ($v === null) {
			$this->setProcedimientoId(NULL);
		} else {
			$this->setProcedimientoId($v->getId());
		}


		$this->aProcedimiento = $v;
	}


	
	public function getProcedimiento($con = null)
	{
		if ($this->aProcedimiento === null && ($this->procedimiento_id !== null)) {
						include_once 'lib/model/om/BaseProcedimientoPeer.php';

			$this->aProcedimiento = ProcedimientoPeer::retrieveByPK($this->procedimiento_id, $con);

			
		}
		return $this->aProcedimiento;
	}

} 