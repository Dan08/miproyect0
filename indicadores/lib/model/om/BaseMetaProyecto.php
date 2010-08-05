<?php


abstract class BaseMetaProyecto extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $meta_pd_id;


	
	protected $proyecto_id;


	
	protected $codigo;


	
	protected $meta;


	
	protected $tipo;


	
	protected $objetivo_id;


	
	protected $descripcion;


	
	protected $anualizacion_id;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aMetaPd;

	
	protected $aProyecto;

	
	protected $aObjetivo;

	
	protected $aAnualizacion;

	
	protected $collActividadProyectos;

	
	protected $lastActividadProyectoCriteria = null;

	
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

	
	public function getProyectoId()
	{

		return $this->proyecto_id;
	}

	
	public function getCodigo()
	{

		return $this->codigo;
	}

	
	public function getMeta()
	{

		return $this->meta;
	}

	
	public function getTipo()
	{

		return $this->tipo;
	}

	
	public function getObjetivoId()
	{

		return $this->objetivo_id;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getAnualizacionId()
	{

		return $this->anualizacion_id;
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
			$this->modifiedColumns[] = MetaProyectoPeer::ID;
		}

	} 
	
	public function setMetaPdId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->meta_pd_id !== $v) {
			$this->meta_pd_id = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::META_PD_ID;
		}

		if ($this->aMetaPd !== null && $this->aMetaPd->getId() !== $v) {
			$this->aMetaPd = null;
		}

	} 
	
	public function setProyectoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->proyecto_id !== $v) {
			$this->proyecto_id = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::PROYECTO_ID;
		}

		if ($this->aProyecto !== null && $this->aProyecto->getId() !== $v) {
			$this->aProyecto = null;
		}

	} 
	
	public function setCodigo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->codigo !== $v) {
			$this->codigo = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::CODIGO;
		}

	} 
	
	public function setMeta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->meta !== $v) {
			$this->meta = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::META;
		}

	} 
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v) {
			$this->tipo = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::TIPO;
		}

	} 
	
	public function setObjetivoId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->objetivo_id !== $v) {
			$this->objetivo_id = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::OBJETIVO_ID;
		}

		if ($this->aObjetivo !== null && $this->aObjetivo->getId() !== $v) {
			$this->aObjetivo = null;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::DESCRIPCION;
		}

	} 
	
	public function setAnualizacionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->anualizacion_id !== $v) {
			$this->anualizacion_id = $v;
			$this->modifiedColumns[] = MetaProyectoPeer::ANUALIZACION_ID;
		}

		if ($this->aAnualizacion !== null && $this->aAnualizacion->getId() !== $v) {
			$this->aAnualizacion = null;
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
			$this->modifiedColumns[] = MetaProyectoPeer::CREATED_AT;
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
			$this->modifiedColumns[] = MetaProyectoPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->meta_pd_id = $rs->getInt($startcol + 1);

			$this->proyecto_id = $rs->getInt($startcol + 2);

			$this->codigo = $rs->getString($startcol + 3);

			$this->meta = $rs->getString($startcol + 4);

			$this->tipo = $rs->getString($startcol + 5);

			$this->objetivo_id = $rs->getInt($startcol + 6);

			$this->descripcion = $rs->getString($startcol + 7);

			$this->anualizacion_id = $rs->getInt($startcol + 8);

			$this->created_at = $rs->getTimestamp($startcol + 9, null);

			$this->updated_at = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating MetaProyecto object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MetaProyectoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MetaProyectoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(MetaProyectoPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(MetaProyectoPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MetaProyectoPeer::DATABASE_NAME);
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

			if ($this->aProyecto !== null) {
				if ($this->aProyecto->isModified()) {
					$affectedRows += $this->aProyecto->save($con);
				}
				$this->setProyecto($this->aProyecto);
			}

			if ($this->aObjetivo !== null) {
				if ($this->aObjetivo->isModified()) {
					$affectedRows += $this->aObjetivo->save($con);
				}
				$this->setObjetivo($this->aObjetivo);
			}

			if ($this->aAnualizacion !== null) {
				if ($this->aAnualizacion->isModified()) {
					$affectedRows += $this->aAnualizacion->save($con);
				}
				$this->setAnualizacion($this->aAnualizacion);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = MetaProyectoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MetaProyectoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collActividadProyectos !== null) {
				foreach($this->collActividadProyectos as $referrerFK) {
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


												
			if ($this->aMetaPd !== null) {
				if (!$this->aMetaPd->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aMetaPd->getValidationFailures());
				}
			}

			if ($this->aProyecto !== null) {
				if (!$this->aProyecto->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProyecto->getValidationFailures());
				}
			}

			if ($this->aObjetivo !== null) {
				if (!$this->aObjetivo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aObjetivo->getValidationFailures());
				}
			}

			if ($this->aAnualizacion !== null) {
				if (!$this->aAnualizacion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAnualizacion->getValidationFailures());
				}
			}


			if (($retval = MetaProyectoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collActividadProyectos !== null) {
					foreach($this->collActividadProyectos as $referrerFK) {
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
		$pos = MetaProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getProyectoId();
				break;
			case 3:
				return $this->getCodigo();
				break;
			case 4:
				return $this->getMeta();
				break;
			case 5:
				return $this->getTipo();
				break;
			case 6:
				return $this->getObjetivoId();
				break;
			case 7:
				return $this->getDescripcion();
				break;
			case 8:
				return $this->getAnualizacionId();
				break;
			case 9:
				return $this->getCreatedAt();
				break;
			case 10:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MetaProyectoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMetaPdId(),
			$keys[2] => $this->getProyectoId(),
			$keys[3] => $this->getCodigo(),
			$keys[4] => $this->getMeta(),
			$keys[5] => $this->getTipo(),
			$keys[6] => $this->getObjetivoId(),
			$keys[7] => $this->getDescripcion(),
			$keys[8] => $this->getAnualizacionId(),
			$keys[9] => $this->getCreatedAt(),
			$keys[10] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MetaProyectoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setProyectoId($value);
				break;
			case 3:
				$this->setCodigo($value);
				break;
			case 4:
				$this->setMeta($value);
				break;
			case 5:
				$this->setTipo($value);
				break;
			case 6:
				$this->setObjetivoId($value);
				break;
			case 7:
				$this->setDescripcion($value);
				break;
			case 8:
				$this->setAnualizacionId($value);
				break;
			case 9:
				$this->setCreatedAt($value);
				break;
			case 10:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MetaProyectoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMetaPdId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProyectoId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCodigo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMeta($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTipo($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setObjetivoId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDescripcion($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAnualizacionId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCreatedAt($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setUpdatedAt($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MetaProyectoPeer::DATABASE_NAME);

		if ($this->isColumnModified(MetaProyectoPeer::ID)) $criteria->add(MetaProyectoPeer::ID, $this->id);
		if ($this->isColumnModified(MetaProyectoPeer::META_PD_ID)) $criteria->add(MetaProyectoPeer::META_PD_ID, $this->meta_pd_id);
		if ($this->isColumnModified(MetaProyectoPeer::PROYECTO_ID)) $criteria->add(MetaProyectoPeer::PROYECTO_ID, $this->proyecto_id);
		if ($this->isColumnModified(MetaProyectoPeer::CODIGO)) $criteria->add(MetaProyectoPeer::CODIGO, $this->codigo);
		if ($this->isColumnModified(MetaProyectoPeer::META)) $criteria->add(MetaProyectoPeer::META, $this->meta);
		if ($this->isColumnModified(MetaProyectoPeer::TIPO)) $criteria->add(MetaProyectoPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(MetaProyectoPeer::OBJETIVO_ID)) $criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->objetivo_id);
		if ($this->isColumnModified(MetaProyectoPeer::DESCRIPCION)) $criteria->add(MetaProyectoPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(MetaProyectoPeer::ANUALIZACION_ID)) $criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->anualizacion_id);
		if ($this->isColumnModified(MetaProyectoPeer::CREATED_AT)) $criteria->add(MetaProyectoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(MetaProyectoPeer::UPDATED_AT)) $criteria->add(MetaProyectoPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MetaProyectoPeer::DATABASE_NAME);

		$criteria->add(MetaProyectoPeer::ID, $this->id);

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

		$copyObj->setProyectoId($this->proyecto_id);

		$copyObj->setCodigo($this->codigo);

		$copyObj->setMeta($this->meta);

		$copyObj->setTipo($this->tipo);

		$copyObj->setObjetivoId($this->objetivo_id);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setAnualizacionId($this->anualizacion_id);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getActividadProyectos() as $relObj) {
				$copyObj->addActividadProyecto($relObj->copy($deepCopy));
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
			self::$peer = new MetaProyectoPeer();
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

	
	public function setObjetivo($v)
	{


		if ($v === null) {
			$this->setObjetivoId(NULL);
		} else {
			$this->setObjetivoId($v->getId());
		}


		$this->aObjetivo = $v;
	}


	
	public function getObjetivo($con = null)
	{
		if ($this->aObjetivo === null && ($this->objetivo_id !== null)) {
						include_once 'lib/model/om/BaseObjetivoPeer.php';

			$this->aObjetivo = ObjetivoPeer::retrieveByPK($this->objetivo_id, $con);

			
		}
		return $this->aObjetivo;
	}

	
	public function setAnualizacion($v)
	{


		if ($v === null) {
			$this->setAnualizacionId(NULL);
		} else {
			$this->setAnualizacionId($v->getId());
		}


		$this->aAnualizacion = $v;
	}


	
	public function getAnualizacion($con = null)
	{
		if ($this->aAnualizacion === null && ($this->anualizacion_id !== null)) {
						include_once 'lib/model/om/BaseAnualizacionPeer.php';

			$this->aAnualizacion = AnualizacionPeer::retrieveByPK($this->anualizacion_id, $con);

			
		}
		return $this->aAnualizacion;
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

				$criteria->add(ActividadProyectoPeer::META_PROYECTO_ID, $this->getId());

				ActividadProyectoPeer::addSelectColumns($criteria);
				$this->collActividadProyectos = ActividadProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadProyectoPeer::META_PROYECTO_ID, $this->getId());

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

		$criteria->add(ActividadProyectoPeer::META_PROYECTO_ID, $this->getId());

		return ActividadProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividadProyecto(ActividadProyecto $l)
	{
		$this->collActividadProyectos[] = $l;
		$l->setMetaProyecto($this);
	}


	
	public function getActividadProyectosJoinProyecto($criteria = null, $con = null)
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

				$criteria->add(ActividadProyectoPeer::META_PROYECTO_ID, $this->getId());

				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadProyectoPeer::META_PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadProyectoCriteria) || !$this->lastActividadProyectoCriteria->equals($criteria)) {
				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinProyecto($criteria, $con);
			}
		}
		$this->lastActividadProyectoCriteria = $criteria;

		return $this->collActividadProyectos;
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

				$criteria->add(ActividadProyectoPeer::META_PROYECTO_ID, $this->getId());

				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadProyectoPeer::META_PROYECTO_ID, $this->getId());

			if (!isset($this->lastActividadProyectoCriteria) || !$this->lastActividadProyectoCriteria->equals($criteria)) {
				$this->collActividadProyectos = ActividadProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		}
		$this->lastActividadProyectoCriteria = $criteria;

		return $this->collActividadProyectos;
	}

} 