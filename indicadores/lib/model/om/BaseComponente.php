<?php


abstract class BaseComponente extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $codigo;


	
	protected $componente;

	
	protected $collActividads;

	
	protected $lastActividadCriteria = null;

	
	protected $collComponenteProyectos;

	
	protected $lastComponenteProyectoCriteria = null;

	
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

	
	public function getComponente()
	{

		return $this->componente;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ComponentePeer::ID;
		}

	} 
	
	public function setCodigo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->codigo !== $v) {
			$this->codigo = $v;
			$this->modifiedColumns[] = ComponentePeer::CODIGO;
		}

	} 
	
	public function setComponente($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->componente !== $v) {
			$this->componente = $v;
			$this->modifiedColumns[] = ComponentePeer::COMPONENTE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->codigo = $rs->getString($startcol + 1);

			$this->componente = $rs->getString($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Componente object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ComponentePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ComponentePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ComponentePeer::DATABASE_NAME);
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
					$pk = ComponentePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ComponentePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collActividads !== null) {
				foreach($this->collActividads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collComponenteProyectos !== null) {
				foreach($this->collComponenteProyectos as $referrerFK) {
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


			if (($retval = ComponentePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collActividads !== null) {
					foreach($this->collActividads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collComponenteProyectos !== null) {
					foreach($this->collComponenteProyectos as $referrerFK) {
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
		$pos = ComponentePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getComponente();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ComponentePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCodigo(),
			$keys[2] => $this->getComponente(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ComponentePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setComponente($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ComponentePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodigo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setComponente($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ComponentePeer::DATABASE_NAME);

		if ($this->isColumnModified(ComponentePeer::ID)) $criteria->add(ComponentePeer::ID, $this->id);
		if ($this->isColumnModified(ComponentePeer::CODIGO)) $criteria->add(ComponentePeer::CODIGO, $this->codigo);
		if ($this->isColumnModified(ComponentePeer::COMPONENTE)) $criteria->add(ComponentePeer::COMPONENTE, $this->componente);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ComponentePeer::DATABASE_NAME);

		$criteria->add(ComponentePeer::ID, $this->id);

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

		$copyObj->setComponente($this->componente);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getActividads() as $relObj) {
				$copyObj->addActividad($relObj->copy($deepCopy));
			}

			foreach($this->getComponenteProyectos() as $relObj) {
				$copyObj->addComponenteProyecto($relObj->copy($deepCopy));
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
			self::$peer = new ComponentePeer();
		}
		return self::$peer;
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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				ActividadPeer::addSelectColumns($criteria);
				$this->collActividads = ActividadPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

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

		$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

		return ActividadPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addActividad(Actividad $l)
	{
		$this->collActividads[] = $l;
		$l->setComponente($this);
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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinTipoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinComponenteSector($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinConceptoGasto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinMetaProyecto($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}


	
	public function getActividadsJoinDependencia($criteria = null, $con = null)
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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinDependencia($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinDependencia($criteria, $con);
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

				$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

				$this->collActividads = ActividadPeer::doSelectJoinContrato($criteria, $con);
			}
		} else {
									
			$criteria->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getId());

			if (!isset($this->lastActividadCriteria) || !$this->lastActividadCriteria->equals($criteria)) {
				$this->collActividads = ActividadPeer::doSelectJoinContrato($criteria, $con);
			}
		}
		$this->lastActividadCriteria = $criteria;

		return $this->collActividads;
	}

	
	public function initComponenteProyectos()
	{
		if ($this->collComponenteProyectos === null) {
			$this->collComponenteProyectos = array();
		}
	}

	
	public function getComponenteProyectos($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponenteProyectos === null) {
			if ($this->isNew()) {
			   $this->collComponenteProyectos = array();
			} else {

				$criteria->add(ComponenteProyectoPeer::COMPONENTE_ID, $this->getId());

				ComponenteProyectoPeer::addSelectColumns($criteria);
				$this->collComponenteProyectos = ComponenteProyectoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ComponenteProyectoPeer::COMPONENTE_ID, $this->getId());

				ComponenteProyectoPeer::addSelectColumns($criteria);
				if (!isset($this->lastComponenteProyectoCriteria) || !$this->lastComponenteProyectoCriteria->equals($criteria)) {
					$this->collComponenteProyectos = ComponenteProyectoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastComponenteProyectoCriteria = $criteria;
		return $this->collComponenteProyectos;
	}

	
	public function countComponenteProyectos($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ComponenteProyectoPeer::COMPONENTE_ID, $this->getId());

		return ComponenteProyectoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addComponenteProyecto(ComponenteProyecto $l)
	{
		$this->collComponenteProyectos[] = $l;
		$l->setComponente($this);
	}


	
	public function getComponenteProyectosJoinProyecto($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseComponenteProyectoPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComponenteProyectos === null) {
			if ($this->isNew()) {
				$this->collComponenteProyectos = array();
			} else {

				$criteria->add(ComponenteProyectoPeer::COMPONENTE_ID, $this->getId());

				$this->collComponenteProyectos = ComponenteProyectoPeer::doSelectJoinProyecto($criteria, $con);
			}
		} else {
									
			$criteria->add(ComponenteProyectoPeer::COMPONENTE_ID, $this->getId());

			if (!isset($this->lastComponenteProyectoCriteria) || !$this->lastComponenteProyectoCriteria->equals($criteria)) {
				$this->collComponenteProyectos = ComponenteProyectoPeer::doSelectJoinProyecto($criteria, $con);
			}
		}
		$this->lastComponenteProyectoCriteria = $criteria;

		return $this->collComponenteProyectos;
	}

} 