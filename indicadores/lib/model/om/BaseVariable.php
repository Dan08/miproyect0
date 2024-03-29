<?php


abstract class BaseVariable extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nombre;


	
	protected $descripcion;

	
	protected $collIndicadorVariables;

	
	protected $lastIndicadorVariableCriteria = null;

	
	protected $collHistoricoVariables;

	
	protected $lastHistoricoVariableCriteria = null;

	
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
			$this->modifiedColumns[] = VariablePeer::ID;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = VariablePeer::NOMBRE;
		}

	} 
	
	public function setDescripcion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
			$this->modifiedColumns[] = VariablePeer::DESCRIPCION;
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
			throw new PropelException("Error populating Variable object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VariablePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			VariablePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(VariablePeer::DATABASE_NAME);
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
					$pk = VariablePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += VariablePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collIndicadorVariables !== null) {
				foreach($this->collIndicadorVariables as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collHistoricoVariables !== null) {
				foreach($this->collHistoricoVariables as $referrerFK) {
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


			if (($retval = VariablePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIndicadorVariables !== null) {
					foreach($this->collIndicadorVariables as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collHistoricoVariables !== null) {
					foreach($this->collHistoricoVariables as $referrerFK) {
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
		$pos = VariablePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = VariablePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNombre(),
			$keys[2] => $this->getDescripcion(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VariablePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = VariablePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescripcion($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(VariablePeer::DATABASE_NAME);

		if ($this->isColumnModified(VariablePeer::ID)) $criteria->add(VariablePeer::ID, $this->id);
		if ($this->isColumnModified(VariablePeer::NOMBRE)) $criteria->add(VariablePeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(VariablePeer::DESCRIPCION)) $criteria->add(VariablePeer::DESCRIPCION, $this->descripcion);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(VariablePeer::DATABASE_NAME);

		$criteria->add(VariablePeer::ID, $this->id);

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

			foreach($this->getIndicadorVariables() as $relObj) {
				$copyObj->addIndicadorVariable($relObj->copy($deepCopy));
			}

			foreach($this->getHistoricoVariables() as $relObj) {
				$copyObj->addHistoricoVariable($relObj->copy($deepCopy));
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
			self::$peer = new VariablePeer();
		}
		return self::$peer;
	}

	
	public function initIndicadorVariables()
	{
		if ($this->collIndicadorVariables === null) {
			$this->collIndicadorVariables = array();
		}
	}

	
	public function getIndicadorVariables($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorVariables === null) {
			if ($this->isNew()) {
			   $this->collIndicadorVariables = array();
			} else {

				$criteria->add(IndicadorVariablePeer::VARIABLE_ID, $this->getId());

				IndicadorVariablePeer::addSelectColumns($criteria);
				$this->collIndicadorVariables = IndicadorVariablePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorVariablePeer::VARIABLE_ID, $this->getId());

				IndicadorVariablePeer::addSelectColumns($criteria);
				if (!isset($this->lastIndicadorVariableCriteria) || !$this->lastIndicadorVariableCriteria->equals($criteria)) {
					$this->collIndicadorVariables = IndicadorVariablePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastIndicadorVariableCriteria = $criteria;
		return $this->collIndicadorVariables;
	}

	
	public function countIndicadorVariables($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(IndicadorVariablePeer::VARIABLE_ID, $this->getId());

		return IndicadorVariablePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicadorVariable(IndicadorVariable $l)
	{
		$this->collIndicadorVariables[] = $l;
		$l->setVariable($this);
	}


	
	public function getIndicadorVariablesJoinIndicador($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorVariables === null) {
			if ($this->isNew()) {
				$this->collIndicadorVariables = array();
			} else {

				$criteria->add(IndicadorVariablePeer::VARIABLE_ID, $this->getId());

				$this->collIndicadorVariables = IndicadorVariablePeer::doSelectJoinIndicador($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorVariablePeer::VARIABLE_ID, $this->getId());

			if (!isset($this->lastIndicadorVariableCriteria) || !$this->lastIndicadorVariableCriteria->equals($criteria)) {
				$this->collIndicadorVariables = IndicadorVariablePeer::doSelectJoinIndicador($criteria, $con);
			}
		}
		$this->lastIndicadorVariableCriteria = $criteria;

		return $this->collIndicadorVariables;
	}

	
	public function initHistoricoVariables()
	{
		if ($this->collHistoricoVariables === null) {
			$this->collHistoricoVariables = array();
		}
	}

	
	public function getHistoricoVariables($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseHistoricoVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHistoricoVariables === null) {
			if ($this->isNew()) {
			   $this->collHistoricoVariables = array();
			} else {

				$criteria->add(HistoricoVariablePeer::VARIABLE_ID, $this->getId());

				HistoricoVariablePeer::addSelectColumns($criteria);
				$this->collHistoricoVariables = HistoricoVariablePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HistoricoVariablePeer::VARIABLE_ID, $this->getId());

				HistoricoVariablePeer::addSelectColumns($criteria);
				if (!isset($this->lastHistoricoVariableCriteria) || !$this->lastHistoricoVariableCriteria->equals($criteria)) {
					$this->collHistoricoVariables = HistoricoVariablePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastHistoricoVariableCriteria = $criteria;
		return $this->collHistoricoVariables;
	}

	
	public function countHistoricoVariables($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseHistoricoVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(HistoricoVariablePeer::VARIABLE_ID, $this->getId());

		return HistoricoVariablePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHistoricoVariable(HistoricoVariable $l)
	{
		$this->collHistoricoVariables[] = $l;
		$l->setVariable($this);
	}


	
	public function getHistoricoVariablesJoinHistoricoIndicador($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseHistoricoVariablePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHistoricoVariables === null) {
			if ($this->isNew()) {
				$this->collHistoricoVariables = array();
			} else {

				$criteria->add(HistoricoVariablePeer::VARIABLE_ID, $this->getId());

				$this->collHistoricoVariables = HistoricoVariablePeer::doSelectJoinHistoricoIndicador($criteria, $con);
			}
		} else {
									
			$criteria->add(HistoricoVariablePeer::VARIABLE_ID, $this->getId());

			if (!isset($this->lastHistoricoVariableCriteria) || !$this->lastHistoricoVariableCriteria->equals($criteria)) {
				$this->collHistoricoVariables = HistoricoVariablePeer::doSelectJoinHistoricoIndicador($criteria, $con);
			}
		}
		$this->lastHistoricoVariableCriteria = $criteria;

		return $this->collHistoricoVariables;
	}

} 