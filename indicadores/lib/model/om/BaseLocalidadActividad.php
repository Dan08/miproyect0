<?php


abstract class BaseLocalidadActividad extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $localidad_id;


	
	protected $actividad_id;


	
	protected $monto;


	
	protected $cantidad;

	
	protected $aLocalidad;

	
	protected $aActividad;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getLocalidadId()
	{

		return $this->localidad_id;
	}

	
	public function getActividadId()
	{

		return $this->actividad_id;
	}

	
	public function getMonto()
	{

		return $this->monto;
	}

	
	public function getCantidad()
	{

		return $this->cantidad;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = LocalidadActividadPeer::ID;
		}

	} 
	
	public function setLocalidadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->localidad_id !== $v) {
			$this->localidad_id = $v;
			$this->modifiedColumns[] = LocalidadActividadPeer::LOCALIDAD_ID;
		}

		if ($this->aLocalidad !== null && $this->aLocalidad->getId() !== $v) {
			$this->aLocalidad = null;
		}

	} 
	
	public function setActividadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_id !== $v) {
			$this->actividad_id = $v;
			$this->modifiedColumns[] = LocalidadActividadPeer::ACTIVIDAD_ID;
		}

		if ($this->aActividad !== null && $this->aActividad->getId() !== $v) {
			$this->aActividad = null;
		}

	} 
	
	public function setMonto($v)
	{

		if ($this->monto !== $v) {
			$this->monto = $v;
			$this->modifiedColumns[] = LocalidadActividadPeer::MONTO;
		}

	} 
	
	public function setCantidad($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->cantidad !== $v) {
			$this->cantidad = $v;
			$this->modifiedColumns[] = LocalidadActividadPeer::CANTIDAD;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->localidad_id = $rs->getInt($startcol + 1);

			$this->actividad_id = $rs->getInt($startcol + 2);

			$this->monto = $rs->getFloat($startcol + 3);

			$this->cantidad = $rs->getInt($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating LocalidadActividad object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LocalidadActividadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LocalidadActividadPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LocalidadActividadPeer::DATABASE_NAME);
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


												
			if ($this->aLocalidad !== null) {
				if ($this->aLocalidad->isModified()) {
					$affectedRows += $this->aLocalidad->save($con);
				}
				$this->setLocalidad($this->aLocalidad);
			}

			if ($this->aActividad !== null) {
				if ($this->aActividad->isModified()) {
					$affectedRows += $this->aActividad->save($con);
				}
				$this->setActividad($this->aActividad);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = LocalidadActividadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LocalidadActividadPeer::doUpdate($this, $con);
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


												
			if ($this->aLocalidad !== null) {
				if (!$this->aLocalidad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aLocalidad->getValidationFailures());
				}
			}

			if ($this->aActividad !== null) {
				if (!$this->aActividad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividad->getValidationFailures());
				}
			}


			if (($retval = LocalidadActividadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LocalidadActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getLocalidadId();
				break;
			case 2:
				return $this->getActividadId();
				break;
			case 3:
				return $this->getMonto();
				break;
			case 4:
				return $this->getCantidad();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LocalidadActividadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getLocalidadId(),
			$keys[2] => $this->getActividadId(),
			$keys[3] => $this->getMonto(),
			$keys[4] => $this->getCantidad(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LocalidadActividadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setLocalidadId($value);
				break;
			case 2:
				$this->setActividadId($value);
				break;
			case 3:
				$this->setMonto($value);
				break;
			case 4:
				$this->setCantidad($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LocalidadActividadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLocalidadId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setActividadId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMonto($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCantidad($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LocalidadActividadPeer::DATABASE_NAME);

		if ($this->isColumnModified(LocalidadActividadPeer::ID)) $criteria->add(LocalidadActividadPeer::ID, $this->id);
		if ($this->isColumnModified(LocalidadActividadPeer::LOCALIDAD_ID)) $criteria->add(LocalidadActividadPeer::LOCALIDAD_ID, $this->localidad_id);
		if ($this->isColumnModified(LocalidadActividadPeer::ACTIVIDAD_ID)) $criteria->add(LocalidadActividadPeer::ACTIVIDAD_ID, $this->actividad_id);
		if ($this->isColumnModified(LocalidadActividadPeer::MONTO)) $criteria->add(LocalidadActividadPeer::MONTO, $this->monto);
		if ($this->isColumnModified(LocalidadActividadPeer::CANTIDAD)) $criteria->add(LocalidadActividadPeer::CANTIDAD, $this->cantidad);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LocalidadActividadPeer::DATABASE_NAME);

		$criteria->add(LocalidadActividadPeer::ID, $this->id);

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

		$copyObj->setLocalidadId($this->localidad_id);

		$copyObj->setActividadId($this->actividad_id);

		$copyObj->setMonto($this->monto);

		$copyObj->setCantidad($this->cantidad);


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
			self::$peer = new LocalidadActividadPeer();
		}
		return self::$peer;
	}

	
	public function setLocalidad($v)
	{


		if ($v === null) {
			$this->setLocalidadId(NULL);
		} else {
			$this->setLocalidadId($v->getId());
		}


		$this->aLocalidad = $v;
	}


	
	public function getLocalidad($con = null)
	{
		if ($this->aLocalidad === null && ($this->localidad_id !== null)) {
						include_once 'lib/model/om/BaseLocalidadPeer.php';

			$this->aLocalidad = LocalidadPeer::retrieveByPK($this->localidad_id, $con);

			
		}
		return $this->aLocalidad;
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