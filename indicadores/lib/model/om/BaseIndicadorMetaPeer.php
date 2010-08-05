<?php


abstract class BaseIndicadorMetaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'indicador_meta';

	
	const CLASS_DEFAULT = 'lib.model.IndicadorMeta';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'indicador_meta.ID';

	
	const META_PD_ID = 'indicador_meta.META_PD_ID';

	
	const CODIGO = 'indicador_meta.CODIGO';

	
	const DESCRIPCION = 'indicador_meta.DESCRIPCION';

	
	const MAGNITUD = 'indicador_meta.MAGNITUD';

	
	const ANUALIZACION_ID = 'indicador_meta.ANUALIZACION_ID';

	
	const CREATED_AT = 'indicador_meta.CREATED_AT';

	
	const UPDATED_AT = 'indicador_meta.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'MetaPdId', 'Codigo', 'Descripcion', 'Magnitud', 'AnualizacionId', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (IndicadorMetaPeer::ID, IndicadorMetaPeer::META_PD_ID, IndicadorMetaPeer::CODIGO, IndicadorMetaPeer::DESCRIPCION, IndicadorMetaPeer::MAGNITUD, IndicadorMetaPeer::ANUALIZACION_ID, IndicadorMetaPeer::CREATED_AT, IndicadorMetaPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'meta_pd_id', 'codigo', 'descripcion', 'magnitud', 'anualizacion_id', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'MetaPdId' => 1, 'Codigo' => 2, 'Descripcion' => 3, 'Magnitud' => 4, 'AnualizacionId' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
		BasePeer::TYPE_COLNAME => array (IndicadorMetaPeer::ID => 0, IndicadorMetaPeer::META_PD_ID => 1, IndicadorMetaPeer::CODIGO => 2, IndicadorMetaPeer::DESCRIPCION => 3, IndicadorMetaPeer::MAGNITUD => 4, IndicadorMetaPeer::ANUALIZACION_ID => 5, IndicadorMetaPeer::CREATED_AT => 6, IndicadorMetaPeer::UPDATED_AT => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'meta_pd_id' => 1, 'codigo' => 2, 'descripcion' => 3, 'magnitud' => 4, 'anualizacion_id' => 5, 'created_at' => 6, 'updated_at' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/IndicadorMetaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.IndicadorMetaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = IndicadorMetaPeer::getTableMap();
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
		return str_replace(IndicadorMetaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(IndicadorMetaPeer::ID);

		$criteria->addSelectColumn(IndicadorMetaPeer::META_PD_ID);

		$criteria->addSelectColumn(IndicadorMetaPeer::CODIGO);

		$criteria->addSelectColumn(IndicadorMetaPeer::DESCRIPCION);

		$criteria->addSelectColumn(IndicadorMetaPeer::MAGNITUD);

		$criteria->addSelectColumn(IndicadorMetaPeer::ANUALIZACION_ID);

		$criteria->addSelectColumn(IndicadorMetaPeer::CREATED_AT);

		$criteria->addSelectColumn(IndicadorMetaPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(indicador_meta.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT indicador_meta.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = IndicadorMetaPeer::doSelectRS($criteria, $con);
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
		$objects = IndicadorMetaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return IndicadorMetaPeer::populateObjects(IndicadorMetaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			IndicadorMetaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = IndicadorMetaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinMetaPd(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$rs = IndicadorMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAnualizacion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorMetaPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = IndicadorMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinMetaPd(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorMetaPeer::addSelectColumns($c);
		$startcol = (IndicadorMetaPeer::NUM_COLUMNS - IndicadorMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MetaPdPeer::addSelectColumns($c);

		$c->addJoin(IndicadorMetaPeer::META_PD_ID, MetaPdPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MetaPdPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getMetaPd(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addIndicadorMeta($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initIndicadorMetas();
				$obj2->addIndicadorMeta($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAnualizacion(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorMetaPeer::addSelectColumns($c);
		$startcol = (IndicadorMetaPeer::NUM_COLUMNS - IndicadorMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AnualizacionPeer::addSelectColumns($c);

		$c->addJoin(IndicadorMetaPeer::ANUALIZACION_ID, AnualizacionPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AnualizacionPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getAnualizacion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addIndicadorMeta($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initIndicadorMetas();
				$obj2->addIndicadorMeta($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(IndicadorMetaPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = IndicadorMetaPeer::doSelectRS($criteria, $con);
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

		IndicadorMetaPeer::addSelectColumns($c);
		$startcol2 = (IndicadorMetaPeer::NUM_COLUMNS - IndicadorMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		AnualizacionPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(IndicadorMetaPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorMetaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = MetaPdPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getMetaPd(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicadorMeta($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadorMetas();
				$obj2->addIndicadorMeta($obj1);
			}


					
			$omClass = AnualizacionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getAnualizacion(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addIndicadorMeta($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initIndicadorMetas();
				$obj3->addIndicadorMeta($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptMetaPd(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorMetaPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = IndicadorMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptAnualizacion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$rs = IndicadorMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptMetaPd(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorMetaPeer::addSelectColumns($c);
		$startcol2 = (IndicadorMetaPeer::NUM_COLUMNS - IndicadorMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AnualizacionPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorMetaPeer::ANUALIZACION_ID, AnualizacionPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AnualizacionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getAnualizacion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicadorMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadorMetas();
				$obj2->addIndicadorMeta($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptAnualizacion(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorMetaPeer::addSelectColumns($c);
		$startcol2 = (IndicadorMetaPeer::NUM_COLUMNS - IndicadorMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorMetaPeer::META_PD_ID, MetaPdPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MetaPdPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getMetaPd(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicadorMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadorMetas();
				$obj2->addIndicadorMeta($obj1);
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
		return IndicadorMetaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(IndicadorMetaPeer::ID); 

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
			$comparison = $criteria->getComparison(IndicadorMetaPeer::ID);
			$selectCriteria->add(IndicadorMetaPeer::ID, $criteria->remove(IndicadorMetaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(IndicadorMetaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(IndicadorMetaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof IndicadorMeta) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(IndicadorMetaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(IndicadorMeta $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(IndicadorMetaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(IndicadorMetaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(IndicadorMetaPeer::DATABASE_NAME, IndicadorMetaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = IndicadorMetaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(IndicadorMetaPeer::DATABASE_NAME);

		$criteria->add(IndicadorMetaPeer::ID, $pk);


		$v = IndicadorMetaPeer::doSelect($criteria, $con);

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
			$criteria->add(IndicadorMetaPeer::ID, $pks, Criteria::IN);
			$objs = IndicadorMetaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseIndicadorMetaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/IndicadorMetaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.IndicadorMetaMapBuilder');
}
