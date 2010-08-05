<?php


abstract class BaseCategoria extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nombre;


	
	protected $descripcion;

	
	protected $collIndicadors;

	
	protected $lastIndicadorCriteria = null;

	
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CategoriaPeer::ID;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = CategoriaPeer::NOMBRE;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = CategoriaPeer::DESCRIPCION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->nombre = $rs->getString($startcol + 1);

			$this->descripcion = $rs->getString($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Categoria object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CategoriaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CategoriaPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CategoriaPeer::DATABASE_NAME);
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
					$pk = CategoriaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CategoriaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collIndicadors !== null) {
				foreach($this->collIndicadors as $referrerFK) {
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


			if (($retval = CategoriaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIndicadors !== null) {
					foreach($this->collIndicadors as $referrerFK) {
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
		$pos = CategoriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CategoriaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNombre(),
			$keys[2] => $this->getDescripcion(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CategoriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CategoriaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CategoriaPeer::DATABASE_NAME);

		if ($this->isColumnModified(CategoriaPeer::ID)) $criteria->add(CategoriaPeer::ID, $this->id);
		if ($this->isColumnModified(CategoriaPeer::NOMBRE)) $criteria->add(CategoriaPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(CategoriaPeer::DESCRIPCION)) $criteria->add(CategoriaPeer::DESCRIPCION, $this->descripcion);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CategoriaPeer::DATABASE_NAME);

		$criteria->add(CategoriaPeer::ID, $this->id);

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


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getIndicadors() as $relObj) {
				$copyObj->addIndicador($relObj->copy($deepCopy));
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
			self::$peer = new CategoriaPeer();
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

				$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

				IndicadorPeer::addSelectColumns($criteria);
				$this->collIndicadors = IndicadorPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

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

		$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

		return IndicadorPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicador(Indicador $l)
	{
		$this->collIndicadors[] = $l;
		$l->setCategoria($this);
	}


	
	public function getIndicadorsJoinObjetivo($criteria = null, $con = null)
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

				$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

				$this->collIndicadors = IndicadorPeer::doSelectJoinObjetivo($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

			if (!isset($this->lastIndicadorCriteria) || !$this->lastIndicadorCriteria->equals($criteria)) {
				$this->collIndicadors = IndicadorPeer::doSelectJoinObjetivo($criteria, $con);
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

				$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

				$this->collIndicadors = IndicadorPeer::doSelectJoinDependenciaRelatedByResponsableId($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

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

				$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

				$this->collIndicadors = IndicadorPeer::doSelectJoinDependenciaRelatedByQuienId($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::CATEGORIA_ID, $this->getId());

			if (!isset($this->lastIndicadorCriteria) || !$this->lastIndicadorCriteria->equals($criteria)) {
				$this->collIndicadors = IndicadorPeer::doSelectJoinDependenciaRelatedByQuienId($criteria, $con);
			}
		}
		$this->lastIndicadorCriteria = $criteria;

		return $this->collIndicadors;
	}

} 