<?php


abstract class BaseComponenteActividad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $componente_id;


	
	protected $actividad_id;


	
	protected $monto;

	
	protected $aComponente;

	
	protected $aActividad;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getComponenteId()
	{

		return $this->componente_id;
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
			$this->modifiedColumns[] = ComponenteActividadPeer::ID;
		}

	} 
	
	public function setComponenteId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->componente_id !== $v) {
			$this->componente_id = $v;
			$this->modifiedColumns[] = ComponenteActividadPeer::COMPONENTE_ID;
		}

		if ($this->aComponente !== null && $this->aComponente->getId() !== $v) {
			$this->aComponente = null;
		}

	} 
	
	public function setActividadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_id !== $v) {
			$this->actividad_id = $v;
			$this->modifiedColumns[] = ComponenteActividadPeer::ACTIVIDAD_ID;
		}

		if ($this->aActividad !== null && $this->aActividad->getId() !== $v) {
			$this->aActividad = null;
		}

	} 
	
	public function setMonto($v)
	{

		if ($this->monto !== $v) {
			$this->monto = $v;
			$this->modifiedColumns[] = ComponenteActividadPeer::MONTO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->componente_id = $rs->getInt($startcol + 1);

			$this->actividad_id = $rs->getInt($startcol + 2);

			$this->monto = $rs->getFloat($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ComponenteActividad object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ComponenteActividadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ComponenteActividadPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ComponenteActividadPeer::DATABASE_NAME);
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


												
			if ($this->aComponente !== null) {
				if ($this->aComponente->isModified()) {
					$affectedRows += $this->aComponente->save($con);
				}
				$this->setComponente($this->aComponente);
			}

			if ($this->aActividad !== null) {
				if ($this->aActividad->isModified()) {
					$affectedRows += $this->aActividad->save($con);
				}
				$this->setActividad($this->aActividad);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ComponenteActividadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ComponenteActividadPeer::doUpdate($this, $con);
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


												
			if ($this->aComponente !== null) {
				if (!$this->aComponente->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aComponente->getValidationFailures());
				}
			}

			if ($this->aActividad !== null) {
				if (!$this->aActividad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividad->getValidationFailures());
				}
			}


			if (($retval = ComponenteActividadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ComponenteActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getComponenteId();
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
		$keys = ComponenteActividadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getComponenteId(),
			$keys[2] => $this->getActividadId(),
			$keys[3] => $this->getMonto(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ComponenteActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setComponenteId($value);
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
		$keys = ComponenteActividadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setComponenteId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setActividadId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMonto($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ComponenteActividadPeer::DATABASE_NAME);

		if ($this->isColumnModified(ComponenteActividadPeer::ID)) $criteria->add(ComponenteActividadPeer::ID, $this->id);
		if ($this->isColumnModified(ComponenteActividadPeer::COMPONENTE_ID)) $criteria->add(ComponenteActividadPeer::COMPONENTE_ID, $this->componente_id);
		if ($this->isColumnModified(ComponenteActividadPeer::ACTIVIDAD_ID)) $criteria->add(ComponenteActividadPeer::ACTIVIDAD_ID, $this->actividad_id);
		if ($this->isColumnModified(ComponenteActividadPeer::MONTO)) $criteria->add(ComponenteActividadPeer::MONTO, $this->monto);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ComponenteActividadPeer::DATABASE_NAME);

		$criteria->add(ComponenteActividadPeer::ID, $this->id);

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

		$copyObj->setComponenteId($this->componente_id);

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
			self::$peer = new ComponenteActividadPeer();
		}
		return self::$peer;
	}

	
	public function setComponente($v)
	{


		if ($v === null) {
			$this->setComponenteId(NULL);
		} else {
			$this->setComponenteId($v->getId());
		}


		$this->aComponente = $v;
	}


	
	public function getComponente($con = null)
	{
		if ($this->aComponente === null && ($this->componente_id !== null)) {
						include_once 'lib/model/om/BaseComponentePeer.php';

			$this->aComponente = ComponentePeer::retrieveByPK($this->componente_id, $con);

			
		}
		return $this->aComponente;
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