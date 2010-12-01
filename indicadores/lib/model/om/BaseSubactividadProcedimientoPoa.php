<?php


abstract class BaseSubactividadProcedimientoPoa extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $actividad_procedimiento_id;


	
	protected $descripcion;


	
	protected $responsable;


	
	protected $entregable;


	
	protected $fecha_inicio;


	
	protected $duracion;


	
	protected $ponderacion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aActividadProcedimientoPoa;

	
	protected $collSubactividadProcedimientoPoaEjecucions;

	
	protected $lastSubactividadProcedimientoPoaEjecucionCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getActividadProcedimientoId()
	{

		return $this->actividad_procedimiento_id;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getResponsable()
	{

		return $this->responsable;
	}

	
	public function getEntregable()
	{

		return $this->entregable;
	}

	
	public function getFechaInicio($format = 'Y-m-d')
	{

		if ($this->fecha_inicio === null || $this->fecha_inicio === '') {
			return null;
		} elseif (!is_int($this->fecha_inicio)) {
						$ts = strtotime($this->fecha_inicio);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha_inicio] as date/time value: " . var_export($this->fecha_inicio, true));
			}
		} else {
			$ts = $this->fecha_inicio;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDuracion()
	{

		return $this->duracion;
	}

	
	public function getPonderacion()
	{

		return $this->ponderacion;
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
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::ID;
		}

	} 
	
	public function setActividadProcedimientoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_procedimiento_id !== $v) {
			$this->actividad_procedimiento_id = $v;
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID;
		}

		if ($this->aActividadProcedimientoPoa !== null && $this->aActividadProcedimientoPoa->getId() !== $v) {
			$this->aActividadProcedimientoPoa = null;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::DESCRIPCION;
		}

	} 
	
	public function setResponsable($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->responsable !== $v) {
			$this->responsable = $v;
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::RESPONSABLE;
		}

	} 
	
	public function setEntregable($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->entregable !== $v) {
			$this->entregable = $v;
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::ENTREGABLE;
		}

	} 
	
	public function setFechaInicio($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha_inicio] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha_inicio !== $ts) {
			$this->fecha_inicio = $ts;
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::FECHA_INICIO;
		}

	} 
	
	public function setDuracion($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->duracion !== $v) {
			$this->duracion = $v;
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::DURACION;
		}

	} 
	
	public function setPonderacion($v)
	{

		if ($this->ponderacion !== $v) {
			$this->ponderacion = $v;
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::PONDERACION;
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
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::CREATED_AT;
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
			$this->modifiedColumns[] = SubactividadProcedimientoPoaPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->actividad_procedimiento_id = $rs->getInt($startcol + 1);

			$this->descripcion = $rs->getString($startcol + 2);

			$this->responsable = $rs->getString($startcol + 3);

			$this->entregable = $rs->getString($startcol + 4);

			$this->fecha_inicio = $rs->getDate($startcol + 5, null);

			$this->duracion = $rs->getInt($startcol + 6);

			$this->ponderacion = $rs->getFloat($startcol + 7);

			$this->created_at = $rs->getTimestamp($startcol + 8, null);

			$this->updated_at = $rs->getTimestamp($startcol + 9, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SubactividadProcedimientoPoa object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadProcedimientoPoaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SubactividadProcedimientoPoaPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(SubactividadProcedimientoPoaPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(SubactividadProcedimientoPoaPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadProcedimientoPoaPeer::DATABASE_NAME);
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


												
			if ($this->aActividadProcedimientoPoa !== null) {
				if ($this->aActividadProcedimientoPoa->isModified()) {
					$affectedRows += $this->aActividadProcedimientoPoa->save($con);
				}
				$this->setActividadProcedimientoPoa($this->aActividadProcedimientoPoa);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SubactividadProcedimientoPoaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SubactividadProcedimientoPoaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collSubactividadProcedimientoPoaEjecucions !== null) {
				foreach($this->collSubactividadProcedimientoPoaEjecucions as $referrerFK) {
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


												
			if ($this->aActividadProcedimientoPoa !== null) {
				if (!$this->aActividadProcedimientoPoa->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividadProcedimientoPoa->getValidationFailures());
				}
			}


			if (($retval = SubactividadProcedimientoPoaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSubactividadProcedimientoPoaEjecucions !== null) {
					foreach($this->collSubactividadProcedimientoPoaEjecucions as $referrerFK) {
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
		$pos = SubactividadProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getActividadProcedimientoId();
				break;
			case 2:
				return $this->getDescripcion();
				break;
			case 3:
				return $this->getResponsable();
				break;
			case 4:
				return $this->getEntregable();
				break;
			case 5:
				return $this->getFechaInicio();
				break;
			case 6:
				return $this->getDuracion();
				break;
			case 7:
				return $this->getPonderacion();
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
		$keys = SubactividadProcedimientoPoaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getActividadProcedimientoId(),
			$keys[2] => $this->getDescripcion(),
			$keys[3] => $this->getResponsable(),
			$keys[4] => $this->getEntregable(),
			$keys[5] => $this->getFechaInicio(),
			$keys[6] => $this->getDuracion(),
			$keys[7] => $this->getPonderacion(),
			$keys[8] => $this->getCreatedAt(),
			$keys[9] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SubactividadProcedimientoPoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setActividadProcedimientoId($value);
				break;
			case 2:
				$this->setDescripcion($value);
				break;
			case 3:
				$this->setResponsable($value);
				break;
			case 4:
				$this->setEntregable($value);
				break;
			case 5:
				$this->setFechaInicio($value);
				break;
			case 6:
				$this->setDuracion($value);
				break;
			case 7:
				$this->setPonderacion($value);
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
		$keys = SubactividadProcedimientoPoaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setActividadProcedimientoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setResponsable($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEntregable($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFechaInicio($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDuracion($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPonderacion($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUpdatedAt($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SubactividadProcedimientoPoaPeer::DATABASE_NAME);

		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::ID)) $criteria->add(SubactividadProcedimientoPoaPeer::ID, $this->id);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID)) $criteria->add(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, $this->actividad_procedimiento_id);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::DESCRIPCION)) $criteria->add(SubactividadProcedimientoPoaPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::RESPONSABLE)) $criteria->add(SubactividadProcedimientoPoaPeer::RESPONSABLE, $this->responsable);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::ENTREGABLE)) $criteria->add(SubactividadProcedimientoPoaPeer::ENTREGABLE, $this->entregable);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::FECHA_INICIO)) $criteria->add(SubactividadProcedimientoPoaPeer::FECHA_INICIO, $this->fecha_inicio);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::DURACION)) $criteria->add(SubactividadProcedimientoPoaPeer::DURACION, $this->duracion);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::PONDERACION)) $criteria->add(SubactividadProcedimientoPoaPeer::PONDERACION, $this->ponderacion);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::CREATED_AT)) $criteria->add(SubactividadProcedimientoPoaPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(SubactividadProcedimientoPoaPeer::UPDATED_AT)) $criteria->add(SubactividadProcedimientoPoaPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SubactividadProcedimientoPoaPeer::DATABASE_NAME);

		$criteria->add(SubactividadProcedimientoPoaPeer::ID, $this->id);

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

		$copyObj->setActividadProcedimientoId($this->actividad_procedimiento_id);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setResponsable($this->responsable);

		$copyObj->setEntregable($this->entregable);

		$copyObj->setFechaInicio($this->fecha_inicio);

		$copyObj->setDuracion($this->duracion);

		$copyObj->setPonderacion($this->ponderacion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getSubactividadProcedimientoPoaEjecucions() as $relObj) {
				$copyObj->addSubactividadProcedimientoPoaEjecucion($relObj->copy($deepCopy));
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
			self::$peer = new SubactividadProcedimientoPoaPeer();
		}
		return self::$peer;
	}

	
	public function setActividadProcedimientoPoa($v)
	{


		if ($v === null) {
			$this->setActividadProcedimientoId(NULL);
		} else {
			$this->setActividadProcedimientoId($v->getId());
		}


		$this->aActividadProcedimientoPoa = $v;
	}


	
	public function getActividadProcedimientoPoa($con = null)
	{
		if ($this->aActividadProcedimientoPoa === null && ($this->actividad_procedimiento_id !== null)) {
						include_once 'lib/model/om/BaseActividadProcedimientoPoaPeer.php';

			$this->aActividadProcedimientoPoa = ActividadProcedimientoPoaPeer::retrieveByPK($this->actividad_procedimiento_id, $con);

			
		}
		return $this->aActividadProcedimientoPoa;
	}

	
	public function initSubactividadProcedimientoPoaEjecucions()
	{
		if ($this->collSubactividadProcedimientoPoaEjecucions === null) {
			$this->collSubactividadProcedimientoPoaEjecucions = array();
		}
	}

	
	public function getSubactividadProcedimientoPoaEjecucions($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadProcedimientoPoaEjecucionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSubactividadProcedimientoPoaEjecucions === null) {
			if ($this->isNew()) {
			   $this->collSubactividadProcedimientoPoaEjecucions = array();
			} else {

				$criteria->add(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, $this->getId());

				SubactividadProcedimientoPoaEjecucionPeer::addSelectColumns($criteria);
				$this->collSubactividadProcedimientoPoaEjecucions = SubactividadProcedimientoPoaEjecucionPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, $this->getId());

				SubactividadProcedimientoPoaEjecucionPeer::addSelectColumns($criteria);
				if (!isset($this->lastSubactividadProcedimientoPoaEjecucionCriteria) || !$this->lastSubactividadProcedimientoPoaEjecucionCriteria->equals($criteria)) {
					$this->collSubactividadProcedimientoPoaEjecucions = SubactividadProcedimientoPoaEjecucionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSubactividadProcedimientoPoaEjecucionCriteria = $criteria;
		return $this->collSubactividadProcedimientoPoaEjecucions;
	}

	
	public function countSubactividadProcedimientoPoaEjecucions($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadProcedimientoPoaEjecucionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, $this->getId());

		return SubactividadProcedimientoPoaEjecucionPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSubactividadProcedimientoPoaEjecucion(SubactividadProcedimientoPoaEjecucion $l)
	{
		$this->collSubactividadProcedimientoPoaEjecucions[] = $l;
		$l->setSubactividadProcedimientoPoa($this);
	}

} 