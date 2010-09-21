<?php


abstract class BaseActividadPoa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $meta_poa_id;


	
	protected $proceso_id;


	
	protected $proyecto_id;


	
	protected $actividad_id;


	
	protected $descripcion;


	
	protected $responsable;


	
	protected $observaciones;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aMetaPoa;

	
	protected $aProceso;

	
	protected $aProyecto;

	
	protected $aActividadProyecto;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getMetaPoaId()
	{

		return $this->meta_poa_id;
	}

	
	public function getProcesoId()
	{

		return $this->proceso_id;
	}

	
	public function getProyectoId()
	{

		return $this->proyecto_id;
	}

	
	public function getActividadId()
	{

		return $this->actividad_id;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getResponsable()
	{

		return $this->responsable;
	}

	
	public function getObservaciones()
	{

		return $this->observaciones;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::ID;
		}

	} 
	
	public function setMetaPoaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->meta_poa_id !== $v) {
			$this->meta_poa_id = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::META_POA_ID;
		}

		if ($this->aMetaPoa !== null && $this->aMetaPoa->getId() !== $v) {
			$this->aMetaPoa = null;
		}

	} 
	
	public function setProcesoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proceso_id !== $v) {
			$this->proceso_id = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::PROCESO_ID;
		}

		if ($this->aProceso !== null && $this->aProceso->getId() !== $v) {
			$this->aProceso = null;
		}

	} 
	
	public function setProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_id !== $v) {
			$this->proyecto_id = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::PROYECTO_ID;
		}

		if ($this->aProyecto !== null && $this->aProyecto->getId() !== $v) {
			$this->aProyecto = null;
		}

	} 
	
	public function setActividadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_id !== $v) {
			$this->actividad_id = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::ACTIVIDAD_ID;
		}

		if ($this->aActividadProyecto !== null && $this->aActividadProyecto->getId() !== $v) {
			$this->aActividadProyecto = null;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::DESCRIPCION;
		}

	} 
	
	public function setResponsable($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->responsable !== $v) {
			$this->responsable = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::RESPONSABLE;
		}

	} 
	
	public function setObservaciones($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->observaciones !== $v) {
			$this->observaciones = $v;
			$this->modifiedColumns[] = ActividadPoaPeer::OBSERVACIONES;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = ActividadPoaPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = ActividadPoaPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->meta_poa_id = $rs->getInt($startcol + 1);

			$this->proceso_id = $rs->getInt($startcol + 2);

			$this->proyecto_id = $rs->getInt($startcol + 3);

			$this->actividad_id = $rs->getInt($startcol + 4);

			$this->descripcion = $rs->getString($startcol + 5);

			$this->responsable = $rs->getString($startcol + 6);

			$this->observaciones = $rs->getString($startcol + 7);

			$this->created_at = $rs->getTimestamp($startcol + 8, null);

			$this->updated_at = $rs->getTimestamp($startcol + 9, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ActividadPoa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadPoaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ActividadPoaPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ActividadPoaPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ActividadPoaPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadPoaPeer::DATABASE_NAME);
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


												
			if ($this->aMetaPoa !== null) {
				if ($this->aMetaPoa->isModified()) {
					$affectedRows += $this->aMetaPoa->save($con);
				}
				$this->setMetaPoa($this->aMetaPoa);
			}

			if ($this->aProceso !== null) {
				if ($this->aProceso->isModified()) {
					$affectedRows += $this->aProceso->save($con);
				}
				$this->setProceso($this->aProceso);
			}

			if ($this->aProyecto !== null) {
				if ($this->aProyecto->isModified()) {
					$affectedRows += $this->aProyecto->save($con);
				}
				$this->setProyecto($this->aProyecto);
			}

			if ($this->aActividadProyecto !== null) {
				if ($this->aActividadProyecto->isModified()) {
					$affectedRows += $this->aActividadProyecto->save($con);
				}
				$this->setActividadProyecto($this->aActividadProyecto);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ActividadPoaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ActividadPoaPeer::doUpdate($this, $con);
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


												
			if ($this->aMetaPoa !== null) {
				if (!$this->aMetaPoa->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMetaPoa->getValidationFailures());
				}
			}

			if ($this->aProceso !== null) {
				if (!$this->aProceso->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProceso->getValidationFailures());
				}
			}

			if ($this->aProyecto !== null) {
				if (!$this->aProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyecto->getValidationFailures());
				}
			}

			if ($this->aActividadProyecto !== null) {
				if (!$this->aActividadProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividadProyecto->getValidationFailures());
				}
			}


			if (($retval = ActividadPoaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getMetaPoaId();
				break;
			case 2:
				return $this->getProcesoId();
				break;
			case 3:
				return $this->getProyectoId();
				break;
			case 4:
				return $this->getActividadId();
				break;
			case 5:
				return $this->getDescripcion();
				break;
			case 6:
				return $this->getResponsable();
				break;
			case 7:
				return $this->getObservaciones();
				break;
			case 8:
				return $this->getCreatedAt();
				break;
			case 9:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadPoaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMetaPoaId(),
			$keys[2] => $this->getProcesoId(),
			$keys[3] => $this->getProyectoId(),
			$keys[4] => $this->getActividadId(),
			$keys[5] => $this->getDescripcion(),
			$keys[6] => $this->getResponsable(),
			$keys[7] => $this->getObservaciones(),
			$keys[8] => $this->getCreatedAt(),
			$keys[9] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setMetaPoaId($value);
				break;
			case 2:
				$this->setProcesoId($value);
				break;
			case 3:
				$this->setProyectoId($value);
				break;
			case 4:
				$this->setActividadId($value);
				break;
			case 5:
				$this->setDescripcion($value);
				break;
			case 6:
				$this->setResponsable($value);
				break;
			case 7:
				$this->setObservaciones($value);
				break;
			case 8:
				$this->setCreatedAt($value);
				break;
			case 9:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadPoaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMetaPoaId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProcesoId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setProyectoId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setActividadId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDescripcion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setResponsable($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setObservaciones($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUpdatedAt($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ActividadPoaPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActividadPoaPeer::ID)) $criteria->add(ActividadPoaPeer::ID, $this->id);
		if ($this->isColumnModified(ActividadPoaPeer::META_POA_ID)) $criteria->add(ActividadPoaPeer::META_POA_ID, $this->meta_poa_id);
		if ($this->isColumnModified(ActividadPoaPeer::PROCESO_ID)) $criteria->add(ActividadPoaPeer::PROCESO_ID, $this->proceso_id);
		if ($this->isColumnModified(ActividadPoaPeer::PROYECTO_ID)) $criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->proyecto_id);
		if ($this->isColumnModified(ActividadPoaPeer::ACTIVIDAD_ID)) $criteria->add(ActividadPoaPeer::ACTIVIDAD_ID, $this->actividad_id);
		if ($this->isColumnModified(ActividadPoaPeer::DESCRIPCION)) $criteria->add(ActividadPoaPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ActividadPoaPeer::RESPONSABLE)) $criteria->add(ActividadPoaPeer::RESPONSABLE, $this->responsable);
		if ($this->isColumnModified(ActividadPoaPeer::OBSERVACIONES)) $criteria->add(ActividadPoaPeer::OBSERVACIONES, $this->observaciones);
		if ($this->isColumnModified(ActividadPoaPeer::CREATED_AT)) $criteria->add(ActividadPoaPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ActividadPoaPeer::UPDATED_AT)) $criteria->add(ActividadPoaPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ActividadPoaPeer::DATABASE_NAME);

		$criteria->add(ActividadPoaPeer::ID, $this->id);

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

		$copyObj->setMetaPoaId($this->meta_poa_id);

		$copyObj->setProcesoId($this->proceso_id);

		$copyObj->setProyectoId($this->proyecto_id);

		$copyObj->setActividadId($this->actividad_id);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setResponsable($this->responsable);

		$copyObj->setObservaciones($this->observaciones);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


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
			self::$peer = new ActividadPoaPeer();
		}
		return self::$peer;
	}

	
	public function setMetaPoa($v)
	{


		if ($v === null) {
			$this->setMetaPoaId(NULL);
		} else {
			$this->setMetaPoaId($v->getId());
		}


		$this->aMetaPoa = $v;
	}


	
	public function getMetaPoa($con = null)
	{
		if ($this->aMetaPoa === null && ($this->meta_poa_id !== null)) {
						include_once 'lib/model/om/BaseMetaPoaPeer.php';

			$this->aMetaPoa = MetaPoaPeer::retrieveByPK($this->meta_poa_id, $con);

			
		}
		return $this->aMetaPoa;
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

	
	public function setActividadProyecto($v)
	{


		if ($v === null) {
			$this->setActividadId(NULL);
		} else {
			$this->setActividadId($v->getId());
		}


		$this->aActividadProyecto = $v;
	}


	
	public function getActividadProyecto($con = null)
	{
		if ($this->aActividadProyecto === null && ($this->actividad_id !== null)) {
						include_once 'lib/model/om/BaseActividadProyectoPeer.php';

			$this->aActividadProyecto = ActividadProyectoPeer::retrieveByPK($this->actividad_id, $con);

			
		}
		return $this->aActividadProyecto;
	}

} 