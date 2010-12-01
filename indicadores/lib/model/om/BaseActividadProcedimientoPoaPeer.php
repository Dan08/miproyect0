<?php


abstract class BaseActividadProcedimientoPoaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'actividad_procedimiento_poa';

	
	const CLASS_DEFAULT = 'lib.model.ActividadProcedimientoPoa';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'actividad_procedimiento_poa.ID';

	
	const PROCEDIMIENTO_POA_ID = 'actividad_procedimiento_poa.PROCEDIMIENTO_POA_ID';

	
	const ACTIVIDAD = 'actividad_procedimiento_poa.ACTIVIDAD';

	
	const DESCRIPCION = 'actividad_procedimiento_poa.DESCRIPCION';

	
	const PONDERACION = 'actividad_procedimiento_poa.PONDERACION';

	
	const CREATED_AT = 'actividad_procedimiento_poa.CREATED_AT';

	
	const UPDATED_AT = 'actividad_procedimiento_poa.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ProcedimientoPoaId', 'Actividad', 'Descripcion', 'Ponderacion', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (ActividadProcedimientoPoaPeer::ID, ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, ActividadProcedimientoPoaPeer::ACTIVIDAD, ActividadProcedimientoPoaPeer::DESCRIPCION, ActividadProcedimientoPoaPeer::PONDERACION, ActividadProcedimientoPoaPeer::CREATED_AT, ActividadProcedimientoPoaPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'procedimiento_poa_id', 'actividad', 'descripcion', 'ponderacion', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ProcedimientoPoaId' => 1, 'Actividad' => 2, 'Descripcion' => 3, 'Ponderacion' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
		BasePeer::TYPE_COLNAME => array (ActividadProcedimientoPoaPeer::ID => 0, ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID => 1, ActividadProcedimientoPoaPeer::ACTIVIDAD => 2, ActividadProcedimientoPoaPeer::DESCRIPCION => 3, ActividadProcedimientoPoaPeer::PONDERACION => 4, ActividadProcedimientoPoaPeer::CREATED_AT => 5, ActividadProcedimientoPoaPeer::UPDATED_AT => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'procedimiento_poa_id' => 1, 'actividad' => 2, 'descripcion' => 3, 'ponderacion' => 4, 'created_at' => 5, 'updated_at' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ActividadProcedimientoPoaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ActividadProcedimientoPoaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ActividadProcedimientoPoaPeer::getTableMap();
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
		return str_replace(ActividadProcedimientoPoaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::ID);

		$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID);

		$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::ACTIVIDAD);

		$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::DESCRIPCION);

		$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::PONDERACION);

		$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::CREATED_AT);

		$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(actividad_procedimiento_poa.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT actividad_procedimiento_poa.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ActividadProcedimientoPoaPeer::doSelectRS($criteria, $con);
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
		$objects = ActividadProcedimientoPoaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ActividadProcedimientoPoaPeer::populateObjects(ActividadProcedimientoPoaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ActividadProcedimientoPoaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ActividadProcedimientoPoaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinProcedimientoPoa(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, ProcedimientoPoaPeer::ID);

		$rs = ActividadProcedimientoPoaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinProcedimientoPoa(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadProcedimientoPoaPeer::addSelectColumns($c);
		$startcol = (ActividadProcedimientoPoaPeer::NUM_COLUMNS - ActividadProcedimientoPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProcedimientoPoaPeer::addSelectColumns($c);

		$c->addJoin(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, ProcedimientoPoaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadProcedimientoPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProcedimientoPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getProcedimientoPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addActividadProcedimientoPoa($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initActividadProcedimientoPoas();
				$obj2->addActividadProcedimientoPoa($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadProcedimientoPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, ProcedimientoPoaPeer::ID);

		$rs = ActividadProcedimientoPoaPeer::doSelectRS($criteria, $con);
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

		ActividadProcedimientoPoaPeer::addSelectColumns($c);
		$startcol2 = (ActividadProcedimientoPoaPeer::NUM_COLUMNS - ActividadProcedimientoPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProcedimientoPoaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProcedimientoPoaPeer::NUM_COLUMNS;

		$c->addJoin(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, ProcedimientoPoaPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadProcedimientoPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ProcedimientoPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getProcedimientoPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addActividadProcedimientoPoa($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initActividadProcedimientoPoas();
				$obj2->addActividadProcedimientoPoa($obj1);
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
		return ActividadProcedimientoPoaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ActividadProcedimientoPoaPeer::ID); 

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
			$comparison = $criteria->getComparison(ActividadProcedimientoPoaPeer::ID);
			$selectCriteria->add(ActividadProcedimientoPoaPeer::ID, $criteria->remove(ActividadProcedimientoPoaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ActividadProcedimientoPoaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ActividadProcedimientoPoaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ActividadProcedimientoPoa) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ActividadProcedimientoPoaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ActividadProcedimientoPoa $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ActividadProcedimientoPoaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ActividadProcedimientoPoaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ActividadProcedimientoPoaPeer::DATABASE_NAME, ActividadProcedimientoPoaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ActividadProcedimientoPoaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ActividadProcedimientoPoaPeer::DATABASE_NAME);

		$criteria->add(ActividadProcedimientoPoaPeer::ID, $pk);


		$v = ActividadProcedimientoPoaPeer::doSelect($criteria, $con);

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
			$criteria->add(ActividadProcedimientoPoaPeer::ID, $pks, Criteria::IN);
			$objs = ActividadProcedimientoPoaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseActividadProcedimientoPoaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ActividadProcedimientoPoaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ActividadProcedimientoPoaMapBuilder');
}
