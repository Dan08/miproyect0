<?php


abstract class BaseSubactividadProcedimientoPoaEjecucionPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'subactividad_procedimiento_poa_ejecucion';

	
	const CLASS_DEFAULT = 'lib.model.SubactividadProcedimientoPoaEjecucion';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'subactividad_procedimiento_poa_ejecucion.ID';

	
	const SUBACTIVIDAD_POA_ID = 'subactividad_procedimiento_poa_ejecucion.SUBACTIVIDAD_POA_ID';

	
	const MES = 'subactividad_procedimiento_poa_ejecucion.MES';

	
	const DESCRIPCION = 'subactividad_procedimiento_poa_ejecucion.DESCRIPCION';

	
	const AVANCE = 'subactividad_procedimiento_poa_ejecucion.AVANCE';

	
	const CREATED_AT = 'subactividad_procedimiento_poa_ejecucion.CREATED_AT';

	
	const UPDATED_AT = 'subactividad_procedimiento_poa_ejecucion.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'SubactividadPoaId', 'Mes', 'Descripcion', 'Avance', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (SubactividadProcedimientoPoaEjecucionPeer::ID, SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, SubactividadProcedimientoPoaEjecucionPeer::MES, SubactividadProcedimientoPoaEjecucionPeer::DESCRIPCION, SubactividadProcedimientoPoaEjecucionPeer::AVANCE, SubactividadProcedimientoPoaEjecucionPeer::CREATED_AT, SubactividadProcedimientoPoaEjecucionPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'subactividad_poa_id', 'mes', 'descripcion', 'avance', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'SubactividadPoaId' => 1, 'Mes' => 2, 'Descripcion' => 3, 'Avance' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
		BasePeer::TYPE_COLNAME => array (SubactividadProcedimientoPoaEjecucionPeer::ID => 0, SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID => 1, SubactividadProcedimientoPoaEjecucionPeer::MES => 2, SubactividadProcedimientoPoaEjecucionPeer::DESCRIPCION => 3, SubactividadProcedimientoPoaEjecucionPeer::AVANCE => 4, SubactividadProcedimientoPoaEjecucionPeer::CREATED_AT => 5, SubactividadProcedimientoPoaEjecucionPeer::UPDATED_AT => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'subactividad_poa_id' => 1, 'mes' => 2, 'descripcion' => 3, 'avance' => 4, 'created_at' => 5, 'updated_at' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SubactividadProcedimientoPoaEjecucionMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SubactividadProcedimientoPoaEjecucionMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SubactividadProcedimientoPoaEjecucionPeer::getTableMap();
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
		return str_replace(SubactividadProcedimientoPoaEjecucionPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::ID);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::MES);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::DESCRIPCION);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::AVANCE);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::CREATED_AT);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(subactividad_procedimiento_poa_ejecucion.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT subactividad_procedimiento_poa_ejecucion.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SubactividadProcedimientoPoaEjecucionPeer::doSelectRS($criteria, $con);
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
		$objects = SubactividadProcedimientoPoaEjecucionPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SubactividadProcedimientoPoaEjecucionPeer::populateObjects(SubactividadProcedimientoPoaEjecucionPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SubactividadProcedimientoPoaEjecucionPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SubactividadProcedimientoPoaEjecucionPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinSubactividadProcedimientoPoa(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, SubactividadProcedimientoPoaPeer::ID);

		$rs = SubactividadProcedimientoPoaEjecucionPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinSubactividadProcedimientoPoa(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubactividadProcedimientoPoaEjecucionPeer::addSelectColumns($c);
		$startcol = (SubactividadProcedimientoPoaEjecucionPeer::NUM_COLUMNS - SubactividadProcedimientoPoaEjecucionPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SubactividadProcedimientoPoaPeer::addSelectColumns($c);

		$c->addJoin(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, SubactividadProcedimientoPoaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadProcedimientoPoaEjecucionPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SubactividadProcedimientoPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSubactividadProcedimientoPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSubactividadProcedimientoPoaEjecucion($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSubactividadProcedimientoPoaEjecucions();
				$obj2->addSubactividadProcedimientoPoaEjecucion($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaEjecucionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, SubactividadProcedimientoPoaPeer::ID);

		$rs = SubactividadProcedimientoPoaEjecucionPeer::doSelectRS($criteria, $con);
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

		SubactividadProcedimientoPoaEjecucionPeer::addSelectColumns($c);
		$startcol2 = (SubactividadProcedimientoPoaEjecucionPeer::NUM_COLUMNS - SubactividadProcedimientoPoaEjecucionPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SubactividadProcedimientoPoaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SubactividadProcedimientoPoaPeer::NUM_COLUMNS;

		$c->addJoin(SubactividadProcedimientoPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, SubactividadProcedimientoPoaPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadProcedimientoPoaEjecucionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = SubactividadProcedimientoPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSubactividadProcedimientoPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSubactividadProcedimientoPoaEjecucion($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSubactividadProcedimientoPoaEjecucions();
				$obj2->addSubactividadProcedimientoPoaEjecucion($obj1);
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
		return SubactividadProcedimientoPoaEjecucionPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SubactividadProcedimientoPoaEjecucionPeer::ID); 

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
			$comparison = $criteria->getComparison(SubactividadProcedimientoPoaEjecucionPeer::ID);
			$selectCriteria->add(SubactividadProcedimientoPoaEjecucionPeer::ID, $criteria->remove(SubactividadProcedimientoPoaEjecucionPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SubactividadProcedimientoPoaEjecucionPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SubactividadProcedimientoPoaEjecucionPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SubactividadProcedimientoPoaEjecucion) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SubactividadProcedimientoPoaEjecucionPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SubactividadProcedimientoPoaEjecucion $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubactividadProcedimientoPoaEjecucionPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubactividadProcedimientoPoaEjecucionPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubactividadProcedimientoPoaEjecucionPeer::DATABASE_NAME, SubactividadProcedimientoPoaEjecucionPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubactividadProcedimientoPoaEjecucionPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SubactividadProcedimientoPoaEjecucionPeer::DATABASE_NAME);

		$criteria->add(SubactividadProcedimientoPoaEjecucionPeer::ID, $pk);


		$v = SubactividadProcedimientoPoaEjecucionPeer::doSelect($criteria, $con);

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
			$criteria->add(SubactividadProcedimientoPoaEjecucionPeer::ID, $pks, Criteria::IN);
			$objs = SubactividadProcedimientoPoaEjecucionPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSubactividadProcedimientoPoaEjecucionPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SubactividadProcedimientoPoaEjecucionMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SubactividadProcedimientoPoaEjecucionMapBuilder');
}
