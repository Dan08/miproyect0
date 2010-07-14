<?php


abstract class BaseActividadesPoaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'actividades_poa';

	
	const CLASS_DEFAULT = 'lib.model.ActividadesPoa';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'actividades_poa.ID';

	
	const META_POA_ID = 'actividades_poa.META_POA_ID';

	
	const PROYECTO_ID = 'actividades_poa.PROYECTO_ID';

	
	const DESCRIPCION = 'actividades_poa.DESCRIPCION';

	
	const CREATED_AT = 'actividades_poa.CREATED_AT';

	
	const UPDATED_AT = 'actividades_poa.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'MetaPoaId', 'ProyectoId', 'Descripcion', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (ActividadesPoaPeer::ID, ActividadesPoaPeer::META_POA_ID, ActividadesPoaPeer::PROYECTO_ID, ActividadesPoaPeer::DESCRIPCION, ActividadesPoaPeer::CREATED_AT, ActividadesPoaPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'meta_poa_id', 'proyecto_id', 'descripcion', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'MetaPoaId' => 1, 'ProyectoId' => 2, 'Descripcion' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, ),
		BasePeer::TYPE_COLNAME => array (ActividadesPoaPeer::ID => 0, ActividadesPoaPeer::META_POA_ID => 1, ActividadesPoaPeer::PROYECTO_ID => 2, ActividadesPoaPeer::DESCRIPCION => 3, ActividadesPoaPeer::CREATED_AT => 4, ActividadesPoaPeer::UPDATED_AT => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'meta_poa_id' => 1, 'proyecto_id' => 2, 'descripcion' => 3, 'created_at' => 4, 'updated_at' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ActividadesPoaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ActividadesPoaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ActividadesPoaPeer::getTableMap();
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
		return str_replace(ActividadesPoaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ActividadesPoaPeer::ID);

		$criteria->addSelectColumn(ActividadesPoaPeer::META_POA_ID);

		$criteria->addSelectColumn(ActividadesPoaPeer::PROYECTO_ID);

		$criteria->addSelectColumn(ActividadesPoaPeer::DESCRIPCION);

		$criteria->addSelectColumn(ActividadesPoaPeer::CREATED_AT);

		$criteria->addSelectColumn(ActividadesPoaPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(actividades_poa.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT actividades_poa.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ActividadesPoaPeer::doSelectRS($criteria, $con);
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
		$objects = ActividadesPoaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ActividadesPoaPeer::populateObjects(ActividadesPoaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ActividadesPoaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ActividadesPoaPeer::getOMClass();
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
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadesPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$rs = ActividadesPoaPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadesPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadesPoaPeer::doSelectRS($criteria, $con);
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

		ActividadesPoaPeer::addSelectColumns($c);
		$startcol = (ActividadesPoaPeer::NUM_COLUMNS - ActividadesPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MetaPoaPeer::addSelectColumns($c);

		$c->addJoin(ActividadesPoaPeer::META_POA_ID, MetaPoaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadesPoaPeer::getOMClass();

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
										$temp_obj2->addActividadesPoa($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initActividadesPoas();
				$obj2->addActividadesPoa($obj1); 			}
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

		ActividadesPoaPeer::addSelectColumns($c);
		$startcol = (ActividadesPoaPeer::NUM_COLUMNS - ActividadesPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProyectoPeer::addSelectColumns($c);

		$c->addJoin(ActividadesPoaPeer::PROYECTO_ID, ProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadesPoaPeer::getOMClass();

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
										$temp_obj2->addActividadesPoa($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initActividadesPoas();
				$obj2->addActividadesPoa($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadesPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$criteria->addJoin(ActividadesPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadesPoaPeer::doSelectRS($criteria, $con);
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

		ActividadesPoaPeer::addSelectColumns($c);
		$startcol2 = (ActividadesPoaPeer::NUM_COLUMNS - ActividadesPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPoaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPoaPeer::NUM_COLUMNS;

		ProyectoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ProyectoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadesPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$c->addJoin(ActividadesPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadesPoaPeer::getOMClass();


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
					$temp_obj2->addActividadesPoa($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initActividadesPoas();
				$obj2->addActividadesPoa($obj1);
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
					$temp_obj3->addActividadesPoa($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initActividadesPoas();
				$obj3->addActividadesPoa($obj1);
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
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadesPoaPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadesPoaPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadesPoaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadesPoaPeer::META_POA_ID, MetaPoaPeer::ID);

		$rs = ActividadesPoaPeer::doSelectRS($criteria, $con);
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

		ActividadesPoaPeer::addSelectColumns($c);
		$startcol2 = (ActividadesPoaPeer::NUM_COLUMNS - ActividadesPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadesPoaPeer::PROYECTO_ID, ProyectoPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadesPoaPeer::getOMClass();

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
					$temp_obj2->addActividadesPoa($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initActividadesPoas();
				$obj2->addActividadesPoa($obj1);
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

		ActividadesPoaPeer::addSelectColumns($c);
		$startcol2 = (ActividadesPoaPeer::NUM_COLUMNS - ActividadesPoaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPoaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPoaPeer::NUM_COLUMNS;

		$c->addJoin(ActividadesPoaPeer::META_POA_ID, MetaPoaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadesPoaPeer::getOMClass();

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
					$temp_obj2->addActividadesPoa($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initActividadesPoas();
				$obj2->addActividadesPoa($obj1);
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
		return ActividadesPoaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ActividadesPoaPeer::ID); 

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
			$comparison = $criteria->getComparison(ActividadesPoaPeer::ID);
			$selectCriteria->add(ActividadesPoaPeer::ID, $criteria->remove(ActividadesPoaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ActividadesPoaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ActividadesPoaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ActividadesPoa) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ActividadesPoaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ActividadesPoa $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ActividadesPoaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ActividadesPoaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ActividadesPoaPeer::DATABASE_NAME, ActividadesPoaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ActividadesPoaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ActividadesPoaPeer::DATABASE_NAME);

		$criteria->add(ActividadesPoaPeer::ID, $pk);


		$v = ActividadesPoaPeer::doSelect($criteria, $con);

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
			$criteria->add(ActividadesPoaPeer::ID, $pks, Criteria::IN);
			$objs = ActividadesPoaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseActividadesPoaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ActividadesPoaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ActividadesPoaMapBuilder');
}
