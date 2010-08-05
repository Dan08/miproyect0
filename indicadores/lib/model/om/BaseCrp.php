<?php


abstract class BaseCrp extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $numero;


	
	protected $fecha;


	
	protected $monto;

	
	protected $collCrpActividads;

	
	protected $lastCrpActividadCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNumero()
	{

		return $this->numero;
	}

	
	public function getFecha($format = 'Y-m-d')
	{

		if ($this->fecha === null || $this->fecha === '') {
			return null;
		} elseif (!is_int($this->fecha)) {
						$ts = strtotime($this->fecha);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [fecha] as date/time value: " . var_export($this->fecha, true));
			}
		} else {
			$ts = $this->fecha;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getMonto()
	{

		return $this->monto;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CrpPeer::ID;
		}

	} 
	
	public function setNumero($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->numero !== $v) {
			$this->numero = $v;
			$this->modifiedColumns[] = CrpPeer::NUMERO;
		}

	} 
	
	public function setFecha($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [fecha] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->fecha !== $ts) {
			$this->fecha = $ts;
			$this->modifiedColumns[] = CrpPeer::FECHA;
		}

	} 
	
	public function setMonto($v)
	{

		if ($this->monto !== $v) {
			$this->monto = $v;
			$this->modifiedColumns[] = CrpPeer::MONTO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->numero = $rs->getString($startcol + 1);

			$this->fecha = $rs->getDate($startcol + 2, null);

			$this->monto = $rs->getFloat($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Crp object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CrpPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CrpPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CrpPeer::DATABASE_NAME);
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
					$pk = CrpPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CrpPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collCrpActividads !== null) {
				foreach($this->collCrpActividads as $referrerFK) {
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


			if (($retval = CrpPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCrpActividads !== null) {
					foreach($this->collCrpActividads as $referrerFK) {
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
		$pos = CrpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNumero();
				break;
			case 2:
				return $this->getFecha();
				break;
			case 3:
				return $this->getMonto();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CrpPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNumero(),
			$keys[2] => $this->getFecha(),
			$keys[3] => $this->getMonto(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CrpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNumero($value);
				break;
			case 2:
				$this->setFecha($value);
				break;
			case 3:
				$this->setMonto($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CrpPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNumero($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFecha($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMonto($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CrpPeer::DATABASE_NAME);

		if ($this->isColumnModified(CrpPeer::ID)) $criteria->add(CrpPeer::ID, $this->id);
		if ($this->isColumnModified(CrpPeer::NUMERO)) $criteria->add(CrpPeer::NUMERO, $this->numero);
		if ($this->isColumnModified(CrpPeer::FECHA)) $criteria->add(CrpPeer::FECHA, $this->fecha);
		if ($this->isColumnModified(CrpPeer::MONTO)) $criteria->add(CrpPeer::MONTO, $this->monto);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CrpPeer::DATABASE_NAME);

		$criteria->add(CrpPeer::ID, $this->id);

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

		$copyObj->setNumero($this->numero);

		$copyObj->setFecha($this->fecha);

		$copyObj->setMonto($this->monto);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getCrpActividads() as $relObj) {
				$copyObj->addCrpActividad($relObj->copy($deepCopy));
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
			self::$peer = new CrpPeer();
		}
		return self::$peer;
	}

	
	public function initCrpActividads()
	{
		if ($this->collCrpActividads === null) {
			$this->collCrpActividads = array();
		}
	}

	
	public function getCrpActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCrpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCrpActividads === null) {
			if ($this->isNew()) {
			   $this->collCrpActividads = array();
			} else {

				$criteria->add(CrpActividadPeer::CRP_ID, $this->getId());

				CrpActividadPeer::addSelectColumns($criteria);
				$this->collCrpActividads = CrpActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CrpActividadPeer::CRP_ID, $this->getId());

				CrpActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastCrpActividadCriteria) || !$this->lastCrpActividadCriteria->equals($criteria)) {
					$this->collCrpActividads = CrpActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCrpActividadCriteria = $criteria;
		return $this->collCrpActividads;
	}

	
	public function countCrpActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCrpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CrpActividadPeer::CRP_ID, $this->getId());

		return CrpActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCrpActividad(CrpActividad $l)
	{
		$this->collCrpActividads[] = $l;
		$l->setCrp($this);
	}


	
	public function getCrpActividadsJoinActividad($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCrpActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCrpActividads === null) {
			if ($this->isNew()) {
				$this->collCrpActividads = array();
			} else {

				$criteria->add(CrpActividadPeer::CRP_ID, $this->getId());

				$this->collCrpActividads = CrpActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		} else {
									
			$criteria->add(CrpActividadPeer::CRP_ID, $this->getId());

			if (!isset($this->lastCrpActividadCriteria) || !$this->lastCrpActividadCriteria->equals($criteria)) {
				$this->collCrpActividads = CrpActividadPeer::doSelectJoinActividad($criteria, $con);
			}
		}
		$this->lastCrpActividadCriteria = $criteria;

		return $this->collCrpActividads;
	}

} 