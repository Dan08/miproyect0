<?php


abstract class BaseSubactividadProyectoPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'subactividad_proyecto';

	
	const CLASS_DEFAULT = 'lib.model.SubactividadProyecto';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'subactividad_proyecto.ID';

	
	const ACTIVIDAD_PROYECTO_ID = 'subactividad_proyecto.ACTIVIDAD_PROYECTO_ID';

	
	const DESCRIPCION = 'subactividad_proyecto.DESCRIPCION';

	
	const FECHA_INICIO = 'subactividad_proyecto.FECHA_INICIO';

	
	const DURACION = 'subactividad_proyecto.DURACION';

	
	const PONDERACION = 'subactividad_proyecto.PONDERACION';

	
	const CREATED_AT = 'subactividad_proyecto.CREATED_AT';

	
	const UPDATED_AT = 'subactividad_proyecto.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ActividadProyectoId', 'Descripcion', 'FechaInicio', 'Duracion', 'Ponderacion', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (SubactividadProyectoPeer::ID, SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, SubactividadProyectoPeer::DESCRIPCION, SubactividadProyectoPeer::FECHA_INICIO, SubactividadProyectoPeer::DURACION, SubactividadProyectoPeer::PONDERACION, SubactividadProyectoPeer::CREATED_AT, SubactividadProyectoPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'actividad_proyecto_id', 'descripcion', 'fecha_inicio', 'duracion', 'ponderacion', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ActividadProyectoId' => 1, 'Descripcion' => 2, 'FechaInicio' => 3, 'Duracion' => 4, 'Ponderacion' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
		BasePeer::TYPE_COLNAME => array (SubactividadProyectoPeer::ID => 0, SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID => 1, SubactividadProyectoPeer::DESCRIPCION => 2, SubactividadProyectoPeer::FECHA_INICIO => 3, SubactividadProyectoPeer::DURACION => 4, SubactividadProyectoPeer::PONDERACION => 5, SubactividadProyectoPeer::CREATED_AT => 6, SubactividadProyectoPeer::UPDATED_AT => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'actividad_proyecto_id' => 1, 'descripcion' => 2, 'fecha_inicio' => 3, 'duracion' => 4, 'ponderacion' => 5, 'created_at' => 6, 'updated_at' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SubactividadProyectoMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SubactividadProyectoMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SubactividadProyectoPeer::getTableMap();
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
		return str_replace(SubactividadProyectoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SubactividadProyectoPeer::ID);

		$criteria->addSelectColumn(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID);

		$criteria->addSelectColumn(SubactividadProyectoPeer::DESCRIPCION);

		$criteria->addSelectColumn(SubactividadProyectoPeer::FECHA_INICIO);

		$criteria->addSelectColumn(SubactividadProyectoPeer::DURACION);

		$criteria->addSelectColumn(SubactividadProyectoPeer::PONDERACION);

		$criteria->addSelectColumn(SubactividadProyectoPeer::CREATED_AT);

		$criteria->addSelectColumn(SubactividadProyectoPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(subactividad_proyecto.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT subactividad_proyecto.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SubactividadProyectoPeer::doSelectRS($criteria, $con);
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
		$objects = SubactividadProyectoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SubactividadProyectoPeer::populateObjects(SubactividadProyectoPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SubactividadProyectoPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SubactividadProyectoPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinActividadProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, ActividadProyectoPeer::ID);

		$rs = SubactividadProyectoPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinActividadProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubactividadProyectoPeer::addSelectColumns($c);
		$startcol = (SubactividadProyectoPeer::NUM_COLUMNS - SubactividadProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ActividadProyectoPeer::addSelectColumns($c);

		$c->addJoin(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, ActividadProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ActividadProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getActividadProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSubactividadProyecto($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSubactividadProyectos();
				$obj2->addSubactividadProyecto($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SubactividadProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SubactividadProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, ActividadProyectoPeer::ID);

		$rs = SubactividadProyectoPeer::doSelectRS($criteria, $con);
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

		SubactividadProyectoPeer::addSelectColumns($c);
		$startcol2 = (SubactividadProyectoPeer::NUM_COLUMNS - SubactividadProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ActividadProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ActividadProyectoPeer::NUM_COLUMNS;

		$c->addJoin(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, ActividadProyectoPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SubactividadProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ActividadProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getActividadProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSubactividadProyecto($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSubactividadProyectos();
				$obj2->addSubactividadProyecto($obj1);
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
		return SubactividadProyectoPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SubactividadProyectoPeer::ID); 

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
			$comparison = $criteria->getComparison(SubactividadProyectoPeer::ID);
			$selectCriteria->add(SubactividadProyectoPeer::ID, $criteria->remove(SubactividadProyectoPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SubactividadProyectoPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SubactividadProyectoPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SubactividadProyecto) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SubactividadProyectoPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SubactividadProyecto $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubactividadProyectoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubactividadProyectoPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubactividadProyectoPeer::DATABASE_NAME, SubactividadProyectoPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubactividadProyectoPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SubactividadProyectoPeer::DATABASE_NAME);

		$criteria->add(SubactividadProyectoPeer::ID, $pk);


		$v = SubactividadProyectoPeer::doSelect($criteria, $con);

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
			$criteria->add(SubactividadProyectoPeer::ID, $pks, Criteria::IN);
			$objs = SubactividadProyectoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSubactividadProyectoPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SubactividadProyectoMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SubactividadProyectoMapBuilder');
}
