<?php


abstract class BaseDependencia extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nombre;

	
	protected $collIndicadorsRelatedByResponsableId;

	
	protected $lastIndicadorRelatedByResponsableIdCriteria = null;

	
	protected $collIndicadorsRelatedByQuienId;

	
	protected $lastIndicadorRelatedByQuienIdCriteria = null;

	
	protected $collCargos;

	
	protected $lastCargoCriteria = null;

	
	protected $collActividads;

	
	protected $lastActividadCriteria = null;

	
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DependenciaPeer::ID;
		}

	} 
	
	public function setNombre($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = DependenciaPeer::NOMBRE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->nombre = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Dependencia object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DependenciaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DependenciaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(DependenciaPeer::DATABASE_NAME);
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
					$pk = DependenciaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DependenciaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collIndicadorsRelatedByResponsableId !== null) {
				foreach($this->collIndicadorsRelatedByResponsableId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collIndicadorsRelatedByQuienId !== null) {
				foreach($this->collIndicadorsRelatedByQuienId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCargos !== null) {
				foreach($this->collCargos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collActividads !== null) {
				foreach($this->collActividads as $referrerFK) {
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


			if (($retval = DependenciaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collIndicadorsRelatedByResponsableId !== null) {
					foreach($this->collIndicadorsRelatedByResponsableId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collIndicadorsRelatedByQuienId !== null) {
					foreach($this->collIndicadorsRelatedByQuienId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCargos !== null) {
					foreach($this->collCargos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collActividads !== null) {
					foreach($this->collActividads as $referrerFK) {
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
		$pos = DependenciaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DependenciaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNombre(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DependenciaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DependenciaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DependenciaPeer::DATABASE_NAME);

		if ($this->isColumnModified(DependenciaPeer::ID)) $criteria->add(DependenciaPeer::ID, $this->id);
		if ($this->isColumnModified(DependenciaPeer::NOMBRE)) $criteria->add(DependenciaPeer::NOMBRE, $this->nombre);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DependenciaPeer::DATABASE_NAME);

		$criteria->add(DependenciaPeer::ID, $this->id);

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


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getIndicadorsRelatedByResponsableId() as $relObj) {
				$copyObj->addIndicadorRelatedByResponsableId($relObj->copy($deepCopy));
			}

			foreach($this->getIndicadorsRelatedByQuienId() as $relObj) {
				$copyObj->addIndicadorRelatedByQuienId($relObj->copy($deepCopy));
			}

			foreach($this->getCargos() as $relObj) {
				$copyObj->addCargo($relObj->copy($deepCopy));
			}

			foreach($this->getActividads() as $relObj) {
				$copyObj->addActividad($relObj->copy($deepCopy));
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
			self::$peer = new DependenciaPeer();
		}
		return self::$peer;
	}

	
	public function initIndicadorsRelatedByResponsableId()
	{
		if ($this->collIndicadorsRelatedByResponsableId === null) {
			$this->collIndicadorsRelatedByResponsableId = array();
		}
	}

	
	public function getIndicadorsRelatedByResponsableId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorsRelatedByResponsableId === null) {
			if ($this->isNew()) {
			   $this->collIndicadorsRelatedByResponsableId = array();
			} else {

				$criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->getId());

				IndicadorPeer::addSelectColumns($criteria);
				$this->collIndicadorsRelatedByResponsableId = IndicadorPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->getId());

				IndicadorPeer::addSelectColumns($criteria);
				if (!isset($this->lastIndicadorRelatedByResponsableIdCriteria) || !$this->lastIndicadorRelatedByResponsableIdCriteria->equals($criteria)) {
					$this->collIndicadorsRelatedByResponsableId = IndicadorPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastIndicadorRelatedByResponsableIdCriteria = $criteria;
		return $this->collIndicadorsRelatedByResponsableId;
	}

	
	public function countIndicadorsRelatedByResponsableId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->getId());

		return IndicadorPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicadorRelatedByResponsableId(Indicador $l)
	{
		$this->collIndicadorsRelatedByResponsableId[] = $l;
		$l->setDependenciaRelatedByResponsableId($this);
	}


	
	public function getIndicadorsRelatedByResponsableIdJoinObjetivo($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorsRelatedByResponsableId === null) {
			if ($this->isNew()) {
				$this->collIndicadorsRelatedByResponsableId = array();
			} else {

				$criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->getId());

				$this->collIndicadorsRelatedByResponsableId = IndicadorPeer::doSelectJoinObjetivo($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->getId());

			if (!isset($this->lastIndicadorRelatedByResponsableIdCriteria) || !$this->lastIndicadorRelatedByResponsableIdCriteria->equals($criteria)) {
				$this->collIndicadorsRelatedByResponsableId = IndicadorPeer::doSelectJoinObjetivo($criteria, $con);
			}
		}
		$this->lastIndicadorRelatedByResponsableIdCriteria = $criteria;

		return $this->collIndicadorsRelatedByResponsableId;
	}


	
	public function getIndicadorsRelatedByResponsableIdJoinCategoria($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorsRelatedByResponsableId === null) {
			if ($this->isNew()) {
				$this->collIndicadorsRelatedByResponsableId = array();
			} else {

				$criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->getId());

				$this->collIndicadorsRelatedByResponsableId = IndicadorPeer::doSelectJoinCategoria($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::RESPONSABLE_ID, $this->getId());

			if (!isset($this->lastIndicadorRelatedByResponsableIdCriteria) || !$this->lastIndicadorRelatedByResponsableIdCriteria->equals($criteria)) {
				$this->collIndicadorsRelatedByResponsableId = IndicadorPeer::doSelectJoinCategoria($criteria, $con);
			}
		}
		$this->lastIndicadorRelatedByResponsableIdCriteria = $criteria;

		return $this->collIndicadorsRelatedByResponsableId;
	}

	
	public function initIndicadorsRelatedByQuienId()
	{
		if ($this->collIndicadorsRelatedByQuienId === null) {
			$this->collIndicadorsRelatedByQuienId = array();
		}
	}

	
	public function getIndicadorsRelatedByQuienId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorsRelatedByQuienId === null) {
			if ($this->isNew()) {
			   $this->collIndicadorsRelatedByQuienId = array();
			} else {

				$criteria->add(IndicadorPeer::QUIEN_ID, $this->getId());

				IndicadorPeer::addSelectColumns($criteria);
				$this->collIndicadorsRelatedByQuienId = IndicadorPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IndicadorPeer::QUIEN_ID, $this->getId());

				IndicadorPeer::addSelectColumns($criteria);
				if (!isset($this->lastIndicadorRelatedByQuienIdCriteria) || !$this->lastIndicadorRelatedByQuienIdCriteria->equals($criteria)) {
					$this->collIndicadorsRelatedByQuienId = IndicadorPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastIndicadorRelatedByQuienIdCriteria = $criteria;
		return $this->collIndicadorsRelatedByQuienId;
	}

	
	public function countIndicadorsRelatedByQuienId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(IndicadorPeer::QUIEN_ID, $this->getId());

		return IndicadorPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIndicadorRelatedByQuienId(Indicador $l)
	{
		$this->collIndicadorsRelatedByQuienId[] = $l;
		$l->setDependenciaRelatedByQuienId($this);
	}


	
	public function getIndicadorsRelatedByQuienIdJoinObjetivo($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorsRelatedByQuienId === null) {
			if ($this->isNew()) {
				$this->collIndicadorsRelatedByQuienId = array();
			} else {

				$criteria->add(IndicadorPeer::QUIEN_ID, $this->getId());

				$this->collIndicadorsRelatedByQuienId = IndicadorPeer::doSelectJoinObjetivo($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::QUIEN_ID, $this->getId());

			if (!isset($this->lastIndicadorRelatedByQuienIdCriteria) || !$this->lastIndicadorRelatedByQuienIdCriteria->equals($criteria)) {
				$this->collIndicadorsRelatedByQuienId = IndicadorPeer::doSelectJoinObjetivo($criteria, $con);
			}
		}
		$this->lastIndicadorRelatedByQuienIdCriteria = $criteria;

		return $this->collIndicadorsRelatedByQuienId;
	}


	
	public function getIndicadorsRelatedByQuienIdJoinCategoria($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIndicadorPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIndicadorsRelatedByQuienId === null) {
			if ($this->isNew()) {
				$this->collIndicadorsRelatedByQuienId = array();
			} else {

				$criteria->add(IndicadorPeer::QUIEN_ID, $this->getId());

				$this->collIndicadorsRelatedByQuienId = IndicadorPeer::doSelectJoinCategoria($criteria, $con);
			}
		} else {
									
			$criteria->add(IndicadorPeer::QUIEN_ID, $this->getId());

			if (!isset($this->lastIndicadorRelatedByQuienIdCriteria) || !$this->lastIndicadorRelatedByQuienIdCriteria->equals($criteria)) {
				$this->collIndicadorsRelatedByQuienId = IndicadorPeer::doSelectJoinCategoria($criteria, $con);
			}
		}
		$this->lastIndicadorRelatedByQuienIdCriteria = $criteria;

		return $this->collIndicadorsRelatedByQuienId;
	}

	
	public function initCargos()
	{
		if ($this->collCargos === null) {
			$this->collCargos = array();
		}
	}

	
	public function getCargos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCargoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCargos === null) {
			if ($this->isNew()) {
			   $this->collCargos = array();
			} else {

				$criteria->add(CargoPeer::DEPENDENCIA_ID, $this->getId());

				CargoPeer::addSelectColumns($criteria);
				$this->collCargos = CargoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CargoPeer::DEPENDENCIA_ID, $this->getId());

				CargoPeer::addSelectColumns($criteria);
				if (!isset($this->lastCargoCriteria) || !$this->lastCargoCriteria->equals($criteria)) {
					$this->collCargos = CargoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCargoCriteria = $criteria;
		return $this->collCargos;
	}

	
	public function countCargos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCargoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CargoPeer::DEPENDENCIA_ID, $this->getId());

		return CargoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCargo(Cargo $l)
	{
		$this->collCargos[] = $l;
		$l->setDependencia($this);
	}

	
	public function initActividads()
	{
		if ($this->collActividads === null) {
			$this->collActividads = array();
		}
	}

	
	public function getActividads($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
			   $this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				$this->collActividads = ActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
					$this->collActividads = ActividadPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastActividadCriteria = $criteria;
		return $this->collActividads;
	}

	
	public function countActividads($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

		return ActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividad(Actividad $l)
	{
		$this->collActividads[] = $l;
		$l->setDependencia($this);
	}


	
	public function getActividadsJoinProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinProyecto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinTipoGasto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinTipoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinTipoGasto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinComponenteSector($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinComponenteSector($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinComponenteSector($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinConceptoGasto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinConceptoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinConceptoGasto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinMetaProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinComponente($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinComponente($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinContrato($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseActividadPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collActividads === null) {
			if ($this->isNew()) {
				$this->collActividads = array();
			} else {

				$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinContrato($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::AREA_RESPONSABLE, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinContrato($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}

} 