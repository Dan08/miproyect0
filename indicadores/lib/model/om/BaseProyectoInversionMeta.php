<?php


abstract class BaseProyectoInversionMeta extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $meta_pd_id;


	
	protected $proyecto_inversion_id;


	
	protected $actividad_id;

	
	protected $aMetaPd;

	
	protected $aProyectoInversion;

	
	protected $aActividad;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getMetaPdId()
	{

		return $this->meta_pd_id;
	}

	
	public function getProyectoInversionId()
	{

		return $this->proyecto_inversion_id;
	}

	
	public function getActividadId()
	{

		return $this->actividad_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ProyectoInversionMetaPeer::ID;
		}

	} 
	
	public function setMetaPdId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->meta_pd_id !== $v) {
			$this->meta_pd_id = $v;
			$this->modifiedColumns[] = ProyectoInversionMetaPeer::META_PD_ID;
		}

		if ($this->aMetaPd !== null && $this->aMetaPd->getId() !== $v) {
			$this->aMetaPd = null;
		}

	} 
	
	public function setProyectoInversionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_inversion_id !== $v) {
			$this->proyecto_inversion_id = $v;
			$this->modifiedColumns[] = ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID;
		}

		if ($this->aProyectoInversion !== null && $this->aProyectoInversion->getId() !== $v) {
			$this->aProyectoInversion = null;
		}

	} 
	
	public function setActividadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_id !== $v) {
			$this->actividad_id = $v;
			$this->modifiedColumns[] = ProyectoInversionMetaPeer::ACTIVIDAD_ID;
		}

		if ($this->aActividad !== null && $this->aActividad->getId() !== $v) {
			$this->aActividad = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->meta_pd_id = $rs->getInt($startcol + 1);

			$this->proyecto_inversion_id = $rs->getInt($startcol + 2);

			$this->actividad_id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ProyectoInversionMeta object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProyectoInversionMetaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProyectoInversionMetaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProyectoInversionMetaPeer::DATABASE_NAME);
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


												
			if ($this->aMetaPd !== null) {
				if ($this->aMetaPd->isModified()) {
					$affectedRows += $this->aMetaPd->save($con);
				}
				$this->setMetaPd($this->aMetaPd);
			}

			if ($this->aProyectoInversion !== null) {
				if ($this->aProyectoInversion->isModified()) {
					$affectedRows += $this->aProyectoInversion->save($con);
				}
				$this->setProyectoInversion($this->aProyectoInversion);
			}

			if ($this->aActividad !== null) {
				if ($this->aActividad->isModified()) {
					$affectedRows += $this->aActividad->save($con);
				}
				$this->setActividad($this->aActividad);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProyectoInversionMetaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProyectoInversionMetaPeer::doUpdate($this, $con);
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


												
			if ($this->aMetaPd !== null) {
				if (!$this->aMetaPd->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMetaPd->getValidationFailures());
				}
			}

			if ($this->aProyectoInversion !== null) {
				if (!$this->aProyectoInversion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyectoInversion->getValidationFailures());
				}
			}

			if ($this->aActividad !== null) {
				if (!$this->aActividad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividad->getValidationFailures());
				}
			}


			if (($retval = ProyectoInversionMetaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProyectoInversionMetaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getMetaPdId();
				break;
			case 2:
				return $this->getProyectoInversionId();
				break;
			case 3:
				return $this->getActividadId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProyectoInversionMetaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMetaPdId(),
			$keys[2] => $this->getProyectoInversionId(),
			$keys[3] => $this->getActividadId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProyectoInversionMetaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setMetaPdId($value);
				break;
			case 2:
				$this->setProyectoInversionId($value);
				break;
			case 3:
				$this->setActividadId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProyectoInversionMetaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMetaPdId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProyectoInversionId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setActividadId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProyectoInversionMetaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProyectoInversionMetaPeer::ID)) $criteria->add(ProyectoInversionMetaPeer::ID, $this->id);
		if ($this->isColumnModified(ProyectoInversionMetaPeer::META_PD_ID)) $criteria->add(ProyectoInversionMetaPeer::META_PD_ID, $this->meta_pd_id);
		if ($this->isColumnModified(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID)) $criteria->add(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, $this->proyecto_inversion_id);
		if ($this->isColumnModified(ProyectoInversionMetaPeer::ACTIVIDAD_ID)) $criteria->add(ProyectoInversionMetaPeer::ACTIVIDAD_ID, $this->actividad_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProyectoInversionMetaPeer::DATABASE_NAME);

		$criteria->add(ProyectoInversionMetaPeer::ID, $this->id);

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

		$copyObj->setMetaPdId($this->meta_pd_id);

		$copyObj->setProyectoInversionId($this->proyecto_inversion_id);

		$copyObj->setActividadId($this->actividad_id);


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
			self::$peer = new ProyectoInversionMetaPeer();
		}
		return self::$peer;
	}

	
	public function setMetaPd($v)
	{


		if ($v === null) {
			$this->setMetaPdId(NULL);
		} else {
			$this->setMetaPdId($v->getId());
		}


		$this->aMetaPd = $v;
	}


	
	public function getMetaPd($con = null)
	{
		if ($this->aMetaPd === null && ($this->meta_pd_id !== null)) {
						include_once 'lib/model/om/BaseMetaPdPeer.php';

			$this->aMetaPd = MetaPdPeer::retrieveByPK($this->meta_pd_id, $con);

			
		}
		return $this->aMetaPd;
	}

	
	public function setProyectoInversion($v)
	{


		if ($v === null) {
			$this->setProyectoInversionId(NULL);
		} else {
			$this->setProyectoInversionId($v->getId());
		}


		$this->aProyectoInversion = $v;
	}


	
	public function getProyectoInversion($con = null)
	{
		if ($this->aProyectoInversion === null && ($this->proyecto_inversion_id !== null)) {
						include_once 'lib/model/om/BaseProyectoInversionPeer.php';

			$this->aProyectoInversion = ProyectoInversionPeer::retrieveByPK($this->proyecto_inversion_id, $con);

			
		}
		return $this->aProyectoInversion;
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