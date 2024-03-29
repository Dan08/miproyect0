<?php


abstract class BaseSubactividadProyecto extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $actividad_proyecto_id;


	
	protected $descripcion;


	
	protected $entregable;


	
	protected $fecha_inicio;


	
	protected $duracion;


	
	protected $ponderacion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aActividadProyecto;

	
	protected $collSubactividadEjecucions;

	
	protected $lastSubactividadEjecucionCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getActividadProyectoId()
	{

		return $this->actividad_proyecto_id;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
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
			$this->modifiedColumns[] = SubactividadProyectoPeer::ID;
		}

	} 
	
	public function setActividadProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->actividad_proyecto_id !== $v) {
			$this->actividad_proyecto_id = $v;
			$this->modifiedColumns[] = SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID;
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
			$this->modifiedColumns[] = SubactividadProyectoPeer::DESCRIPCION;
		}

	} 
	
	public function setEntregable($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->entregable !== $v) {
			$this->entregable = $v;
			$this->modifiedColumns[] = SubactividadProyectoPeer::ENTREGABLE;
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
			$this->modifiedColumns[] = SubactividadProyectoPeer::FECHA_INICIO;
		}

	} 
	
	public function setDuracion($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->duracion !== $v) {
			$this->duracion = $v;
			$this->modifiedColumns[] = SubactividadProyectoPeer::DURACION;
		}

	} 
	
	public function setPonderacion($v)
	{

		if ($this->ponderacion !== $v) {
			$this->ponderacion = $v;
			$this->modifiedColumns[] = SubactividadProyectoPeer::PONDERACION;
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
			$this->modifiedColumns[] = SubactividadProyectoPeer::CREATED_AT;
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
			$this->modifiedColumns[] = SubactividadProyectoPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->actividad_proyecto_id = $rs->getInt($startcol + 1);

			$this->descripcion = $rs->getString($startcol + 2);

			$this->entregable = $rs->getString($startcol + 3);

			$this->fecha_inicio = $rs->getDate($startcol + 4, null);

			$this->duracion = $rs->getInt($startcol + 5);

			$this->ponderacion = $rs->getFloat($startcol + 6);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->updated_at = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SubactividadProyecto object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadProyectoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SubactividadProyectoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(SubactividadProyectoPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(SubactividadProyectoPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SubactividadProyectoPeer::DATABASE_NAME);
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


												
			if ($this->aActividadProyecto !== null) {
				if ($this->aActividadProyecto->isModified()) {
					$affectedRows += $this->aActividadProyecto->save($con);
				}
				$this->setActividadProyecto($this->aActividadProyecto);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SubactividadProyectoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SubactividadProyectoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collSubactividadEjecucions !== null) {
				foreach($this->collSubactividadEjecucions as $referrerFK) {
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


												
			if ($this->aActividadProyecto !== null) {
				if (!$this->aActividadProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aActividadProyecto->getValidationFailures());
				}
			}


			if (($retval = SubactividadProyectoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSubactividadEjecucions !== null) {
					foreach($this->collSubactividadEjecucions as $referrerFK) {
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
		$pos = SubactividadProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getActividadProyectoId();
				break;
			case 2:
				return $this->getDescripcion();
				break;
			case 3:
				return $this->getEntregable();
				break;
			case 4:
				return $this->getFechaInicio();
				break;
			case 5:
				return $this->getDuracion();
				break;
			case 6:
				return $this->getPonderacion();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			case 8:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SubactividadProyectoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getActividadProyectoId(),
			$keys[2] => $this->getDescripcion(),
			$keys[3] => $this->getEntregable(),
			$keys[4] => $this->getFechaInicio(),
			$keys[5] => $this->getDuracion(),
			$keys[6] => $this->getPonderacion(),
			$keys[7] => $this->getCreatedAt(),
			$keys[8] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SubactividadProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setActividadProyectoId($value);
				break;
			case 2:
				$this->setDescripcion($value);
				break;
			case 3:
				$this->setEntregable($value);
				break;
			case 4:
				$this->setFechaInicio($value);
				break;
			case 5:
				$this->setDuracion($value);
				break;
			case 6:
				$this->setPonderacion($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
			case 8:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SubactividadProyectoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setActividadProyectoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEntregable($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFechaInicio($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDuracion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPonderacion($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUpdatedAt($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SubactividadProyectoPeer::DATABASE_NAME);

		if ($this->isColumnModified(SubactividadProyectoPeer::ID)) $criteria->add(SubactividadProyectoPeer::ID, $this->id);
		if ($this->isColumnModified(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID)) $criteria->add(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, $this->actividad_proyecto_id);
		if ($this->isColumnModified(SubactividadProyectoPeer::DESCRIPCION)) $criteria->add(SubactividadProyectoPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(SubactividadProyectoPeer::ENTREGABLE)) $criteria->add(SubactividadProyectoPeer::ENTREGABLE, $this->entregable);
		if ($this->isColumnModified(SubactividadProyectoPeer::FECHA_INICIO)) $criteria->add(SubactividadProyectoPeer::FECHA_INICIO, $this->fecha_inicio);
		if ($this->isColumnModified(SubactividadProyectoPeer::DURACION)) $criteria->add(SubactividadProyectoPeer::DURACION, $this->duracion);
		if ($this->isColumnModified(SubactividadProyectoPeer::PONDERACION)) $criteria->add(SubactividadProyectoPeer::PONDERACION, $this->ponderacion);
		if ($this->isColumnModified(SubactividadProyectoPeer::CREATED_AT)) $criteria->add(SubactividadProyectoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(SubactividadProyectoPeer::UPDATED_AT)) $criteria->add(SubactividadProyectoPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SubactividadProyectoPeer::DATABASE_NAME);

		$criteria->add(SubactividadProyectoPeer::ID, $this->id);

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

		$copyObj->setActividadProyectoId($this->actividad_proyecto_id);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setEntregable($this->entregable);

		$copyObj->setFechaInicio($this->fecha_inicio);

		$copyObj->setDuracion($this->duracion);

		$copyObj->setPonderacion($this->ponderacion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getSubactividadEjecucions() as $relObj) {
				$copyObj->addSubactividadEjecucion($relObj->copy($deepCopy));
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
			self::$peer = new SubactividadProyectoPeer();
		}
		return self::$peer;
	}

	
	public function setActividadProyecto($v)
	{


		if ($v === null) {
			$this->setActividadProyectoId(NULL);
		} else {
			$this->setActividadProyectoId($v->getId());
		}


		$this->aActividadProyecto = $v;
	}


	
	public function getActividadProyecto($con = null)
	{
		if ($this->aActividadProyecto === null && ($this->actividad_proyecto_id !== null)) {
						include_once 'lib/model/om/BaseActividadProyectoPeer.php';

			$this->aActividadProyecto = ActividadProyectoPeer::retrieveByPK($this->actividad_proyecto_id, $con);

			
		}
		return $this->aActividadProyecto;
	}

	
	public function initSubactividadEjecucions()
	{
		if ($this->collSubactividadEjecucions === null) {
			$this->collSubactividadEjecucions = array();
		}
	}

	
	public function getSubactividadEjecucions($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadEjecucionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSubactividadEjecucions === null) {
			if ($this->isNew()) {
			   $this->collSubactividadEjecucions = array();
			} else {

				$criteria->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());

				SubactividadEjecucionPeer::addSelectColumns($criteria);
				$this->collSubactividadEjecucions = SubactividadEjecucionPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());

				SubactividadEjecucionPeer::addSelectColumns($criteria);
				if (!isset($this->lastSubactividadEjecucionCriteria) || !$this->lastSubactividadEjecucionCriteria->equals($criteria)) {
					$this->collSubactividadEjecucions = SubactividadEjecucionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSubactividadEjecucionCriteria = $criteria;
		return $this->collSubactividadEjecucions;
	}

	
	public function countSubactividadEjecucions($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadEjecucionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());

		return SubactividadEjecucionPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSubactividadEjecucion(SubactividadEjecucion $l)
	{
		$this->collSubactividadEjecucions[] = $l;
		$l->setSubactividadProyecto($this);
	}

} 