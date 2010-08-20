<?php


abstract class BaseProyecto extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $codigo;


	
	protected $proyecto;


	
	protected $descripcion;


	
	protected $magnitud;


	
	protected $programa_interno;


	
	protected $monto;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collMetaProyectos;

	
	protected $lastMetaProyectoCriteria = null;

	
	protected $collActividadProyectos;

	
	protected $lastActividadProyectoCriteria = null;

	
	protected $collActividadPoas;

	
	protected $lastActividadPoaCriteria = null;

	
	protected $collActividads;

	
	protected $lastActividadCriteria = null;

	
	protected $collComponenteProyectos;

	
	protected $lastComponenteProyectoCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCodigo()
	{

		return $this->codigo;
	}

	
	public function getProyecto()
	{

		return $this->proyecto;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getMagnitud()
	{

		return $this->magnitud;
	}

	
	public function getProgramaInterno()
	{

		return $this->programa_interno;
	}

	
	public function getMonto()
	{

		return $this->monto;
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
			$this->modifiedColumns[] = ProyectoPeer::ID;
		}

	} 
	
	public function setCodigo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->codigo !== $v) {
			$this->codigo = $v;
			$this->modifiedColumns[] = ProyectoPeer::CODIGO;
		}

	} 
	
	public function setProyecto($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->proyecto !== $v) {
			$this->proyecto = $v;
			$this->modifiedColumns[] = ProyectoPeer::PROYECTO;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ProyectoPeer::DESCRIPCION;
		}

	} 
	
	public function setMagnitud($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->magnitud !== $v) {
			$this->magnitud = $v;
			$this->modifiedColumns[] = ProyectoPeer::MAGNITUD;
		}

	} 
	
	public function setProgramaInterno($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->programa_interno !== $v) {
			$this->programa_interno = $v;
			$this->modifiedColumns[] = ProyectoPeer::PROGRAMA_INTERNO;
		}

	} 
	
	public function setMonto($v)
	{

		if ($this->monto !== $v) {
			$this->monto = $v;
			$this->modifiedColumns[] = ProyectoPeer::MONTO;
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
			$this->modifiedColumns[] = ProyectoPeer::CREATED_AT;
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
			$this->modifiedColumns[] = ProyectoPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->codigo = $rs->getString($startcol + 1);

			$this->proyecto = $rs->getString($startcol + 2);

			$this->descripcion = $rs->getString($startcol + 3);

			$this->magnitud = $rs->getString($startcol + 4);

			$this->programa_interno = $rs->getString($startcol + 5);

			$this->monto = $rs->getFloat($startcol + 6);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->updated_at = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Proyecto object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProyectoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProyectoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ProyectoPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ProyectoPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProyectoPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ProyectoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProyectoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collMetaProyectos !== null) {
				foreach($this->collMetaProyectos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collActividadProyectos !== null) {
				foreach($this->collActividadProyectos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collActividadPoas !== null) {
				foreach($this->collActividadPoas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collActividads !== null) {
				foreach($this->collActividads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collComponenteProyectos !== null) {
				foreach($this->collComponenteProyectos as $referrerFK) {
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


			if (($retval = ProyectoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collMetaProyectos !== null) {
					foreach($this->collMetaProyectos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collActividadProyectos !== null) {
					foreach($this->collActividadProyectos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collActividadPoas !== null) {
					foreach($this->collActividadPoas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collActividads !== null) {
					foreach($this->collActividads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collComponenteProyectos !== null) {
					foreach($this->collComponenteProyectos as $referrerFK) {
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
		$pos = ProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCodigo();
				break;
			case 2:
				return $this->getProyecto();
				break;
			case 3:
				return $this->getDescripcion();
				break;
			case 4:
				return $this->getMagnitud();
				break;
			case 5:
				return $this->getProgramaInterno();
				break;
			case 6:
				return $this->getMonto();
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
		$keys = ProyectoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCodigo(),
			$keys[2] => $this->getProyecto(),
			$keys[3] => $this->getDescripcion(),
			$keys[4] => $this->getMagnitud(),
			$keys[5] => $this->getProgramaInterno(),
			$keys[6] => $this->getMonto(),
			$keys[7] => $this->getCreatedAt(),
			$keys[8] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCodigo($value);
				break;
			case 2:
				$this->setProyecto($value);
				break;
			case 3:
				$this->setDescripcion($value);
				break;
			case 4:
				$this->setMagnitud($value);
				break;
			case 5:
				$this->setProgramaInterno($value);
				break;
			case 6:
				$this->setMonto($value);
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
		$keys = ProyectoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodigo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProyecto($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescripcion($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMagnitud($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setProgramaInterno($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMonto($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUpdatedAt($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProyectoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProyectoPeer::ID)) $criteria->add(ProyectoPeer::ID, $this->id);
		if ($this->isColumnModified(ProyectoPeer::CODIGO)) $criteria->add(ProyectoPeer::CODIGO, $this->codigo);
		if ($this->isColumnModified(ProyectoPeer::PROYECTO)) $criteria->add(ProyectoPeer::PROYECTO, $this->proyecto);
		if ($this->isColumnModified(ProyectoPeer::DESCRIPCION)) $criteria->add(ProyectoPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ProyectoPeer::MAGNITUD)) $criteria->add(ProyectoPeer::MAGNITUD, $this->magnitud);
		if ($this->isColumnModified(ProyectoPeer::PROGRAMA_INTERNO)) $criteria->add(ProyectoPeer::PROGRAMA_INTERNO, $this->programa_interno);
		if ($this->isColumnModified(ProyectoPeer::MONTO)) $criteria->add(ProyectoPeer::MONTO, $this->monto);
		if ($this->isColumnModified(ProyectoPeer::CREATED_AT)) $criteria->add(ProyectoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ProyectoPeer::UPDATED_AT)) $criteria->add(ProyectoPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProyectoPeer::DATABASE_NAME);

		$criteria->add(ProyectoPeer::ID, $this->id);

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

		$copyObj->setCodigo($this->codigo);

		$copyObj->setProyecto($this->proyecto);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setMagnitud($this->magnitud);

		$copyObj->setProgramaInterno($this->programa_interno);

		$copyObj->setMonto($this->monto);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getMetaProyectos() as $relObj) {
				$copyObj->addMetaProyecto($relObj->copy($deepCopy));
			}

			foreach($this->getActividadProyectos() as $relObj) {
				$copyObj->addActividadProyecto($relObj->copy($deepCopy));
			}

			foreach($this->getActividadPoas() as $relObj) {
				$copyObj->addActividadPoa($relObj->copy($deepCopy));
			}

			foreach($this->getActividads() as $relObj) {
				$copyObj->addActividad($relObj->copy($deepCopy));
			}

			foreach($this->getComponenteProyectos() as $relObj) {
				$copyObj->addComponenteProyecto($relObj->copy($deepCopy));
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
			self::$peer = new ProyectoPeer();
		}
		return self::$peer;
	}

	
	public function initMetaProyectos()
	{
		if ($this->collMetaProyectos === null) {
			$this->collMetaProyectos = array();
		}
	}

	
	public function getMetaProyectos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMetaProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMetaProyectos === null) {
			if ($this->isNew()) {
			   $this->collMetaProyectos = array();
			} else {

				$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

				MetaProyectoPeer::addSelectColumns($criteria);
				$this->collMetaProyectos = MetaProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

				MetaProyectoPeer::addSelectColumns($criteria);
				if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
					$this->collMetaProyectos = MetaProyectoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastMetaProyectoCriteria = $criteria;
		return $this->collMetaProyectos;
	}

	
	public function countMetaProyectos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseMetaProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

		return MetaProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMetaProyecto(MetaProyecto $l)
	{
		$this->collMetaProyectos[] = $l;
		$l->setProyecto($this);
	}


	
	public function getMetaProyectosJoinMetaPd($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMetaProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMetaProyectos === null) {
			if ($this->isNew()) {
				$this->collMetaProyectos = array();
			} else {

				$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		}
		$this->lastMetaProyectoCriteria = $criteria;

		return $this->collMetaProyectos;
	}


	
	public function getMetaProyectosJoinObjetivo($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMetaProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMetaProyectos === null) {
			if ($this->isNew()) {
				$this->collMetaProyectos = array();
			} else {

				$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinObjetivo($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinObjetivo($criteria, $con);
			}
		}
		$this->lastMetaProyectoCriteria = $criteria;

		return $this->collMetaProyectos;
	}


	
	public function getMetaProyectosJoinAnualizacion($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMetaProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMetaProyectos === null) {
			if ($this->isNew()) {
				$this->collMetaProyectos = array();
			} else {

				$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		}
		$this->lastMetaProyectoCriteria = $criteria;

		return $this->collMetaProyectos;
	}

	
	public function initActividadProyectos()
	{
		if ($this->collActividadProyectos === null) {
			$this->collActividadProyectos = array();
		}
	}

	
	public function getActividadProyectos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadProyectos === null) {
			if ($this->isNew()) {
			   $this->collActividadProyectos = array();
			} else {

				$criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->getId());

				ActividadProyectoPeer::addSelectColumns($criteria);
				$this->collActividadProyectos = ActividadProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->getId());

				ActividadProyectoPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadProyectoCriteria) || !$this->lastActividadProyectoCriteria->equals($criteria)) {
					$this->collActividadProyectos = ActividadProyectoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadProyectoCriteria = $criteria;
		return $this->collActividadProyectos;
	}

	
	public function countActividadProyectos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->getId());

		return ActividadProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividadProyecto(ActividadProyecto $l)
	{
		$this->collActividadProyectos[] = $l;
		$l->setProyecto($this);
	}


	
	public function getActividadProyectosJoinMetaPd($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadProyectos === null) {
			if ($this->isNew()) {
				$this->collActividadProyectos = array();
			} else {

				$criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->getId());

				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadProyectoCriteria) || !$this->lastActividadProyectoCriteria->equals($criteria)) {
				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		}
		$this->lastActividadProyectoCriteria = $criteria;

		return $this->collActividadProyectos;
	}


	
	public function getActividadProyectosJoinMetaProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadProyectos === null) {
			if ($this->isNew()) {
				$this->collActividadProyectos = array();
			} else {

				$criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->getId());

				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadProyectoPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadProyectoCriteria) || !$this->lastActividadProyectoCriteria->equals($criteria)) {
				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		}
		$this->lastActividadProyectoCriteria = $criteria;

		return $this->collActividadProyectos;
	}

	
	public function initActividadPoas()
	{
		if ($this->collActividadPoas === null) {
			$this->collActividadPoas = array();
		}
	}

	
	public function getActividadPoas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadPoas === null) {
			if ($this->isNew()) {
			   $this->collActividadPoas = array();
			} else {

				$criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->getId());

				ActividadPoaPeer::addSelectColumns($criteria);
				$this->collActividadPoas = ActividadPoaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->getId());

				ActividadPoaPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
					$this->collActividadPoas = ActividadPoaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadPoaCriteria = $criteria;
		return $this->collActividadPoas;
	}

	
	public function countActividadPoas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->getId());

		return ActividadPoaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividadPoa(ActividadPoa $l)
	{
		$this->collActividadPoas[] = $l;
		$l->setProyecto($this);
	}


	
	public function getActividadPoasJoinMetaPoa($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadPoas === null) {
			if ($this->isNew()) {
				$this->collActividadPoas = array();
			} else {

				$criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinMetaPoa($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinMetaPoa($criteria, $con);
			}
		}
		$this->lastActividadPoaCriteria = $criteria;

		return $this->collActividadPoas;
	}


	
	public function getActividadPoasJoinProceso($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPoaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividadPoas === null) {
			if ($this->isNew()) {
				$this->collActividadPoas = array();
			} else {

				$criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->getId());

				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProceso($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPoaPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadPoaCriteria) || !$this->lastActividadPoaCriteria->equals($criteria)) {
				$this->collActividadPoas = ActividadPoaPeer::doSelectJoinProceso($criteria, $con);
			}
		}
		$this->lastActividadPoaCriteria = $criteria;

		return $this->collActividadPoas;
	}

	
	public function initActividads()
	{
		if ($this->collActividads === null) {
			$this->collActividads = array();
		}
	}

	
	public function getActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
			   $this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				$this->collActividads = ActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
					$this->collActividads = ActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadCriteria = $criteria;
		return $this->collActividads;
	}

	
	public function countActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

		return ActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividad(Actividad $l)
	{
		$this->collActividads[] = $l;
		$l->setProyecto($this);
	}


	
	public function getActividadsJoinTipoGasto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinTipoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinTipoGasto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinComponenteSector($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinComponenteSector($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinComponenteSector($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinConceptoGasto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinConceptoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinConceptoGasto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinMetaProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinDependencia($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinDependencia($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinDependencia($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinComponente($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinContrato($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinContrato($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinContrato($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}

	
	public function initComponenteProyectos()
	{
		if ($this->collComponenteProyectos === null) {
			$this->collComponenteProyectos = array();
		}
	}

	
	public function getComponenteProyectos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponenteProyectos === null) {
			if ($this->isNew()) {
			   $this->collComponenteProyectos = array();
			} else {

				$criteria->add(ComponenteProyectoPeer::PROYECTO_ID, $this->getId());

				ComponenteProyectoPeer::addSelectColumns($criteria);
				$this->collComponenteProyectos = ComponenteProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ComponenteProyectoPeer::PROYECTO_ID, $this->getId());

				ComponenteProyectoPeer::addSelectColumns($criteria);
				if (!isset($this->lastComponenteProyectoCriteria) || !$this->lastComponenteProyectoCriteria->equals($criteria)) {
					$this->collComponenteProyectos = ComponenteProyectoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastComponenteProyectoCriteria = $criteria;
		return $this->collComponenteProyectos;
	}

	
	public function countComponenteProyectos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ComponenteProyectoPeer::PROYECTO_ID, $this->getId());

		return ComponenteProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addComponenteProyecto(ComponenteProyecto $l)
	{
		$this->collComponenteProyectos[] = $l;
		$l->setProyecto($this);
	}


	
	public function getComponenteProyectosJoinComponente($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponenteProyectos === null) {
			if ($this->isNew()) {
				$this->collComponenteProyectos = array();
			} else {

				$criteria->add(ComponenteProyectoPeer::PROYECTO_ID, $this->getId());

				$this->collComponenteProyectos = ComponenteProyectoPeer::doSelectJoinComponente($criteria, $con);
			}
		} else {
									
			$criteria->add(ComponenteProyectoPeer::PROYECTO_ID, $this->getId());

			if (!isset($this->lastComponenteProyectoCriteria) || !$this->lastComponenteProyectoCriteria->equals($criteria)) {
				$this->collComponenteProyectos = ComponenteProyectoPeer::doSelectJoinComponente($criteria, $con);
			}
		}
		$this->lastComponenteProyectoCriteria = $criteria;

		return $this->collComponenteProyectos;
	}

} 