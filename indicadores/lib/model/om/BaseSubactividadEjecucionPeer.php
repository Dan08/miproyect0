<?php


abstract class BaseSubactividadEjecucionPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'subactividad_ejecucion';

	
	const CLASS_DEFAULT = 'lib.model.SubactividadEjecucion';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'subactividad_ejecucion.ID';

	
	const SUBACTIVIDAD_PROYECTO_ID = 'subactividad_ejecucion.SUBACTIVIDAD_PROYECTO_ID';

	
	const MES = 'subactividad_ejecucion.MES';

	
	const DESCRIPCION = 'subactividad_ejecucion.DESCRIPCION';

	
	const AVANCE = 'subactividad_ejecucion.AVANCE';

	
	const CREATED_AT = 'subactividad_ejecucion.CREATED_AT';

	
	const UPDATED_AT = 'subactividad_ejecucion.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'SubactividadProyectoId', 'Mes', 'Descripcion', 'Avance', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (SubactividadEjecucionPeer::ID, SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, SubactividadEjecucionPeer::MES, SubactividadEjecucionPeer::DESCRIPCION, SubactividadEjecucionPeer::AVANCE, SubactividadEjecucionPeer::CREATED_AT, SubactividadEjecucionPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'subactividad_proyecto_id', 'mes', 'descripcion', 'avance', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'SubactividadProyectoId' => 1, 'Mes' => 2, 'Descripcion' => 3, 'Avance' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
		BasePeer::TYPE_COLNAME => array (SubactividadEjecucionPeer::ID => 0, SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID => 1, SubactividadEjecucionPeer::MES => 2, SubactividadEjecucionPeer::DESCRIPCION => 3, SubactividadEjecucionPeer::AVANCE => 4, SubactividadEjecucionPeer::CREATED_AT => 5, SubactividadEjecucionPeer::UPDATED_AT => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'subactividad_proyecto_id' => 1, 'mes' => 2, 'descripcion' => 3, 'avance' => 4, 'created_at' => 5, 'updated_at' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SubactividadEjecucionMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SubactividadEjecucionMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SubactividadEjecucionPeer::getTableMap();
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
		return str_replace(SubactividadEjecucionPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SubactividadEjecucionPeer::ID);

		$criteria->addSelectColumn(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID);

		$criteria->addSelectColumn(SubactividadEjecucionPeer::MES);

		$criteria->addSelectColumn(SubactividadEjecucionPeer::DESCRIPCION);

		$criteria->addSelectColumn(SubactividadEjecucionPeer::AVANCE);

		$criteria->addSelectColumn(SubactividadEjecucionPeer::CREATED_AT);

		$criteria->addSelectColumn(SubactividadEjecucionPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(subactividad_ejecucion.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT subactividad_ejecucion.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadEjecucionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadEjecucionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SubactividadEjecucionPeer::doSelectRS($criteria, $con);
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
		$objects = SubactividadEjecucionPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SubactividadEjecucionPeer::populateObjects(SubactividadEjecucionPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SubactividadEjecucionPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SubactividadEjecucionPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinSubactividadProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadEjecucionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadEjecucionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, SubactividadProyectoPeer::ID);

		$rs = SubactividadEjecucionPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinSubactividadProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubactividadEjecucionPeer::addSelectColumns($c);
		$startcol = (SubactividadEjecucionPeer::NUM_COLUMNS - SubactividadEjecucionPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SubactividadProyectoPeer::addSelectColumns($c);

		$c->addJoin(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, SubactividadProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadEjecucionPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SubactividadProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSubactividadProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSubactividadEjecucion($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSubactividadEjecucions();
				$obj2->addSubactividadEjecucion($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadEjecucionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadEjecucionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, SubactividadProyectoPeer::ID);

		$rs = SubactividadEjecucionPeer::doSelectRS($criteria, $con);
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

		SubactividadEjecucionPeer::addSelectColumns($c);
		$startcol2 = (SubactividadEjecucionPeer::NUM_COLUMNS - SubactividadEjecucionPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SubactividadProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SubactividadProyectoPeer::NUM_COLUMNS;

		$c->addJoin(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, SubactividadProyectoPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadEjecucionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = SubactividadProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSubactividadProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSubactividadEjecucion($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSubactividadEjecucions();
				$obj2->addSubactividadEjecucion($obj1);
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
		return SubactividadEjecucionPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SubactividadEjecucionPeer::ID); 

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
			$comparison = $criteria->getComparison(SubactividadEjecucionPeer::ID);
			$selectCriteria->add(SubactividadEjecucionPeer::ID, $criteria->remove(SubactividadEjecucionPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SubactividadEjecucionPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SubactividadEjecucionPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SubactividadEjecucion) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SubactividadEjecucionPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SubactividadEjecucion $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubactividadEjecucionPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubactividadEjecucionPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubactividadEjecucionPeer::DATABASE_NAME, SubactividadEjecucionPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubactividadEjecucionPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SubactividadEjecucionPeer::DATABASE_NAME);

		$criteria->add(SubactividadEjecucionPeer::ID, $pk);


		$v = SubactividadEjecucionPeer::doSelect($criteria, $con);

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
			$criteria->add(SubactividadEjecucionPeer::ID, $pks, Criteria::IN);
			$objs = SubactividadEjecucionPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSubactividadEjecucionPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SubactividadEjecucionMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SubactividadEjecucionMapBuilder');
}
