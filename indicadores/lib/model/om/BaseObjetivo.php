<?php


abstract class BaseObjetivo extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nombre;


	
	protected $descripcion;


	
	protected $nombre_corto;


	
	protected $tema;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collIndicadors;

	
	protected $lastIndicadorCriteria = null;

	
	protected $collMetaProyectos;

	
	protected $lastMetaProyectoCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNombre()
	{

		return $this->nombre;
	}

	
	public function getDescripcion()
	{

		return $this->descripcion;
	}

	
	public function getNombreCorto()
	{

		return $this->nombre_corto;
	}

	
	public function getTema()
	{

		return $this->tema;
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
			$this->modifiedColumns[] = ObjetivoPeer::ID;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = ObjetivoPeer::NOMBRE;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = ObjetivoPeer::DESCRIPCION;
		}

	} 
	
	public function setNombreCorto($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre_corto !== $v) {
			$this->nombre_corto = $v;
			$this->modifiedColumns[] = ObjetivoPeer::NOMBRE_CORTO;
		}

	} 
	
	public function setTema($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tema !== $v) {
			$this->tema = $v;
			$this->modifiedColumns[] = ObjetivoPeer::TEMA;
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
			$this->modifiedColumns[] = ObjetivoPeer::CREATED_AT;
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
			$this->modifiedColumns[] = ObjetivoPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->nombre = $rs->getString($startcol + 1);

			$this->descripcion = $rs->getString($startcol + 2);

			$this->nombre_corto = $rs->getString($startcol + 3);

			$this->tema = $rs->getString($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Objetivo object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ObjetivoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ObjetivoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ObjetivoPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(ObjetivoPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ObjetivoPeer::DATABASE_NAME);
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
					$pk = ObjetivoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ObjetivoPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collIndicadors !== null) {
				foreach($this->collIndicadors as $referrerFK) {
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


			if (($retval = ObjetivoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIndicadors !== null) {
					foreach($this->collIndicadors as $referrerFK) {
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
		$pos = ObjetivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNombre();
				break;
			case 2:
				return $this->getDescripcion();
				break;
			case 3:
				return $this->getNombreCorto();
				break;
			case 4:
				return $this->getTema();
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
		$keys = ObjetivoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNombre(),
			$keys[2] => $this->getDescripcion(),
			$keys[3] => $this->getNombreCorto(),
			$keys[4] => $this->getTema(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ObjetivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNombre($value);
				break;
			case 2:
				$this->setDescripcion($value);
				break;
			case 3:
				$this->setNombreCorto($value);
				break;
			case 4:
				$this->setTema($value);
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
		$keys = ObjetivoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNombreCorto($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTema($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ObjetivoPeer::DATABASE_NAME);

		if ($this->isColumnModified(ObjetivoPeer::ID)) $criteria->add(ObjetivoPeer::ID, $this->id);
		if ($this->isColumnModified(ObjetivoPeer::NOMBRE)) $criteria->add(ObjetivoPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(ObjetivoPeer::DESCRIPCION)) $criteria->add(ObjetivoPeer::DESCRIPCION, $this->descripcion);
		if ($this->isColumnModified(ObjetivoPeer::NOMBRE_CORTO)) $criteria->add(ObjetivoPeer::NOMBRE_CORTO, $this->nombre_corto);
		if ($this->isColumnModified(ObjetivoPeer::TEMA)) $criteria->add(ObjetivoPeer::TEMA, $this->tema);
		if ($this->isColumnModified(ObjetivoPeer::CREATED_AT)) $criteria->add(ObjetivoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(ObjetivoPeer::UPDATED_AT)) $criteria->add(ObjetivoPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ObjetivoPeer::DATABASE_NAME);

		$criteria->add(ObjetivoPeer::ID, $this->id);

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

		$copyObj->setNombre($this->nombre);

		$copyObj->setDescripcion($this->descripcion);

		$copyObj->setNombreCorto($this->nombre_corto);

		$copyObj->setTema($this->tema);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getIndicadors() as $relObj) {
				$copyObj->addIndicador($relObj->copy($deepCopy));
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
			self::$peer = new ObjetivoPeer();
		}
		return self::$peer;
	}

	
	public function initIndicadors()
	{
		if ($this->collIndicadors === null) {
			$this->collIndicadors = array();
		}
	}

	
	public function getIndicadors($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadors === null) {
			if ($this->isNew()) {
			   $this->collIndicadors = array();
			} else {

				$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

				IndicadorPeer::addSelectColumns($criteria);
				$this->collIndicadors = IndicadorPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

				IndicadorPeer::addSelectColumns($criteria);
				if (!isset($this->lastIndicadorCriteria) || !$this->lastIndicadorCriteria->equals($criteria)) {
					$this->collIndicadors = IndicadorPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastIndicadorCriteria = $criteria;
		return $this->collIndicadors;
	}

	
	public function countIndicadors($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

		return IndicadorPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicador(Indicador $l)
	{
		$this->collIndicadors[] = $l;
		$l->setObjetivo($this);
	}


	
	public function getIndicadorsJoinCategoria($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadors === null) {
			if ($this->isNew()) {
				$this->collIndicadors = array();
			} else {

				$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

				$this->collIndicadors = IndicadorPeer::doSelectJoinCategoria($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

			if (!isset($this->lastIndicadorCriteria) || !$this->lastIndicadorCriteria->equals($criteria)) {
				$this->collIndicadors = IndicadorPeer::doSelectJoinCategoria($criteria, $con);
			}
		}
		$this->lastIndicadorCriteria = $criteria;

		return $this->collIndicadors;
	}


	
	public function getIndicadorsJoinDependenciaRelatedByResponsableId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadors === null) {
			if ($this->isNew()) {
				$this->collIndicadors = array();
			} else {

				$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

				$this->collIndicadors = IndicadorPeer::doSelectJoinDependenciaRelatedByResponsableId($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

			if (!isset($this->lastIndicadorCriteria) || !$this->lastIndicadorCriteria->equals($criteria)) {
				$this->collIndicadors = IndicadorPeer::doSelectJoinDependenciaRelatedByResponsableId($criteria, $con);
			}
		}
		$this->lastIndicadorCriteria = $criteria;

		return $this->collIndicadors;
	}


	
	public function getIndicadorsJoinDependenciaRelatedByQuienId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadors === null) {
			if ($this->isNew()) {
				$this->collIndicadors = array();
			} else {

				$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

				$this->collIndicadors = IndicadorPeer::doSelectJoinDependenciaRelatedByQuienId($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::OBJETIVO_ID, $this->getId());

			if (!isset($this->lastIndicadorCriteria) || !$this->lastIndicadorCriteria->equals($criteria)) {
				$this->collIndicadors = IndicadorPeer::doSelectJoinDependenciaRelatedByQuienId($criteria, $con);
			}
		}
		$this->lastIndicadorCriteria = $criteria;

		return $this->collIndicadors;
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

				$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

				MetaProyectoPeer::addSelectColumns($criteria);
				$this->collMetaProyectos = MetaProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

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

		$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

		return MetaProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMetaProyecto(MetaProyecto $l)
	{
		$this->collMetaProyectos[] = $l;
		$l->setObjetivo($this);
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

				$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinMetaPd($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

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

				$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinProyecto($criteria, $con);
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

				$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		} else {
									
			$criteria->add(MetaProyectoPeer::OBJETIVO_ID, $this->getId());

			if (!isset($this->lastMetaProyectoCriteria) || !$this->lastMetaProyectoCriteria->equals($criteria)) {
				$this->collMetaProyectos = MetaProyectoPeer::doSelectJoinAnualizacion($criteria, $con);
			}
		}
		$this->lastMetaProyectoCriteria = $criteria;

		return $this->collMetaProyectos;
	}

} 