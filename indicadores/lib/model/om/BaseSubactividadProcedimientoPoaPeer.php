<?php


abstract class BaseSubactividadProcedimientoPoaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'subactividad_procedimiento_poa';

	
	const CLASS_DEFAULT = 'lib.model.SubactividadProcedimientoPoa';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'subactividad_procedimiento_poa.ID';

	
	const ACTIVIDAD_PROCEDIMIENTO_ID = 'subactividad_procedimiento_poa.ACTIVIDAD_PROCEDIMIENTO_ID';

	
	const DESCRIPCION = 'subactividad_procedimiento_poa.DESCRIPCION';

	
	const RESPONSABLE = 'subactividad_procedimiento_poa.RESPONSABLE';

	
	const ENTREGABLE = 'subactividad_procedimiento_poa.ENTREGABLE';

	
	const FECHA_INICIO = 'subactividad_procedimiento_poa.FECHA_INICIO';

	
	const DURACION = 'subactividad_procedimiento_poa.DURACION';

	
	const PONDERACION = 'subactividad_procedimiento_poa.PONDERACION';

	
	const CREATED_AT = 'subactividad_procedimiento_poa.CREATED_AT';

	
	const UPDATED_AT = 'subactividad_procedimiento_poa.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ActividadProcedimientoId', 'Descripcion', 'Responsable', 'Entregable', 'FechaInicio', 'Duracion', 'Ponderacion', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (SubactividadProcedimientoPoaPeer::ID, SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, SubactividadProcedimientoPoaPeer::DESCRIPCION, SubactividadProcedimientoPoaPeer::RESPONSABLE, SubactividadProcedimientoPoaPeer::ENTREGABLE, SubactividadProcedimientoPoaPeer::FECHA_INICIO, SubactividadProcedimientoPoaPeer::DURACION, SubactividadProcedimientoPoaPeer::PONDERACION, SubactividadProcedimientoPoaPeer::CREATED_AT, SubactividadProcedimientoPoaPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'actividad_procedimiento_id', 'descripcion', 'responsable', 'entregable', 'fecha_inicio', 'duracion', 'ponderacion', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ActividadProcedimientoId' => 1, 'Descripcion' => 2, 'Responsable' => 3, 'Entregable' => 4, 'FechaInicio' => 5, 'Duracion' => 6, 'Ponderacion' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ),
		BasePeer::TYPE_COLNAME => array (SubactividadProcedimientoPoaPeer::ID => 0, SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID => 1, SubactividadProcedimientoPoaPeer::DESCRIPCION => 2, SubactividadProcedimientoPoaPeer::RESPONSABLE => 3, SubactividadProcedimientoPoaPeer::ENTREGABLE => 4, SubactividadProcedimientoPoaPeer::FECHA_INICIO => 5, SubactividadProcedimientoPoaPeer::DURACION => 6, SubactividadProcedimientoPoaPeer::PONDERACION => 7, SubactividadProcedimientoPoaPeer::CREATED_AT => 8, SubactividadProcedimientoPoaPeer::UPDATED_AT => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'actividad_procedimiento_id' => 1, 'descripcion' => 2, 'responsable' => 3, 'entregable' => 4, 'fecha_inicio' => 5, 'duracion' => 6, 'ponderacion' => 7, 'created_at' => 8, 'updated_at' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SubactividadProcedimientoPoaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SubactividadProcedimientoPoaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SubactividadProcedimientoPoaPeer::getTableMap();
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
		return str_replace(SubactividadProcedimientoPoaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::ID);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::DESCRIPCION);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::RESPONSABLE);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::ENTREGABLE);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::FECHA_INICIO);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::DURACION);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::PONDERACION);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::CREATED_AT);

		$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(subactividad_procedimiento_poa.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT subactividad_procedimiento_poa.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SubactividadProcedimientoPoaPeer::doSelectRS($criteria, $con);
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
		$objects = SubactividadProcedimientoPoaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SubactividadProcedimientoPoaPeer::populateObjects(SubactividadProcedimientoPoaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SubactividadProcedimientoPoaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SubactividadProcedimientoPoaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinActividadProcedimientoPoa(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, ActividadProcedimientoPoaPeer::ID);

		$rs = SubactividadProcedimientoPoaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinActividadProcedimientoPoa(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubactividadProcedimientoPoaPeer::addSelectColumns($c);
		$startcol = (SubactividadProcedimientoPoaPeer::NUM_COLUMNS - SubactividadProcedimientoPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ActividadProcedimientoPoaPeer::addSelectColumns($c);

		$c->addJoin(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, ActividadProcedimientoPoaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadProcedimientoPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ActividadProcedimientoPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getActividadProcedimientoPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSubactividadProcedimientoPoa($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSubactividadProcedimientoPoas();
				$obj2->addSubactividadProcedimientoPoa($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProcedimientoPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, ActividadProcedimientoPoaPeer::ID);

		$rs = SubactividadProcedimientoPoaPeer::doSelectRS($criteria, $con);
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

		SubactividadProcedimientoPoaPeer::addSelectColumns($c);
		$startcol2 = (SubactividadProcedimientoPoaPeer::NUM_COLUMNS - SubactividadProcedimientoPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ActividadProcedimientoPoaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ActividadProcedimientoPoaPeer::NUM_COLUMNS;

		$c->addJoin(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, ActividadProcedimientoPoaPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadProcedimientoPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ActividadProcedimientoPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getActividadProcedimientoPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSubactividadProcedimientoPoa($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSubactividadProcedimientoPoas();
				$obj2->addSubactividadProcedimientoPoa($obj1);
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
		return SubactividadProcedimientoPoaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SubactividadProcedimientoPoaPeer::ID); 

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
			$comparison = $criteria->getComparison(SubactividadProcedimientoPoaPeer::ID);
			$selectCriteria->add(SubactividadProcedimientoPoaPeer::ID, $criteria->remove(SubactividadProcedimientoPoaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SubactividadProcedimientoPoaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SubactividadProcedimientoPoaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SubactividadProcedimientoPoa) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SubactividadProcedimientoPoaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SubactividadProcedimientoPoa $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubactividadProcedimientoPoaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubactividadProcedimientoPoaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubactividadProcedimientoPoaPeer::DATABASE_NAME, SubactividadProcedimientoPoaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubactividadProcedimientoPoaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SubactividadProcedimientoPoaPeer::DATABASE_NAME);

		$criteria->add(SubactividadProcedimientoPoaPeer::ID, $pk);


		$v = SubactividadProcedimientoPoaPeer::doSelect($criteria, $con);

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
			$criteria->add(SubactividadProcedimientoPoaPeer::ID, $pks, Criteria::IN);
			$objs = SubactividadProcedimientoPoaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSubactividadProcedimientoPoaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SubactividadProcedimientoPoaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SubactividadProcedimientoPoaMapBuilder');
}
