<?php


abstract class BaseIndicadorVariable extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $indicador_id;


	
	protected $variable_id;

	
	protected $aIndicador;

	
	protected $aVariable;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getIndicadorId()
	{

		return $this->indicador_id;
	}

	
	public function getVariableId()
	{

		return $this->variable_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = IndicadorVariablePeer::ID;
		}

	} 
	
	public function setIndicadorId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->indicador_id !== $v) {
			$this->indicador_id = $v;
			$this->modifiedColumns[] = IndicadorVariablePeer::INDICADOR_ID;
		}

		if ($this->aIndicador !== null && $this->aIndicador->getId() !== $v) {
			$this->aIndicador = null;
		}

	} 
	
	public function setVariableId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->variable_id !== $v) {
			$this->variable_id = $v;
			$this->modifiedColumns[] = IndicadorVariablePeer::VARIABLE_ID;
		}

		if ($this->aVariable !== null && $this->aVariable->getId() !== $v) {
			$this->aVariable = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->indicador_id = $rs->getInt($startcol + 1);

			$this->variable_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating IndicadorVariable object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(IndicadorVariablePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			IndicadorVariablePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(IndicadorVariablePeer::DATABASE_NAME);
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


												
			if ($this->aIndicador !== null) {
				if ($this->aIndicador->isModified()) {
					$affectedRows += $this->aIndicador->save($con);
				}
				$this->setIndicador($this->aIndicador);
			}

			if ($this->aVariable !== null) {
				if ($this->aVariable->isModified()) {
					$affectedRows += $this->aVariable->save($con);
				}
				$this->setVariable($this->aVariable);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = IndicadorVariablePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += IndicadorVariablePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


												
			if ($this->aIndicador !== null) {
				if (!$this->aIndicador->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aIndicador->getValidationFailures());
				}
			}

			if ($this->aVariable !== null) {
				if (!$this->aVariable->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVariable->getValidationFailures());
				}
			}


			if (($retval = IndicadorVariablePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IndicadorVariablePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getIndicadorId();
				break;
			case 2:
				return $this->getVariableId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IndicadorVariablePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndicadorId(),
			$keys[2] => $this->getVariableId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IndicadorVariablePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setIndicadorId($value);
				break;
			case 2:
				$this->setVariableId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IndicadorVariablePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndicadorId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setVariableId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(IndicadorVariablePeer::DATABASE_NAME);

		if ($this->isColumnModified(IndicadorVariablePeer::ID)) $criteria->add(IndicadorVariablePeer::ID, $this->id);
		if ($this->isColumnModified(IndicadorVariablePeer::INDICADOR_ID)) $criteria->add(IndicadorVariablePeer::INDICADOR_ID, $this->indicador_id);
		if ($this->isColumnModified(IndicadorVariablePeer::VARIABLE_ID)) $criteria->add(IndicadorVariablePeer::VARIABLE_ID, $this->variable_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(IndicadorVariablePeer::DATABASE_NAME);

		$criteria->add(IndicadorVariablePeer::ID, $this->id);

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

		$copyObj->setIndicadorId($this->indicador_id);

		$copyObj->setVariableId($this->variable_id);


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
			self::$peer = new IndicadorVariablePeer();
		}
		return self::$peer;
	}

	
	public function setIndicador($v)
	{


		if ($v === null) {
			$this->setIndicadorId(NULL);
		} else {
			$this->setIndicadorId($v->getId());
		}


		$this->aIndicador = $v;
	}


	
	public function getIndicador($con = null)
	{
		if ($this->aIndicador === null && ($this->indicador_id !== null)) {
						include_once 'lib/model/om/BaseIndicadorPeer.php';

			$this->aIndicador = IndicadorPeer::retrieveByPK($this->indicador_id, $con);

			
		}
		return $this->aIndicador;
	}

	
	public function setVariable($v)
	{


		if ($v === null) {
			$this->setVariableId(NULL);
		} else {
			$this->setVariableId($v->getId());
		}


		$this->aVariable = $v;
	}


	
	public function getVariable($con = null)
	{
		if ($this->aVariable === null && ($this->variable_id !== null)) {
						include_once 'lib/model/om/BaseVariablePeer.php';

			$this->aVariable = VariablePeer::retrieveByPK($this->variable_id, $con);

			
		}
		return $this->aVariable;
	}

} 