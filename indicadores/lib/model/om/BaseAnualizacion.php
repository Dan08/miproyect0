<?php


abstract class BaseAnualizacion extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $meta_pd_id;


	
	protected $anyo1;


	
	protected $anyo2;


	
	protected $anyo3;


	
	protected $anyo4;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aMetaPd;

	
	protected $collIndicadorMetas;

	
	protected $lastIndicadorMetaCriteria = null;

	
	protected $collMetaProyectos;

	
	protected $lastMetaProyectoCriteria = null;

	
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

	
	public function getAnyo1()
	{

		return $this->anyo1;
	}

	
	public function getAnyo2()
	{

		return $this->anyo2;
	}

	
	public function getAnyo3()
	{

		return $this->anyo3;
	}

	
	public function getAnyo4()
	{

		return $this->anyo4;
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
			$this->modifiedColumns[] = AnualizacionPeer::ID;
		}

	} 
	
	public function setMetaPdId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->meta_pd_id !== $v) {
			$this->meta_pd_id = $v;
			$this->modifiedColumns[] = AnualizacionPeer::META_PD_ID;
		}

		if ($this->aMetaPd !== null && $this->aMetaPd->getId() !== $v) {
			$this->aMetaPd = null;
		}

	} 
	
	public function setAnyo1($v)
	{

		if ($this->anyo1 !== $v) {
			$this->anyo1 = $v;
			$this->modifiedColumns[] = AnualizacionPeer::ANYO1;
		}

	} 
	
	public function setAnyo2($v)
	{

		if ($this->anyo2 !== $v) {
			$this->anyo2 = $v;
			$this->modifiedColumns[] = AnualizacionPeer::ANYO2;
		}

	} 
	
	public function setAnyo3($v)
	{

		if ($this->anyo3 !== $v) {
			$this->anyo3 = $v;
			$this->modifiedColumns[] = AnualizacionPeer::ANYO3;
		}

	} 
	
	public function setAnyo4($v)
	{

		if ($this->anyo4 !== $v) {
			$this->anyo4 = $v;
			$this->modifiedColumns[] = AnualizacionPeer::ANYO4;
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
			$this->modifiedColumns[] = AnualizacionPeer::CREATED_AT;
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
			$this->modifiedColumns[] = AnualizacionPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->meta_pd_id = $rs->getInt($startcol + 1);

			$this->anyo1 = $rs->getFloat($startcol + 2);

			$this->anyo2 = $rs->getFloat($startcol + 3);

			$this->anyo3 = $rs->getFloat($startcol + 4);

			$this->anyo4 = $rs->getFloat($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->updated_at = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Anualizacion object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AnualizacionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AnualizacionPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(AnualizacionPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(AnualizacionPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AnualizacionPeer::DATABASE_NAME);
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
					$pk = AnualizacionPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AnualizacionPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collIndicadorMetas !== null) {
				foreach($this->collIndicadorMetas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMetaProyectos !== null) {
				foreach($this->collMetaProyectos as $referrerFK) {
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


			if (($retval = AnualizacionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIndicadorMetas !== null) {
					foreach($this->collIndicadorMetas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMetaProyectos !== null) {
					foreach($this->collMetaProyectos as $referrerFK) {
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
		$pos = AnualizacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAnyo1();
				break;
			case 3:
				return $this->getAnyo2();
				break;
			case 4:
				return $this->getAnyo3();
				break;
			case 5:
				return $this->getAnyo4();
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
		$keys = AnualizacionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMetaPdId(),
			$keys[2] => $this->getAnyo1(),
			$keys[3] => $this->getAnyo2(),
			$keys[4] => $this->getAnyo3(),
			$keys[5] => $this->getAnyo4(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AnualizacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAnyo1($value);
				break;
			case 3:
				$this->setAnyo2($value);
				break;
			case 4:
				$this->setAnyo3($value);
				break;
			case 5:
				$this->setAnyo4($value);
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
		$keys = AnualizacionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMetaPdId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAnyo1($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAnyo2($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAnyo3($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAnyo4($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AnualizacionPeer::DATABASE_NAME);

		if ($this->isColumnModified(AnualizacionPeer::ID)) $criteria->add(AnualizacionPeer::ID, $this->id);
		if ($this->isColumnModified(AnualizacionPeer::META_PD_ID)) $criteria->add(AnualizacionPeer::META_PD_ID, $this->meta_pd_id);
		if ($this->isColumnModified(AnualizacionPeer::ANYO1)) $criteria->add(AnualizacionPeer::ANYO1, $this->anyo1);
		if ($this->isColumnModified(AnualizacionPeer::ANYO2)) $criteria->add(AnualizacionPeer::ANYO2, $this->anyo2);
		if ($this->isColumnModified(AnualizacionPeer::ANYO3)) $criteria->add(AnualizacionPeer::ANYO3, $this->anyo3);
		if ($this->isColumnModified(AnualizacionPeer::ANYO4)) $criteria->add(AnualizacionPeer::ANYO4, $this->anyo4);
		if ($this->isColumnModified(AnualizacionPeer::CREATED_AT)) $criteria->add(AnualizacionPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(AnualizacionPeer::UPDATED_AT)) $criteria->add(AnualizacionPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AnualizacionPeer::DATABASE_NAME);

		$criteria->add(AnualizacionPeer::ID, $this->id);

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

		$copyObj->setAnyo1($this->anyo1);

		$copyObj->setAnyo2($this->anyo2);

		$copyObj->setAnyo3($this->anyo3);

		$copyObj->setAnyo4($this->anyo4);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getIndicadorMetas() as $relObj) {
				$copyObj->addIndicadorMeta($relObj->copy($deepCopy));
			}

			foreach($this->getMetaProyectos() as $relObj) {
				$copyObj->addMetaProyecto($relObj->copy($deepCopy));
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
			self::$peer = new AnualizacionPeer();
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

	
	public function initIndicadorMetas()
	{
		if ($this->collIndicadorMetas === null) {
			$this->collIndicadorMetas = array();
		}
	}

	
	public function getIndicadorMetas($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorMetaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorMetas === null) {
			if ($this->isNew()) {
			   $this->collIndicadorMetas = array();
			} else {

				$criteria->add(IndicadorMetaPeer::ANUALIZACION_ID, $this->getId());

				IndicadorMetaPeer::addSelectColumns($criteria);
				$this->collIndicadorMetas = IndicadorMetaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorMetaPeer::ANUALIZACION_ID, $this->getId());

				IndicadorMetaPeer::addSelectColumns($criteria);
				if (!isset($this->lastIndicadorMetaCriteria) || !$this->lastIndicadorMetaCriteria->equals($criteria)) {
					$this->collIndicadorMetas = IndicadorMetaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastIndicadorMetaCriteria = $criteria;
		return $this->collIndicadorMetas;
	}

	
	public function countIndicadorMetas($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorMetaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(IndicadorMetaPeer::ANUALIZACION_ID, $this->getId());

		return IndicadorMetaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicadorMeta(IndicadorMeta $l)
	{
		$this->collIndicadorMetas[] = $l;
		$l->setAnualizacion($this);
	}


	
	public function getIndicadorMetasJoinMetaPd($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorMetaPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorMetas === null) {
			if ($this->isNew()) {
				$this->collIndicadorMetas = array();
			} else {

				$criteria->add(IndicadorMetaPeer::ANUALIZACION_ID, $this->getId());

				$this->collIndicadorMetas = IndicadorMetaPeer::doSelectJoinMetaPd($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorMetaPeer::ANUALIZACION_ID, $this->getId());

			if (!isset($this->lastIndicadorMetaCriteria) || !$this->lastIndicadorMetaCriteria->equals($criteria)) {
				$this->collIndicadorMetas = IndicadorMetaPeer::doSelectJoinMetaPd($criteria, $con);
			}
		}
		$this->lastIndicadorMetaCriteria = $criteria;

		return $this->collIndicadorMetas;
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

				$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

				MetaProyectoPeer::addSelectColumns($criteria);
				$this->collMetaProyectos = MetaProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

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

		$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

		return MetaProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMetaProyecto(MetaProyecto $l)
	{
		$this->collMetaProyectos[] = $l;
		$l->setAnualizacion($this);
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

				$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		}
		$this->lastMetaProyectoCriteria = $criteria;

		return $this->collMetaProyectos;
	}


	
	public function getMetaProyectosJoinProyecto($criteria = null, $con = null)
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

				$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinProyecto($criteria, $con);
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

				$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinObjetivo($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::ANUALIZACION_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinObjetivo($criteria, $con);
			}
		}
		$this->lastMetaProyectoCriteria = $criteria;

		return $this->collMetaProyectos;
	}

} 