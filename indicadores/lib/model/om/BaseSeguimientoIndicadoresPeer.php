<?php


abstract class BaseSeguimientoIndicadoresPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'seguimiento_indicadores';

	
	const CLASS_DEFAULT = 'lib.model.SeguimientoIndicadores';

	
	const NUM_COLUMNS = 4;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'seguimiento_indicadores.ID';

	
	const INDICADOR_META_ID = 'seguimiento_indicadores.INDICADOR_META_ID';

	
	const ANYO = 'seguimiento_indicadores.ANYO';

	
	const VALOR = 'seguimiento_indicadores.VALOR';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndicadorMetaId', 'Anyo', 'Valor', ),
		BasePeer::TYPE_COLNAME => array (SeguimientoIndicadoresPeer::ID, SeguimientoIndicadoresPeer::INDICADOR_META_ID, SeguimientoIndicadoresPeer::ANYO, SeguimientoIndicadoresPeer::VALOR, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'indicador_meta_id', 'anyo', 'valor', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndicadorMetaId' => 1, 'Anyo' => 2, 'Valor' => 3, ),
		BasePeer::TYPE_COLNAME => array (SeguimientoIndicadoresPeer::ID => 0, SeguimientoIndicadoresPeer::INDICADOR_META_ID => 1, SeguimientoIndicadoresPeer::ANYO => 2, SeguimientoIndicadoresPeer::VALOR => 3, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'indicador_meta_id' => 1, 'anyo' => 2, 'valor' => 3, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SeguimientoIndicadoresMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SeguimientoIndicadoresMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SeguimientoIndicadoresPeer::getTableMap();
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
		return str_replace(SeguimientoIndicadoresPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SeguimientoIndicadoresPeer::ID);

		$criteria->addSelectColumn(SeguimientoIndicadoresPeer::INDICADOR_META_ID);

		$criteria->addSelectColumn(SeguimientoIndicadoresPeer::ANYO);

		$criteria->addSelectColumn(SeguimientoIndicadoresPeer::VALOR);

	}

	const COUNT = 'COUNT(seguimiento_indicadores.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT seguimiento_indicadores.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SeguimientoIndicadoresPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SeguimientoIndicadoresPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SeguimientoIndicadoresPeer::doSelectRS($criteria, $con);
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
		$objects = SeguimientoIndicadoresPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SeguimientoIndicadoresPeer::populateObjects(SeguimientoIndicadoresPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SeguimientoIndicadoresPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SeguimientoIndicadoresPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinIndicadorMeta(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SeguimientoIndicadoresPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SeguimientoIndicadoresPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SeguimientoIndicadoresPeer::INDICADOR_META_ID, IndicadorMetaPeer::ID);

		$rs = SeguimientoIndicadoresPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinIndicadorMeta(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SeguimientoIndicadoresPeer::addSelectColumns($c);
		$startcol = (SeguimientoIndicadoresPeer::NUM_COLUMNS - SeguimientoIndicadoresPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		IndicadorMetaPeer::addSelectColumns($c);

		$c->addJoin(SeguimientoIndicadoresPeer::INDICADOR_META_ID, IndicadorMetaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SeguimientoIndicadoresPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = IndicadorMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getIndicadorMeta(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSeguimientoIndicadores($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSeguimientoIndicadoress();
				$obj2->addSeguimientoIndicadores($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SeguimientoIndicadoresPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SeguimientoIndicadoresPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SeguimientoIndicadoresPeer::INDICADOR_META_ID, IndicadorMetaPeer::ID);

		$rs = SeguimientoIndicadoresPeer::doSelectRS($criteria, $con);
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

		SeguimientoIndicadoresPeer::addSelectColumns($c);
		$startcol2 = (SeguimientoIndicadoresPeer::NUM_COLUMNS - SeguimientoIndicadoresPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		IndicadorMetaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + IndicadorMetaPeer::NUM_COLUMNS;

		$c->addJoin(SeguimientoIndicadoresPeer::INDICADOR_META_ID, IndicadorMetaPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SeguimientoIndicadoresPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = IndicadorMetaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getIndicadorMeta(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSeguimientoIndicadores($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSeguimientoIndicadoress();
				$obj2->addSeguimientoIndicadores($obj1);
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
		return SeguimientoIndicadoresPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SeguimientoIndicadoresPeer::ID); 

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
			$comparison = $criteria->getComparison(SeguimientoIndicadoresPeer::ID);
			$selectCriteria->add(SeguimientoIndicadoresPeer::ID, $criteria->remove(SeguimientoIndicadoresPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SeguimientoIndicadoresPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SeguimientoIndicadoresPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SeguimientoIndicadores) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SeguimientoIndicadoresPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SeguimientoIndicadores $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SeguimientoIndicadoresPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SeguimientoIndicadoresPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SeguimientoIndicadoresPeer::DATABASE_NAME, SeguimientoIndicadoresPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SeguimientoIndicadoresPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SeguimientoIndicadoresPeer::DATABASE_NAME);

		$criteria->add(SeguimientoIndicadoresPeer::ID, $pk);


		$v = SeguimientoIndicadoresPeer::doSelect($criteria, $con);

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
			$criteria->add(SeguimientoIndicadoresPeer::ID, $pks, Criteria::IN);
			$objs = SeguimientoIndicadoresPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSeguimientoIndicadoresPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SeguimientoIndicadoresMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SeguimientoIndicadoresMapBuilder');
}
