<?php


abstract class BaseComponenteProyecto extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $componente_id;


	
	protected $proyecto_id;


	
	protected $monto;

	
	protected $aComponente;

	
	protected $aProyecto;

	
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

	
	public function getProyectoId()
	{

		return $this->proyecto_id;
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
			$this->modifiedColumns[] = ComponenteProyectoPeer::ID;
		}

	} 
	
	public function setComponenteId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->componente_id !== $v) {
			$this->componente_id = $v;
			$this->modifiedColumns[] = ComponenteProyectoPeer::COMPONENTE_ID;
		}

		if ($this->aComponente !== null && $this->aComponente->getId() !== $v) {
			$this->aComponente = null;
		}

	} 
	
	public function setProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_id !== $v) {
			$this->proyecto_id = $v;
			$this->modifiedColumns[] = ComponenteProyectoPeer::PROYECTO_ID;
		}

		if ($this->aProyecto !== null && $this->aProyecto->getId() !== $v) {
			$this->aProyecto = null;
		}

	} 
	
	public function setMonto($v)
	{

		if ($this->monto !== $v) {
			$this->monto = $v;
			$this->modifiedColumns[] = ComponenteProyectoPeer::MONTO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->componente_id = $rs->getInt($startcol + 1);

			$this->proyecto_id = $rs->getInt($startcol + 2);

			$this->monto = $rs->getFloat($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ComponenteProyecto object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ComponenteProyectoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ComponenteProyectoPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ComponenteProyectoPeer::DATABASE_NAME);
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

			if ($this->aProyecto !== null) {
				if ($this->aProyecto->isModified()) {
					$affectedRows += $this->aProyecto->save($con);
				}
				$this->setProyecto($this->aProyecto);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ComponenteProyectoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ComponenteProyectoPeer::doUpdate($this, $con);
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

			if ($this->aProyecto !== null) {
				if (!$this->aProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyecto->getValidationFailures());
				}
			}


			if (($retval = ComponenteProyectoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ComponenteProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getProyectoId();
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
		$keys = ComponenteProyectoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getComponenteId(),
			$keys[2] => $this->getProyectoId(),
			$keys[3] => $this->getMonto(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ComponenteProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setProyectoId($value);
				break;
			case 3:
				$this->setMonto($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ComponenteProyectoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setComponenteId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProyectoId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMonto($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ComponenteProyectoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ComponenteProyectoPeer::ID)) $criteria->add(ComponenteProyectoPeer::ID, $this->id);
		if ($this->isColumnModified(ComponenteProyectoPeer::COMPONENTE_ID)) $criteria->add(ComponenteProyectoPeer::COMPONENTE_ID, $this->componente_id);
		if ($this->isColumnModified(ComponenteProyectoPeer::PROYECTO_ID)) $criteria->add(ComponenteProyectoPeer::PROYECTO_ID, $this->proyecto_id);
		if ($this->isColumnModified(ComponenteProyectoPeer::MONTO)) $criteria->add(ComponenteProyectoPeer::MONTO, $this->monto);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ComponenteProyectoPeer::DATABASE_NAME);

		$criteria->add(ComponenteProyectoPeer::ID, $this->id);

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

		$copyObj->setProyectoId($this->proyecto_id);

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
			self::$peer = new ComponenteProyectoPeer();
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

	
	public function setProyecto($v)
	{


		if ($v === null) {
			$this->setProyectoId(NULL);
		} else {
			$this->setProyectoId($v->getId());
		}


		$this->aProyecto = $v;
	}


	
	public function getProyecto($con = null)
	{
		if ($this->aProyecto === null && ($this->proyecto_id !== null)) {
						include_once 'lib/model/om/BaseProyectoPeer.php';

			$this->aProyecto = ProyectoPeer::retrieveByPK($this->proyecto_id, $con);

			
		}
		return $this->aProyecto;
	}

} 