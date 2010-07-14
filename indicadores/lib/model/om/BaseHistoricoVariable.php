<?php


abstract class BaseHistoricoVariable extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $variable_id;


	
	protected $valor;


	
	protected $historico_indicador_id;

	
	protected $aVariable;

	
	protected $aHistoricoIndicador;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getVariableId()
	{

		return $this->variable_id;
	}

	
	public function getValor()
	{

		return $this->valor;
	}

	
	public function getHistoricoIndicadorId()
	{

		return $this->historico_indicador_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HistoricoVariablePeer::ID;
		}

	} 
	
	public function setVariableId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->variable_id !== $v) {
			$this->variable_id = $v;
			$this->modifiedColumns[] = HistoricoVariablePeer::VARIABLE_ID;
		}

		if ($this->aVariable !== null && $this->aVariable->getId() !== $v) {
			$this->aVariable = null;
		}

	} 
	
	public function setValor($v)
	{

		if ($this->valor !== $v) {
			$this->valor = $v;
			$this->modifiedColumns[] = HistoricoVariablePeer::VALOR;
		}

	} 
	
	public function setHistoricoIndicadorId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->historico_indicador_id !== $v) {
			$this->historico_indicador_id = $v;
			$this->modifiedColumns[] = HistoricoVariablePeer::HISTORICO_INDICADOR_ID;
		}

		if ($this->aHistoricoIndicador !== null && $this->aHistoricoIndicador->getId() !== $v) {
			$this->aHistoricoIndicador = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->variable_id = $rs->getInt($startcol + 1);

			$this->valor = $rs->getFloat($startcol + 2);

			$this->historico_indicador_id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HistoricoVariable object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HistoricoVariablePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HistoricoVariablePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HistoricoVariablePeer::DATABASE_NAME);
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


												
			if ($this->aVariable !== null) {
				if ($this->aVariable->isModified()) {
					$affectedRows += $this->aVariable->save($con);
				}
				$this->setVariable($this->aVariable);
			}

			if ($this->aHistoricoIndicador !== null) {
				if ($this->aHistoricoIndicador->isModified()) {
					$affectedRows += $this->aHistoricoIndicador->save($con);
				}
				$this->setHistoricoIndicador($this->aHistoricoIndicador);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = HistoricoVariablePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HistoricoVariablePeer::doUpdate($this, $con);
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


												
			if ($this->aVariable !== null) {
				if (!$this->aVariable->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVariable->getValidationFailures());
				}
			}

			if ($this->aHistoricoIndicador !== null) {
				if (!$this->aHistoricoIndicador->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aHistoricoIndicador->getValidationFailures());
				}
			}


			if (($retval = HistoricoVariablePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HistoricoVariablePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getVariableId();
				break;
			case 2:
				return $this->getValor();
				break;
			case 3:
				return $this->getHistoricoIndicadorId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HistoricoVariablePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getVariableId(),
			$keys[2] => $this->getValor(),
			$keys[3] => $this->getHistoricoIndicadorId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HistoricoVariablePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setVariableId($value);
				break;
			case 2:
				$this->setValor($value);
				break;
			case 3:
				$this->setHistoricoIndicadorId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HistoricoVariablePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setVariableId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setValor($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setHistoricoIndicadorId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HistoricoVariablePeer::DATABASE_NAME);

		if ($this->isColumnModified(HistoricoVariablePeer::ID)) $criteria->add(HistoricoVariablePeer::ID, $this->id);
		if ($this->isColumnModified(HistoricoVariablePeer::VARIABLE_ID)) $criteria->add(HistoricoVariablePeer::VARIABLE_ID, $this->variable_id);
		if ($this->isColumnModified(HistoricoVariablePeer::VALOR)) $criteria->add(HistoricoVariablePeer::VALOR, $this->valor);
		if ($this->isColumnModified(HistoricoVariablePeer::HISTORICO_INDICADOR_ID)) $criteria->add(HistoricoVariablePeer::HISTORICO_INDICADOR_ID, $this->historico_indicador_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HistoricoVariablePeer::DATABASE_NAME);

		$criteria->add(HistoricoVariablePeer::ID, $this->id);

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

		$copyObj->setVariableId($this->variable_id);

		$copyObj->setValor($this->valor);

		$copyObj->setHistoricoIndicadorId($this->historico_indicador_id);


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
			self::$peer = new HistoricoVariablePeer();
		}
		return self::$peer;
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

	
	public function setHistoricoIndicador($v)
	{


		if ($v === null) {
			$this->setHistoricoIndicadorId(NULL);
		} else {
			$this->setHistoricoIndicadorId($v->getId());
		}


		$this->aHistoricoIndicador = $v;
	}


	
	public function getHistoricoIndicador($con = null)
	{
		if ($this->aHistoricoIndicador === null && ($this->historico_indicador_id !== null)) {
						include_once 'lib/model/om/BaseHistoricoIndicadorPeer.php';

			$this->aHistoricoIndicador = HistoricoIndicadorPeer::retrieveByPK($this->historico_indicador_id, $con);

			
		}
		return $this->aHistoricoIndicador;
	}

} 