<?php


abstract class BaseFuenteActividad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $fuente_id;


	
	protected $actividad_id;


	
	protected $monto;

	
	protected $aFuente;

	
	protected $aActividad;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getFuenteId()
	{

		return $this->fuente_id;
	}

	
	public function getActividadId()
	{

		return $this->actividad_id;
	}

	
	public function getMonto()
	{

		return $this->monto;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = FuenteActividadPeer::ID;
		}

	} 
	
	public function setFuenteId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fuente_id !== $v) {
			$this->fuente_id = $v;
			$this->modifiedColumns[] = FuenteActividadPeer::FUENTE_ID;
		}

		if ($this->aFuente !== null && $this->aFuente->getId() !== $v) {
			$this->aFuente = null;
		}

	} 
	
	public function setActividadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_id !== $v) {
			$this->actividad_id = $v;
			$this->modifiedColumns[] = FuenteActividadPeer::ACTIVIDAD_ID;
		}

		if ($this->aActividad !== null && $this->aActividad->getId() !== $v) {
			$this->aActividad = null;
		}

	} 
	
	public function setMonto($v)
	{

		if ($this->monto !== $v) {
			$this->monto = $v;
			$this->modifiedColumns[] = FuenteActividadPeer::MONTO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->fuente_id = $rs->getInt($startcol + 1);

			$this->actividad_id = $rs->getInt($startcol + 2);

			$this->monto = $rs->getFloat($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating FuenteActividad object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(FuenteActividadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			FuenteActividadPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(FuenteActividadPeer::DATABASE_NAME);
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


												
			if ($this->aFuente !== null) {
				if ($this->aFuente->isModified()) {
					$affectedRows += $this->aFuente->save($con);
				}
				$this->setFuente($this->aFuente);
			}

			if ($this->aActividad !== null) {
				if ($this->aActividad->isModified()) {
					$affectedRows += $this->aActividad->save($con);
				}
				$this->setActividad($this->aActividad);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = FuenteActividadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += FuenteActividadPeer::doUpdate($this, $con);
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


												
			if ($this->aFuente !== null) {
				if (!$this->aFuente->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aFuente->getValidationFailures());
				}
			}

			if ($this->aActividad !== null) {
				if (!$this->aActividad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividad->getValidationFailures());
				}
			}


			if (($retval = FuenteActividadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FuenteActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getFuenteId();
				break;
			case 2:
				return $this->getActividadId();
				break;
			case 3:
				return $this->getMonto();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FuenteActividadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getFuenteId(),
			$keys[2] => $this->getActividadId(),
			$keys[3] => $this->getMonto(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = FuenteActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setFuenteId($value);
				break;
			case 2:
				$this->setActividadId($value);
				break;
			case 3:
				$this->setMonto($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = FuenteActividadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFuenteId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setActividadId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMonto($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(FuenteActividadPeer::DATABASE_NAME);

		if ($this->isColumnModified(FuenteActividadPeer::ID)) $criteria->add(FuenteActividadPeer::ID, $this->id);
		if ($this->isColumnModified(FuenteActividadPeer::FUENTE_ID)) $criteria->add(FuenteActividadPeer::FUENTE_ID, $this->fuente_id);
		if ($this->isColumnModified(FuenteActividadPeer::ACTIVIDAD_ID)) $criteria->add(FuenteActividadPeer::ACTIVIDAD_ID, $this->actividad_id);
		if ($this->isColumnModified(FuenteActividadPeer::MONTO)) $criteria->add(FuenteActividadPeer::MONTO, $this->monto);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(FuenteActividadPeer::DATABASE_NAME);

		$criteria->add(FuenteActividadPeer::ID, $this->id);

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

		$copyObj->setFuenteId($this->fuente_id);

		$copyObj->setActividadId($this->actividad_id);

		$copyObj->setMonto($this->monto);


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
			self::$peer = new FuenteActividadPeer();
		}
		return self::$peer;
	}

	
	public function setFuente($v)
	{


		if ($v === null) {
			$this->setFuenteId(NULL);
		} else {
			$this->setFuenteId($v->getId());
		}


		$this->aFuente = $v;
	}


	
	public function getFuente($con = null)
	{
		if ($this->aFuente === null && ($this->fuente_id !== null)) {
						include_once 'lib/model/om/BaseFuentePeer.php';

			$this->aFuente = FuentePeer::retrieveByPK($this->fuente_id, $con);

			
		}
		return $this->aFuente;
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