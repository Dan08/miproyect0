<?php


abstract class BaseActividadProyecto extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $proyecto_id;


	
	protected $meta_pd_id;


	
	protected $actividad;


	
	protected $descripcion;


	
	protected $ponderacion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aProyecto;

	
	protected $aMetaPd;

	
	protected $collSubactividadProyectos;

	
	protected $lastSubactividadProyectoCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getProyectoId()
	{

		return $this->proyecto_id;
	}

	
	public function getMetaPdId()
	{

		return $this->meta_pd_id;
	}

	
	public function getActividad()
	{

		return $this->actividad;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
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
			$this->modifiedColumns[] = ActividadProyectoPeer::ID;
		}

	} 
	
	public function setProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_id !== $v) {
			$this->proyecto_id = $v;
			$this->modifiedColumns[] = ActividadProyectoPeer::PROYECTO_ID;
		}

		if ($this->aProyecto !== null && $this->aProyecto->getId() !== $v) {
			$this->aProyecto = null;
		}

	} 
	
	public function setMetaPdId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->meta_pd_id !== $v) {
			$this->meta_pd_id = $v;
			$this->modifiedColumns[] = ActividadProyectoPeer::META_PD_ID;
		}

		if ($this->aMetaPd !== null && $this->aMetaPd->getId() !== $v) {
			$this->aMetaPd = null;
		}

	} 
	
	public function setActividad($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->actividad !== $v) {
			$this->actividad = $v;
			$this->modifiedColumns[] = ActividadProyectoPeer::ACTIVIDAD;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ActividadProyectoPeer::DESCRIPCION;
		}

	} 
	
	public function setPonderacion($v)
	{

		if ($this->ponderacion !== $v) {
			$this->ponderacion = $v;
			$this->modifiedColumns[] = ActividadProyectoPeer::PONDERACION;
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
			$this->modifiedColumns[] = ActividadProyectoPeer::CREATED_AT;
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
			$this->modifiedColumns[] = ActividadProyectoPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->proyecto_id = $rs->getInt($startcol + 1);

			$this->meta_pd_id = $rs->getInt($startcol + 2);

			$this->actividad = $rs->getString($startcol + 3);

			$this->descripcion = $rs->getString($startcol + 4);

			$this->ponderacion = $rs->getFloat($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->updated_at = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ActividadProyecto object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadProyectoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ActividadProyectoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ActividadProyectoPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ActividadProyectoPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ActividadProyectoPeer::DATABASE_NAME);
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


												
			if ($this->aProyecto !== null) {
				if ($this->aProyecto->isModified()) {
					$affectedRows += $this->aProyecto->save($con);
				}
				$this->setProyecto($this->aProyecto);
			}

			if ($this->aMetaPd !== null) {
				if ($this->aMetaPd->isModified()) {
					$affectedRows += $this->aMetaPd->save($con);
				}
				$this->setMetaPd($this->aMetaPd);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ActividadProyectoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ActividadProyectoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collSubactividadProyectos !== null) {
				foreach($this->collSubactividadProyectos as $referrerFK) {
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


												
			if ($this->aProyecto !== null) {
				if (!$this->aProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyecto->getValidationFailures());
				}
			}

			if ($this->aMetaPd !== null) {
				if (!$this->aMetaPd->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMetaPd->getValidationFailures());
				}
			}


			if (($retval = ActividadProyectoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSubactividadProyectos !== null) {
					foreach($this->collSubactividadProyectos as $referrerFK) {
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
		$pos = ActividadProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getProyectoId();
				break;
			case 2:
				return $this->getMetaPdId();
				break;
			case 3:
				return $this->getActividad();
				break;
			case 4:
				return $this->getDescripcion();
				break;
			case 5:
				return $this->getPonderacion();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			case 7:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadProyectoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getProyectoId(),
			$keys[2] => $this->getMetaPdId(),
			$keys[3] => $this->getActividad(),
			$keys[4] => $this->getDescripcion(),
			$keys[5] => $this->getPonderacion(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ActividadProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setProyectoId($value);
				break;
			case 2:
				$this->setMetaPdId($value);
				break;
			case 3:
				$this->setActividad($value);
				break;
			case 4:
				$this->setDescripcion($value);
				break;
			case 5:
				$this->setPonderacion($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
			case 7:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ActividadProyectoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProyectoId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMetaPdId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setActividad($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescripcion($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPonderacion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ActividadProyectoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ActividadProyectoPeer::ID)) $criteria->add(ActividadProyectoPeer::ID, $this->id);
		if ($this->isColumnModified(ActividadProyectoPeer::PROYECTO_ID)) $criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->proyecto_id);
		if ($this->isColumnModified(ActividadProyectoPeer::META_PD_ID)) $criteria->add(ActividadProyectoPeer::META_PD_ID, $this->meta_pd_id);
		if ($this->isColumnModified(ActividadProyectoPeer::ACTIVIDAD)) $criteria->add(ActividadProyectoPeer::ACTIVIDAD, $this->actividad);
		if ($this->isColumnModified(ActividadProyectoPeer::DESCRIPCION)) $criteria->add(ActividadProyectoPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ActividadProyectoPeer::PONDERACION)) $criteria->add(ActividadProyectoPeer::PONDERACION, $this->ponderacion);
		if ($this->isColumnModified(ActividadProyectoPeer::CREATED_AT)) $criteria->add(ActividadProyectoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ActividadProyectoPeer::UPDATED_AT)) $criteria->add(ActividadProyectoPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ActividadProyectoPeer::DATABASE_NAME);

		$criteria->add(ActividadProyectoPeer::ID, $this->id);

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

		$copyObj->setProyectoId($this->proyecto_id);

		$copyObj->setMetaPdId($this->meta_pd_id);

		$copyObj->setActividad($this->actividad);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setPonderacion($this->ponderacion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getSubactividadProyectos() as $relObj) {
				$copyObj->addSubactividadProyecto($relObj->copy($deepCopy));
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
			self::$peer = new ActividadProyectoPeer();
		}
		return self::$peer;
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

	
	public function initSubactividadProyectos()
	{
		if ($this->collSubactividadProyectos === null) {
			$this->collSubactividadProyectos = array();
		}
	}

	
	public function getSubactividadProyectos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSubactividadProyectos === null) {
			if ($this->isNew()) {
			   $this->collSubactividadProyectos = array();
			} else {

				$criteria->add(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, $this->getId());

				SubactividadProyectoPeer::addSelectColumns($criteria);
				$this->collSubactividadProyectos = SubactividadProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, $this->getId());

				SubactividadProyectoPeer::addSelectColumns($criteria);
				if (!isset($this->lastSubactividadProyectoCriteria) || !$this->lastSubactividadProyectoCriteria->equals($criteria)) {
					$this->collSubactividadProyectos = SubactividadProyectoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSubactividadProyectoCriteria = $criteria;
		return $this->collSubactividadProyectos;
	}

	
	public function countSubactividadProyectos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSubactividadProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, $this->getId());

		return SubactividadProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSubactividadProyecto(SubactividadProyecto $l)
	{
		$this->collSubactividadProyectos[] = $l;
		$l->setActividadProyecto($this);
	}

} 