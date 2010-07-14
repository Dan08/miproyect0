<?php


abstract class BaseMetaPd extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $codigo;


	
	protected $meta;


	
	protected $descripcion;


	
	protected $tipo;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collIndicadorMetas;

	
	protected $lastIndicadorMetaCriteria = null;

	
	protected $collAnualizacions;

	
	protected $lastAnualizacionCriteria = null;

	
	protected $collMetaProyectos;

	
	protected $lastMetaProyectoCriteria = null;

	
	protected $collProyectoInversions;

	
	protected $lastProyectoInversionCriteria = null;

	
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

	
	public function getMeta()
	{

		return $this->meta;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getTipo()
	{

		return $this->tipo;
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
			$this->modifiedColumns[] = MetaPdPeer::ID;
		}

	} 
	
	public function setCodigo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->codigo !== $v) {
			$this->codigo = $v;
			$this->modifiedColumns[] = MetaPdPeer::CODIGO;
		}

	} 
	
	public function setMeta($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->meta !== $v) {
			$this->meta = $v;
			$this->modifiedColumns[] = MetaPdPeer::META;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = MetaPdPeer::DESCRIPCION;
		}

	} 
	
	public function setTipo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tipo !== $v) {
			$this->tipo = $v;
			$this->modifiedColumns[] = MetaPdPeer::TIPO;
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
			$this->modifiedColumns[] = MetaPdPeer::CREATED_AT;
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
			$this->modifiedColumns[] = MetaPdPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->codigo = $rs->getString($startcol + 1);

			$this->meta = $rs->getString($startcol + 2);

			$this->descripcion = $rs->getString($startcol + 3);

			$this->tipo = $rs->getString($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating MetaPd object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MetaPdPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MetaPdPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(MetaPdPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(MetaPdPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MetaPdPeer::DATABASE_NAME);
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
					$pk = MetaPdPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MetaPdPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collIndicadorMetas !== null) {
				foreach($this->collIndicadorMetas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAnualizacions !== null) {
				foreach($this->collAnualizacions as $referrerFK) {
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

			if ($this->collProyectoInversions !== null) {
				foreach($this->collProyectoInversions as $referrerFK) {
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


			if (($retval = MetaPdPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIndicadorMetas !== null) {
					foreach($this->collIndicadorMetas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAnualizacions !== null) {
					foreach($this->collAnualizacions as $referrerFK) {
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

				if ($this->collProyectoInversions !== null) {
					foreach($this->collProyectoInversions as $referrerFK) {
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
		$pos = MetaPdPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMeta();
				break;
			case 3:
				return $this->getDescripcion();
				break;
			case 4:
				return $this->getTipo();
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
		$keys = MetaPdPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCodigo(),
			$keys[2] => $this->getMeta(),
			$keys[3] => $this->getDescripcion(),
			$keys[4] => $this->getTipo(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MetaPdPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMeta($value);
				break;
			case 3:
				$this->setDescripcion($value);
				break;
			case 4:
				$this->setTipo($value);
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
		$keys = MetaPdPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodigo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMeta($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescripcion($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTipo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MetaPdPeer::DATABASE_NAME);

		if ($this->isColumnModified(MetaPdPeer::ID)) $criteria->add(MetaPdPeer::ID, $this->id);
		if ($this->isColumnModified(MetaPdPeer::CODIGO)) $criteria->add(MetaPdPeer::CODIGO, $this->codigo);
		if ($this->isColumnModified(MetaPdPeer::META)) $criteria->add(MetaPdPeer::META, $this->meta);
		if ($this->isColumnModified(MetaPdPeer::DESCRIPCION)) $criteria->add(MetaPdPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(MetaPdPeer::TIPO)) $criteria->add(MetaPdPeer::TIPO, $this->tipo);
		if ($this->isColumnModified(MetaPdPeer::CREATED_AT)) $criteria->add(MetaPdPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(MetaPdPeer::UPDATED_AT)) $criteria->add(MetaPdPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MetaPdPeer::DATABASE_NAME);

		$criteria->add(MetaPdPeer::ID, $this->id);

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

		$copyObj->setMeta($this->meta);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setTipo($this->tipo);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getIndicadorMetas() as $relObj) {
				$copyObj->addIndicadorMeta($relObj->copy($deepCopy));
			}

			foreach($this->getAnualizacions() as $relObj) {
				$copyObj->addAnualizacion($relObj->copy($deepCopy));
			}

			foreach($this->getMetaProyectos() as $relObj) {
				$copyObj->addMetaProyecto($relObj->copy($deepCopy));
			}

			foreach($this->getProyectoInversions() as $relObj) {
				$copyObj->addProyectoInversion($relObj->copy($deepCopy));
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
			self::$peer = new MetaPdPeer();
		}
		return self::$peer;
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

				$criteria->add(IndicadorMetaPeer::META_PD_ID, $this->getId());

				IndicadorMetaPeer::addSelectColumns($criteria);
				$this->collIndicadorMetas = IndicadorMetaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorMetaPeer::META_PD_ID, $this->getId());

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

		$criteria->add(IndicadorMetaPeer::META_PD_ID, $this->getId());

		return IndicadorMetaPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicadorMeta(IndicadorMeta $l)
	{
		$this->collIndicadorMetas[] = $l;
		$l->setMetaPd($this);
	}


	
	public function getIndicadorMetasJoinAnualizacion($criteria = null, $con = null)
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

				$criteria->add(IndicadorMetaPeer::META_PD_ID, $this->getId());

				$this->collIndicadorMetas = IndicadorMetaPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorMetaPeer::META_PD_ID, $this->getId());

			if (!isset($this->lastIndicadorMetaCriteria) || !$this->lastIndicadorMetaCriteria->equals($criteria)) {
				$this->collIndicadorMetas = IndicadorMetaPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		}
		$this->lastIndicadorMetaCriteria = $criteria;

		return $this->collIndicadorMetas;
	}

	
	public function initAnualizacions()
	{
		if ($this->collAnualizacions === null) {
			$this->collAnualizacions = array();
		}
	}

	
	public function getAnualizacions($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAnualizacionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAnualizacions === null) {
			if ($this->isNew()) {
			   $this->collAnualizacions = array();
			} else {

				$criteria->add(AnualizacionPeer::META_PD_ID, $this->getId());

				AnualizacionPeer::addSelectColumns($criteria);
				$this->collAnualizacions = AnualizacionPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AnualizacionPeer::META_PD_ID, $this->getId());

				AnualizacionPeer::addSelectColumns($criteria);
				if (!isset($this->lastAnualizacionCriteria) || !$this->lastAnualizacionCriteria->equals($criteria)) {
					$this->collAnualizacions = AnualizacionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAnualizacionCriteria = $criteria;
		return $this->collAnualizacions;
	}

	
	public function countAnualizacions($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAnualizacionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AnualizacionPeer::META_PD_ID, $this->getId());

		return AnualizacionPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAnualizacion(Anualizacion $l)
	{
		$this->collAnualizacions[] = $l;
		$l->setMetaPd($this);
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

				$criteria->add(MetaProyectoPeer::META_PD_ID, $this->getId());

				MetaProyectoPeer::addSelectColumns($criteria);
				$this->collMetaProyectos = MetaProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MetaProyectoPeer::META_PD_ID, $this->getId());

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

		$criteria->add(MetaProyectoPeer::META_PD_ID, $this->getId());

		return MetaProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMetaProyecto(MetaProyecto $l)
	{
		$this->collMetaProyectos[] = $l;
		$l->setMetaPd($this);
	}

	
	public function initProyectoInversions()
	{
		if ($this->collProyectoInversions === null) {
			$this->collProyectoInversions = array();
		}
	}

	
	public function getProyectoInversions($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseProyectoInversionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProyectoInversions === null) {
			if ($this->isNew()) {
			   $this->collProyectoInversions = array();
			} else {

				$criteria->add(ProyectoInversionPeer::META_PD_ID, $this->getId());

				ProyectoInversionPeer::addSelectColumns($criteria);
				$this->collProyectoInversions = ProyectoInversionPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProyectoInversionPeer::META_PD_ID, $this->getId());

				ProyectoInversionPeer::addSelectColumns($criteria);
				if (!isset($this->lastProyectoInversionCriteria) || !$this->lastProyectoInversionCriteria->equals($criteria)) {
					$this->collProyectoInversions = ProyectoInversionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProyectoInversionCriteria = $criteria;
		return $this->collProyectoInversions;
	}

	
	public function countProyectoInversions($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseProyectoInversionPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ProyectoInversionPeer::META_PD_ID, $this->getId());

		return ProyectoInversionPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addProyectoInversion(ProyectoInversion $l)
	{
		$this->collProyectoInversions[] = $l;
		$l->setMetaPd($this);
	}

} 