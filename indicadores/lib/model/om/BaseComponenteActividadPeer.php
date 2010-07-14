<?php


abstract class BaseComponenteActividadPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'componente_actividad';

	
	const CLASS_DEFAULT = 'lib.model.ComponenteActividad';

	
	const NUM_COLUMNS = 4;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'componente_actividad.ID';

	
	const COMPONENTE_ID = 'componente_actividad.COMPONENTE_ID';

	
	const ACTIVIDAD_ID = 'componente_actividad.ACTIVIDAD_ID';

	
	const MONTO = 'componente_actividad.MONTO';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ComponenteId', 'ActividadId', 'Monto', ),
		BasePeer::TYPE_COLNAME => array (ComponenteActividadPeer::ID, ComponenteActividadPeer::COMPONENTE_ID, ComponenteActividadPeer::ACTIVIDAD_ID, ComponenteActividadPeer::MONTO, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'componente_id', 'actividad_id', 'monto', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ComponenteId' => 1, 'ActividadId' => 2, 'Monto' => 3, ),
		BasePeer::TYPE_COLNAME => array (ComponenteActividadPeer::ID => 0, ComponenteActividadPeer::COMPONENTE_ID => 1, ComponenteActividadPeer::ACTIVIDAD_ID => 2, ComponenteActividadPeer::MONTO => 3, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'componente_id' => 1, 'actividad_id' => 2, 'monto' => 3, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ComponenteActividadMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ComponenteActividadMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ComponenteActividadPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(ComponenteActividadPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ComponenteActividadPeer::ID);

		$criteria->addSelectColumn(ComponenteActividadPeer::COMPONENTE_ID);

		$criteria->addSelectColumn(ComponenteActividadPeer::ACTIVIDAD_ID);

		$criteria->addSelectColumn(ComponenteActividadPeer::MONTO);

	}

	const COUNT = 'COUNT(componente_actividad.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT componente_actividad.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ComponenteActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ComponenteActividadPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ComponenteActividadPeer::populateObjects(ComponenteActividadPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ComponenteActividadPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ComponenteActividadPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinComponente(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ComponenteActividadPeer::COMPONENTE_ID, ComponentePeer::ID);

		$rs = ComponenteActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinActividad(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ComponenteActividadPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = ComponenteActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinComponente(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ComponenteActividadPeer::addSelectColumns($c);
		$startcol = (ComponenteActividadPeer::NUM_COLUMNS - ComponenteActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ComponentePeer::addSelectColumns($c);

		$c->addJoin(ComponenteActividadPeer::COMPONENTE_ID, ComponentePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ComponenteActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ComponentePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getComponente(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addComponenteActividad($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initComponenteActividads();
				$obj2->addComponenteActividad($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinActividad(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ComponenteActividadPeer::addSelectColumns($c);
		$startcol = (ComponenteActividadPeer::NUM_COLUMNS - ComponenteActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ActividadPeer::addSelectColumns($c);

		$c->addJoin(ComponenteActividadPeer::ACTIVIDAD_ID, ActividadPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ComponenteActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getActividad(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addComponenteActividad($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initComponenteActividads();
				$obj2->addComponenteActividad($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ComponenteActividadPeer::COMPONENTE_ID, ComponentePeer::ID);

		$criteria->addJoin(ComponenteActividadPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = ComponenteActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ComponenteActividadPeer::addSelectColumns($c);
		$startcol2 = (ComponenteActividadPeer::NUM_COLUMNS - ComponenteActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ComponentePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ComponentePeer::NUM_COLUMNS;

		ActividadPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ActividadPeer::NUM_COLUMNS;

		$c->addJoin(ComponenteActividadPeer::COMPONENTE_ID, ComponentePeer::ID);

		$c->addJoin(ComponenteActividadPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ComponenteActividadPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getComponente(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addComponenteActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initComponenteActividads();
				$obj2->addComponenteActividad($obj1);
			}


					
			$omClass = ActividadPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getActividad(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addComponenteActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initComponenteActividads();
				$obj3->addComponenteActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptComponente(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ComponenteActividadPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = ComponenteActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptActividad(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ComponenteActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ComponenteActividadPeer::COMPONENTE_ID, ComponentePeer::ID);

		$rs = ComponenteActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptComponente(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ComponenteActividadPeer::addSelectColumns($c);
		$startcol2 = (ComponenteActividadPeer::NUM_COLUMNS - ComponenteActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ActividadPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ActividadPeer::NUM_COLUMNS;

		$c->addJoin(ComponenteActividadPeer::ACTIVIDAD_ID, ActividadPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ComponenteActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ActividadPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getActividad(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addComponenteActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initComponenteActividads();
				$obj2->addComponenteActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptActividad(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ComponenteActividadPeer::addSelectColumns($c);
		$startcol2 = (ComponenteActividadPeer::NUM_COLUMNS - ComponenteActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ComponentePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ComponentePeer::NUM_COLUMNS;

		$c->addJoin(ComponenteActividadPeer::COMPONENTE_ID, ComponentePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ComponenteActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getComponente(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addComponenteActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initComponenteActividads();
				$obj2->addComponenteActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return ComponenteActividadPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ComponenteActividadPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(ComponenteActividadPeer::ID);
			$selectCriteria->add(ComponenteActividadPeer::ID, $criteria->remove(ComponenteActividadPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(ComponenteActividadPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(ComponenteActividadPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ComponenteActividad) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ComponenteActividadPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(ComponenteActividad $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ComponenteActividadPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ComponenteActividadPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(ComponenteActividadPeer::DATABASE_NAME, ComponenteActividadPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ComponenteActividadPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(ComponenteActividadPeer::DATABASE_NAME);

		$criteria->add(ComponenteActividadPeer::ID, $pk);


		$v = ComponenteActividadPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(ComponenteActividadPeer::ID, $pks, Criteria::IN);
			$objs = ComponenteActividadPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseComponenteActividadPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ComponenteActividadMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ComponenteActividadMapBuilder');
}
