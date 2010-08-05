<?php


abstract class BaseHistoricoIndicador extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $indicador_id;


	
	protected $valor;


	
	protected $ano;


	
	protected $medicion_numero;


	
	protected $observacion;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aIndicador;

	
	protected $collHistoricoVariables;

	
	protected $lastHistoricoVariableCriteria = null;

	
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

	
	public function getValor()
	{

		return $this->valor;
	}

	
	public function getAno()
	{

		return $this->ano;
	}

	
	public function getMedicionNumero()
	{

		return $this->medicion_numero;
	}

	
	public function getObservacion()
	{

		return $this->observacion;
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
			$this->modifiedColumns[] = HistoricoIndicadorPeer::ID;
		}

	} 
	
	public function setIndicadorId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->indicador_id !== $v) {
			$this->indicador_id = $v;
			$this->modifiedColumns[] = HistoricoIndicadorPeer::INDICADOR_ID;
		}

		if ($this->aIndicador !== null && $this->aIndicador->getId() !== $v) {
			$this->aIndicador = null;
		}

	} 
	
	public function setValor($v)
	{

		if ($this->valor !== $v) {
			$this->valor = $v;
			$this->modifiedColumns[] = HistoricoIndicadorPeer::VALOR;
		}

	} 
	
	public function setAno($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ano !== $v) {
			$this->ano = $v;
			$this->modifiedColumns[] = HistoricoIndicadorPeer::ANO;
		}

	} 
	
	public function setMedicionNumero($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->medicion_numero !== $v) {
			$this->medicion_numero = $v;
			$this->modifiedColumns[] = HistoricoIndicadorPeer::MEDICION_NUMERO;
		}

	} 
	
	public function setObservacion($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->observacion !== $v) {
			$this->observacion = $v;
			$this->modifiedColumns[] = HistoricoIndicadorPeer::OBSERVACION;
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
			$this->modifiedColumns[] = HistoricoIndicadorPeer::CREATED_AT;
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
			$this->modifiedColumns[] = HistoricoIndicadorPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->indicador_id = $rs->getInt($startcol + 1);

			$this->valor = $rs->getFloat($startcol + 2);

			$this->ano = $rs->getString($startcol + 3);

			$this->medicion_numero = $rs->getInt($startcol + 4);

			$this->observacion = $rs->getString($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->updated_at = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HistoricoIndicador object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HistoricoIndicadorPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HistoricoIndicadorPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(HistoricoIndicadorPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(HistoricoIndicadorPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HistoricoIndicadorPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = HistoricoIndicadorPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HistoricoIndicadorPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


												
			if ($this->aIndicador !== null) {
				if (!$this->aIndicador->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aIndicador->getValidationFailures());
				}
			}


			if (($retval = HistoricoIndicadorPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = HistoricoIndicadorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getValor();
				break;
			case 3:
				return $this->getAno();
				break;
			case 4:
				return $this->getMedicionNumero();
				break;
			case 5:
				return $this->getObservacion();
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
		$keys = HistoricoIndicadorPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndicadorId(),
			$keys[2] => $this->getValor(),
			$keys[3] => $this->getAno(),
			$keys[4] => $this->getMedicionNumero(),
			$keys[5] => $this->getObservacion(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HistoricoIndicadorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setValor($value);
				break;
			case 3:
				$this->setAno($value);
				break;
			case 4:
				$this->setMedicionNumero($value);
				break;
			case 5:
				$this->setObservacion($value);
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
		$keys = HistoricoIndicadorPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndicadorId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setValor($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAno($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMedicionNumero($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setObservacion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HistoricoIndicadorPeer::DATABASE_NAME);

		if ($this->isColumnModified(HistoricoIndicadorPeer::ID)) $criteria->add(HistoricoIndicadorPeer::ID, $this->id);
		if ($this->isColumnModified(HistoricoIndicadorPeer::INDICADOR_ID)) $criteria->add(HistoricoIndicadorPeer::INDICADOR_ID, $this->indicador_id);
		if ($this->isColumnModified(HistoricoIndicadorPeer::VALOR)) $criteria->add(HistoricoIndicadorPeer::VALOR, $this->valor);
		if ($this->isColumnModified(HistoricoIndicadorPeer::ANO)) $criteria->add(HistoricoIndicadorPeer::ANO, $this->ano);
		if ($this->isColumnModified(HistoricoIndicadorPeer::MEDICION_NUMERO)) $criteria->add(HistoricoIndicadorPeer::MEDICION_NUMERO, $this->medicion_numero);
		if ($this->isColumnModified(HistoricoIndicadorPeer::OBSERVACION)) $criteria->add(HistoricoIndicadorPeer::OBSERVACION, $this->observacion);
		if ($this->isColumnModified(HistoricoIndicadorPeer::CREATED_AT)) $criteria->add(HistoricoIndicadorPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(HistoricoIndicadorPeer::UPDATED_AT)) $criteria->add(HistoricoIndicadorPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HistoricoIndicadorPeer::DATABASE_NAME);

		$criteria->add(HistoricoIndicadorPeer::ID, $this->id);

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

		$copyObj->setValor($this->valor);

		$copyObj->setAno($this->ano);

		$copyObj->setMedicionNumero($this->medicion_numero);

		$copyObj->setObservacion($this->observacion);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

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
			self::$peer = new HistoricoIndicadorPeer();
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

				$criteria->add(HistoricoVariablePeer::HISTORICO_INDICADOR_ID, $this->getId());

				HistoricoVariablePeer::addSelectColumns($criteria);
				$this->collHistoricoVariables = HistoricoVariablePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HistoricoVariablePeer::HISTORICO_INDICADOR_ID, $this->getId());

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

		$criteria->add(HistoricoVariablePeer::HISTORICO_INDICADOR_ID, $this->getId());

		return HistoricoVariablePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHistoricoVariable(HistoricoVariable $l)
	{
		$this->collHistoricoVariables[] = $l;
		$l->setHistoricoIndicador($this);
	}


	
	public function getHistoricoVariablesJoinVariable($criteria = null, $con = null)
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

				$criteria->add(HistoricoVariablePeer::HISTORICO_INDICADOR_ID, $this->getId());

				$this->collHistoricoVariables = HistoricoVariablePeer::doSelectJoinVariable($criteria, $con);
			}
		} else {
									
			$criteria->add(HistoricoVariablePeer::HISTORICO_INDICADOR_ID, $this->getId());

			if (!isset($this->lastHistoricoVariableCriteria) || !$this->lastHistoricoVariableCriteria->equals($criteria)) {
				$this->collHistoricoVariables = HistoricoVariablePeer::doSelectJoinVariable($criteria, $con);
			}
		}
		$this->lastHistoricoVariableCriteria = $criteria;

		return $this->collHistoricoVariables;
	}

} 