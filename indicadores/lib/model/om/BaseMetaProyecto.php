<?php


abstract class BaseMetaProyecto extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $meta_pd_id;


	
	protected $codigo;


	
	protected $meta;


	
	protected $descripcion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aMetaPd;

	
	protected $collProyectos;

	
	protected $lastProyectoCriteria = null;

	
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

	
	public function getCodigo()
	{

		return $this->codigo;
	}

	
	public function getMeta()
	{

		return $this->meta;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
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

			$this->codigo = $rs->getString($startcol + 2);

			$this->meta = $rs->getString($startcol + 3);

			$this->descripcion = $rs->getString($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
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

			if ($this->collProyectos !== null) {
				foreach($this->collProyectos as $referrerFK) {
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


			if (($retval = MetaProyectoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collProyectos !== null) {
					foreach($this->collProyectos as $referrerFK) {
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
				return $this->getCodigo();
				break;
			case 3:
				return $this->getMeta();
				break;
			case 4:
				return $this->getDescripcion();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
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
			$keys[2] => $this->getCodigo(),
			$keys[3] => $this->getMeta(),
			$keys[4] => $this->getDescripcion(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
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
				$this->setCodigo($value);
				break;
			case 3:
				$this->setMeta($value);
				break;
			case 4:
				$this->setDescripcion($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MetaProyectoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMetaPdId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCodigo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMeta($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescripcion($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MetaProyectoPeer::DATABASE_NAME);

		if ($this->isColumnModified(MetaProyectoPeer::ID)) $criteria->add(MetaProyectoPeer::ID, $this->id);
		if ($this->isColumnModified(MetaProyectoPeer::META_PD_ID)) $criteria->add(MetaProyectoPeer::META_PD_ID, $this->meta_pd_id);
		if ($this->isColumnModified(MetaProyectoPeer::CODIGO)) $criteria->add(MetaProyectoPeer::CODIGO, $this->codigo);
		if ($this->isColumnModified(MetaProyectoPeer::META)) $criteria->add(MetaProyectoPeer::META, $this->meta);
		if ($this->isColumnModified(MetaProyectoPeer::DESCRIPCION)) $criteria->add(MetaProyectoPeer::DESCRIPCION, $this->descripcion);
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

		$copyObj->setCodigo($this->codigo);

		$copyObj->setMeta($this->meta);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getProyectos() as $relObj) {
				$copyObj->addProyecto($relObj->copy($deepCopy));
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

	
	public function initProyectos()
	{
		if ($this->collProyectos === null) {
			$this->collProyectos = array();
		}
	}

	
	public function getProyectos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProyectos === null) {
			if ($this->isNew()) {
			   $this->collProyectos = array();
			} else {

				$criteria->add(ProyectoPeer::META_PROYECTO_ID, $this->getId());

				ProyectoPeer::addSelectColumns($criteria);
				$this->collProyectos = ProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProyectoPeer::META_PROYECTO_ID, $this->getId());

				ProyectoPeer::addSelectColumns($criteria);
				if (!isset($this->lastProyectoCriteria) || !$this->lastProyectoCriteria->equals($criteria)) {
					$this->collProyectos = ProyectoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProyectoCriteria = $criteria;
		return $this->collProyectos;
	}

	
	public function countProyectos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ProyectoPeer::META_PROYECTO_ID, $this->getId());

		return ProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProyecto(Proyecto $l)
	{
		$this->collProyectos[] = $l;
		$l->setMetaProyecto($this);
	}


	
	public function getProyectosJoinAnualizacion($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProyectos === null) {
			if ($this->isNew()) {
				$this->collProyectos = array();
			} else {

				$criteria->add(ProyectoPeer::META_PROYECTO_ID, $this->getId());

				$this->collProyectos = ProyectoPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		} else {
									
			$criteria->add(ProyectoPeer::META_PROYECTO_ID, $this->getId());

			if (!isset($this->lastProyectoCriteria) || !$this->lastProyectoCriteria->equals($criteria)) {
				$this->collProyectos = ProyectoPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		}
		$this->lastProyectoCriteria = $criteria;

		return $this->collProyectos;
	}

} 