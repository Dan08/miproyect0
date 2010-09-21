<?php


abstract class BaseSubactividadPoaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'subactividad_poa';

	
	const CLASS_DEFAULT = 'lib.model.SubactividadPoa';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'subactividad_poa.ID';

	
	const PROCEDIMIENTO_ID = 'subactividad_poa.PROCEDIMIENTO_ID';

	
	const DESCRIPCION = 'subactividad_poa.DESCRIPCION';

	
	const RESPONSABLE = 'subactividad_poa.RESPONSABLE';

	
	const ENTREGABLE = 'subactividad_poa.ENTREGABLE';

	
	const FECHA_INICIO = 'subactividad_poa.FECHA_INICIO';

	
	const DURACION = 'subactividad_poa.DURACION';

	
	const PONDERACION = 'subactividad_poa.PONDERACION';

	
	const CREATED_AT = 'subactividad_poa.CREATED_AT';

	
	const UPDATED_AT = 'subactividad_poa.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ProcedimientoId', 'Descripcion', 'Responsable', 'Entregable', 'FechaInicio', 'Duracion', 'Ponderacion', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (SubactividadPoaPeer::ID, SubactividadPoaPeer::PROCEDIMIENTO_ID, SubactividadPoaPeer::DESCRIPCION, SubactividadPoaPeer::RESPONSABLE, SubactividadPoaPeer::ENTREGABLE, SubactividadPoaPeer::FECHA_INICIO, SubactividadPoaPeer::DURACION, SubactividadPoaPeer::PONDERACION, SubactividadPoaPeer::CREATED_AT, SubactividadPoaPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'procedimiento_id', 'descripcion', 'responsable', 'entregable', 'fecha_inicio', 'duracion', 'ponderacion', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ProcedimientoId' => 1, 'Descripcion' => 2, 'Responsable' => 3, 'Entregable' => 4, 'FechaInicio' => 5, 'Duracion' => 6, 'Ponderacion' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ),
		BasePeer::TYPE_COLNAME => array (SubactividadPoaPeer::ID => 0, SubactividadPoaPeer::PROCEDIMIENTO_ID => 1, SubactividadPoaPeer::DESCRIPCION => 2, SubactividadPoaPeer::RESPONSABLE => 3, SubactividadPoaPeer::ENTREGABLE => 4, SubactividadPoaPeer::FECHA_INICIO => 5, SubactividadPoaPeer::DURACION => 6, SubactividadPoaPeer::PONDERACION => 7, SubactividadPoaPeer::CREATED_AT => 8, SubactividadPoaPeer::UPDATED_AT => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'procedimiento_id' => 1, 'descripcion' => 2, 'responsable' => 3, 'entregable' => 4, 'fecha_inicio' => 5, 'duracion' => 6, 'ponderacion' => 7, 'created_at' => 8, 'updated_at' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SubactividadPoaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SubactividadPoaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SubactividadPoaPeer::getTableMap();
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
		return str_replace(SubactividadPoaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SubactividadPoaPeer::ID);

		$criteria->addSelectColumn(SubactividadPoaPeer::PROCEDIMIENTO_ID);

		$criteria->addSelectColumn(SubactividadPoaPeer::DESCRIPCION);

		$criteria->addSelectColumn(SubactividadPoaPeer::RESPONSABLE);

		$criteria->addSelectColumn(SubactividadPoaPeer::ENTREGABLE);

		$criteria->addSelectColumn(SubactividadPoaPeer::FECHA_INICIO);

		$criteria->addSelectColumn(SubactividadPoaPeer::DURACION);

		$criteria->addSelectColumn(SubactividadPoaPeer::PONDERACION);

		$criteria->addSelectColumn(SubactividadPoaPeer::CREATED_AT);

		$criteria->addSelectColumn(SubactividadPoaPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(subactividad_poa.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT subactividad_poa.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SubactividadPoaPeer::doSelectRS($criteria, $con);
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
		$objects = SubactividadPoaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SubactividadPoaPeer::populateObjects(SubactividadPoaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SubactividadPoaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SubactividadPoaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinProcedimiento(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadPoaPeer::PROCEDIMIENTO_ID, ProcedimientoPeer::ID);

		$rs = SubactividadPoaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinProcedimiento(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubactividadPoaPeer::addSelectColumns($c);
		$startcol = (SubactividadPoaPeer::NUM_COLUMNS - SubactividadPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProcedimientoPeer::addSelectColumns($c);

		$c->addJoin(SubactividadPoaPeer::PROCEDIMIENTO_ID, ProcedimientoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProcedimientoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getProcedimiento(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSubactividadPoa($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSubactividadPoas();
				$obj2->addSubactividadPoa($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadPoaPeer::PROCEDIMIENTO_ID, ProcedimientoPeer::ID);

		$rs = SubactividadPoaPeer::doSelectRS($criteria, $con);
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

		SubactividadPoaPeer::addSelectColumns($c);
		$startcol2 = (SubactividadPoaPeer::NUM_COLUMNS - SubactividadPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProcedimientoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProcedimientoPeer::NUM_COLUMNS;

		$c->addJoin(SubactividadPoaPeer::PROCEDIMIENTO_ID, ProcedimientoPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ProcedimientoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getProcedimiento(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSubactividadPoa($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSubactividadPoas();
				$obj2->addSubactividadPoa($obj1);
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
		return SubactividadPoaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SubactividadPoaPeer::ID); 

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
			$comparison = $criteria->getComparison(SubactividadPoaPeer::ID);
			$selectCriteria->add(SubactividadPoaPeer::ID, $criteria->remove(SubactividadPoaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SubactividadPoaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SubactividadPoaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SubactividadPoa) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SubactividadPoaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SubactividadPoa $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubactividadPoaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubactividadPoaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubactividadPoaPeer::DATABASE_NAME, SubactividadPoaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubactividadPoaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SubactividadPoaPeer::DATABASE_NAME);

		$criteria->add(SubactividadPoaPeer::ID, $pk);


		$v = SubactividadPoaPeer::doSelect($criteria, $con);

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
			$criteria->add(SubactividadPoaPeer::ID, $pks, Criteria::IN);
			$objs = SubactividadPoaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSubactividadPoaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SubactividadPoaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SubactividadPoaMapBuilder');
}
