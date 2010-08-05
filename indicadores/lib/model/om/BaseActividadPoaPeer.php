<?php


abstract class BaseActividadPoaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'actividad_poa';

	
	const CLASS_DEFAULT = 'lib.model.ActividadPoa';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'actividad_poa.ID';

	
	const META_POA_ID = 'actividad_poa.META_POA_ID';

	
	const PROYECTO_ID = 'actividad_poa.PROYECTO_ID';

	
	const DESCRIPCION = 'actividad_poa.DESCRIPCION';

	
	const RESPONSABLE = 'actividad_poa.RESPONSABLE';

	
	const OBSERVACIONES = 'actividad_poa.OBSERVACIONES';

	
	const CREATED_AT = 'actividad_poa.CREATED_AT';

	
	const UPDATED_AT = 'actividad_poa.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'MetaPoaId', 'ProyectoId', 'Descripcion', 'Responsable', 'Observaciones', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (ActividadPoaPeer::ID, ActividadPoaPeer::META_POA_ID, ActividadPoaPeer::PROYECTO_ID, ActividadPoaPeer::DESCRIPCION, ActividadPoaPeer::RESPONSABLE, ActividadPoaPeer::OBSERVACIONES, ActividadPoaPeer::CREATED_AT, ActividadPoaPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'meta_poa_id', 'proyecto_id', 'descripcion', 'responsable', 'observaciones', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'MetaPoaId' => 1, 'ProyectoId' => 2, 'Descripcion' => 3, 'Responsable' => 4, 'Observaciones' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
		BasePeer::TYPE_COLNAME => array (ActividadPoaPeer::ID => 0, ActividadPoaPeer::META_POA_ID => 1, ActividadPoaPeer::PROYECTO_ID => 2, ActividadPoaPeer::DESCRIPCION => 3, ActividadPoaPeer::RESPONSABLE => 4, ActividadPoaPeer::OBSERVACIONES => 5, ActividadPoaPeer::CREATED_AT => 6, ActividadPoaPeer::UPDATED_AT => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'meta_poa_id' => 1, 'proyecto_id' => 2, 'descripcion' => 3, 'responsable' => 4, 'observaciones' => 5, 'created_at' => 6, 'updated_at' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ActividadPoaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ActividadPoaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ActividadPoaPeer::getTableMap();
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
		return str_replace(ActividadPoaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ActividadPoaPeer::ID);

		$criteria->addSelectColumn(ActividadPoaPeer::META_POA_ID);

		$criteria->addSelectColumn(ActividadPoaPeer::PROYECTO_ID);

		$criteria->addSelectColumn(ActividadPoaPeer::DESCRIPCION);

		$criteria->addSelectColumn(ActividadPoaPeer::RESPONSABLE);

		$criteria->addSelectColumn(ActividadPoaPeer::OBSERVACIONES);

		$criteria->addSelectColumn(ActividadPoaPeer::CREATED_AT);

		$criteria->addSelectColumn(ActividadPoaPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(actividad_poa.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT actividad_poa.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ActividadPoaPeer::doSelectRS($criteria, $con);
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
		$objects = ActividadPoaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ActividadPoaPeer::populateObjects(ActividadPoaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ActividadPoaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ActividadPoaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinMetaPoa(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$rs = ActividadPoaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadPoaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinMetaPoa(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPoaPeer::addSelectColumns($c);
		$startcol = (ActividadPoaPeer::NUM_COLUMNS - ActividadPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MetaPoaPeer::addSelectColumns($c);

		$c->addJoin(ActividadPoaPeer::META_POA_ID, MetaPoaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MetaPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getMetaPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addActividadPoa($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initActividadPoas();
				$obj2->addActividadPoa($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPoaPeer::addSelectColumns($c);
		$startcol = (ActividadPoaPeer::NUM_COLUMNS - ActividadPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProyectoPeer::addSelectColumns($c);

		$c->addJoin(ActividadPoaPeer::PROYECTO_ID, ProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addActividadPoa($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initActividadPoas();
				$obj2->addActividadPoa($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$criteria->addJoin(ActividadPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadPoaPeer::doSelectRS($criteria, $con);
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

		ActividadPoaPeer::addSelectColumns($c);
		$startcol2 = (ActividadPoaPeer::NUM_COLUMNS - ActividadPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPoaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPoaPeer::NUM_COLUMNS;

		ProyectoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ProyectoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$c->addJoin(ActividadPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = MetaPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getMetaPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addActividadPoa($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initActividadPoas();
				$obj2->addActividadPoa($obj1);
			}


					
			$omClass = ProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getProyecto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividadPoa($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initActividadPoas();
				$obj3->addActividadPoa($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptMetaPoa(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadPoaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$rs = ActividadPoaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptMetaPoa(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPoaPeer::addSelectColumns($c);
		$startcol2 = (ActividadPoaPeer::NUM_COLUMNS - ActividadPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPoaPeer::PROYECTO_ID, ProyectoPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addActividadPoa($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initActividadPoas();
				$obj2->addActividadPoa($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPoaPeer::addSelectColumns($c);
		$startcol2 = (ActividadPoaPeer::NUM_COLUMNS - ActividadPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPoaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPoaPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPoaPeer::META_POA_ID, MetaPoaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPoaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MetaPoaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getMetaPoa(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addActividadPoa($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initActividadPoas();
				$obj2->addActividadPoa($obj1);
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
		return ActividadPoaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ActividadPoaPeer::ID); 

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
			$comparison = $criteria->getComparison(ActividadPoaPeer::ID);
			$selectCriteria->add(ActividadPoaPeer::ID, $criteria->remove(ActividadPoaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ActividadPoaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ActividadPoaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ActividadPoa) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ActividadPoaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ActividadPoa $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ActividadPoaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ActividadPoaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ActividadPoaPeer::DATABASE_NAME, ActividadPoaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ActividadPoaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ActividadPoaPeer::DATABASE_NAME);

		$criteria->add(ActividadPoaPeer::ID, $pk);


		$v = ActividadPoaPeer::doSelect($criteria, $con);

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
			$criteria->add(ActividadPoaPeer::ID, $pks, Criteria::IN);
			$objs = ActividadPoaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseActividadPoaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ActividadPoaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ActividadPoaMapBuilder');
}
