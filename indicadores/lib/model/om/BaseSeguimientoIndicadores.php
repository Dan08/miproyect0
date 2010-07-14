<?php


abstract class BaseSeguimientoIndicadores extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $indicador_meta_id;


	
	protected $anyo;


	
	protected $valor;

	
	protected $aIndicadorMeta;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getIndicadorMetaId()
	{

		return $this->indicador_meta_id;
	}

	
	public function getAnyo()
	{

		return $this->anyo;
	}

	
	public function getValor()
	{

		return $this->valor;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SeguimientoIndicadoresPeer::ID;
		}

	} 
	
	public function setIndicadorMetaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->indicador_meta_id !== $v) {
			$this->indicador_meta_id = $v;
			$this->modifiedColumns[] = SeguimientoIndicadoresPeer::INDICADOR_META_ID;
		}

		if ($this->aIndicadorMeta !== null && $this->aIndicadorMeta->getId() !== $v) {
			$this->aIndicadorMeta = null;
		}

	} 
	
	public function setAnyo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->anyo !== $v) {
			$this->anyo = $v;
			$this->modifiedColumns[] = SeguimientoIndicadoresPeer::ANYO;
		}

	} 
	
	public function setValor($v)
	{

		if ($this->valor !== $v) {
			$this->valor = $v;
			$this->modifiedColumns[] = SeguimientoIndicadoresPeer::VALOR;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->indicador_meta_id = $rs->getInt($startcol + 1);

			$this->anyo = $rs->getString($startcol + 2);

			$this->valor = $rs->getFloat($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SeguimientoIndicadores object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SeguimientoIndicadoresPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SeguimientoIndicadoresPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SeguimientoIndicadoresPeer::DATABASE_NAME);
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


												
			if ($this->aIndicadorMeta !== null) {
				if ($this->aIndicadorMeta->isModified()) {
					$affectedRows += $this->aIndicadorMeta->save($con);
				}
				$this->setIndicadorMeta($this->aIndicadorMeta);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SeguimientoIndicadoresPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SeguimientoIndicadoresPeer::doUpdate($this, $con);
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


												
			if ($this->aIndicadorMeta !== null) {
				if (!$this->aIndicadorMeta->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aIndicadorMeta->getValidationFailures());
				}
			}


			if (($retval = SeguimientoIndicadoresPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeguimientoIndicadoresPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getIndicadorMetaId();
				break;
			case 2:
				return $this->getAnyo();
				break;
			case 3:
				return $this->getValor();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeguimientoIndicadoresPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndicadorMetaId(),
			$keys[2] => $this->getAnyo(),
			$keys[3] => $this->getValor(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeguimientoIndicadoresPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setIndicadorMetaId($value);
				break;
			case 2:
				$this->setAnyo($value);
				break;
			case 3:
				$this->setValor($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeguimientoIndicadoresPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndicadorMetaId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAnyo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setValor($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SeguimientoIndicadoresPeer::DATABASE_NAME);

		if ($this->isColumnModified(SeguimientoIndicadoresPeer::ID)) $criteria->add(SeguimientoIndicadoresPeer::ID, $this->id);
		if ($this->isColumnModified(SeguimientoIndicadoresPeer::INDICADOR_META_ID)) $criteria->add(SeguimientoIndicadoresPeer::INDICADOR_META_ID, $this->indicador_meta_id);
		if ($this->isColumnModified(SeguimientoIndicadoresPeer::ANYO)) $criteria->add(SeguimientoIndicadoresPeer::ANYO, $this->anyo);
		if ($this->isColumnModified(SeguimientoIndicadoresPeer::VALOR)) $criteria->add(SeguimientoIndicadoresPeer::VALOR, $this->valor);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SeguimientoIndicadoresPeer::DATABASE_NAME);

		$criteria->add(SeguimientoIndicadoresPeer::ID, $this->id);

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

		$copyObj->setIndicadorMetaId($this->indicador_meta_id);

		$copyObj->setAnyo($this->anyo);

		$copyObj->setValor($this->valor);


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
			self::$peer = new SeguimientoIndicadoresPeer();
		}
		return self::$peer;
	}

	
	public function setIndicadorMeta($v)
	{


		if ($v === null) {
			$this->setIndicadorMetaId(NULL);
		} else {
			$this->setIndicadorMetaId($v->getId());
		}


		$this->aIndicadorMeta = $v;
	}


	
	public function getIndicadorMeta($con = null)
	{
		if ($this->aIndicadorMeta === null && ($this->indicador_meta_id !== null)) {
						include_once 'lib/model/om/BaseIndicadorMetaPeer.php';

			$this->aIndicadorMeta = IndicadorMetaPeer::retrieveByPK($this->indicador_meta_id, $con);

			
		}
		return $this->aIndicadorMeta;
	}

} 