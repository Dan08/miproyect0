<?php


abstract class BaseHistoricoIndicadorPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'historico_indicador';

	
	const CLASS_DEFAULT = 'lib.model.HistoricoIndicador';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'historico_indicador.ID';

	
	const INDICADOR_ID = 'historico_indicador.INDICADOR_ID';

	
	const VALOR = 'historico_indicador.VALOR';

	
	const ANO = 'historico_indicador.ANO';

	
	const MEDICION_NUMERO = 'historico_indicador.MEDICION_NUMERO';

	
	const OBSERVACION = 'historico_indicador.OBSERVACION';

	
	const CREATED_AT = 'historico_indicador.CREATED_AT';

	
	const UPDATED_AT = 'historico_indicador.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndicadorId', 'Valor', 'Ano', 'MedicionNumero', 'Observacion', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (HistoricoIndicadorPeer::ID, HistoricoIndicadorPeer::INDICADOR_ID, HistoricoIndicadorPeer::VALOR, HistoricoIndicadorPeer::ANO, HistoricoIndicadorPeer::MEDICION_NUMERO, HistoricoIndicadorPeer::OBSERVACION, HistoricoIndicadorPeer::CREATED_AT, HistoricoIndicadorPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'indicador_id', 'valor', 'ano', 'medicion_numero', 'observacion', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndicadorId' => 1, 'Valor' => 2, 'Ano' => 3, 'MedicionNumero' => 4, 'Observacion' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
		BasePeer::TYPE_COLNAME => array (HistoricoIndicadorPeer::ID => 0, HistoricoIndicadorPeer::INDICADOR_ID => 1, HistoricoIndicadorPeer::VALOR => 2, HistoricoIndicadorPeer::ANO => 3, HistoricoIndicadorPeer::MEDICION_NUMERO => 4, HistoricoIndicadorPeer::OBSERVACION => 5, HistoricoIndicadorPeer::CREATED_AT => 6, HistoricoIndicadorPeer::UPDATED_AT => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'indicador_id' => 1, 'valor' => 2, 'ano' => 3, 'medicion_numero' => 4, 'observacion' => 5, 'created_at' => 6, 'updated_at' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/HistoricoIndicadorMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.HistoricoIndicadorMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HistoricoIndicadorPeer::getTableMap();
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
		return str_replace(HistoricoIndicadorPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HistoricoIndicadorPeer::ID);

		$criteria->addSelectColumn(HistoricoIndicadorPeer::INDICADOR_ID);

		$criteria->addSelectColumn(HistoricoIndicadorPeer::VALOR);

		$criteria->addSelectColumn(HistoricoIndicadorPeer::ANO);

		$criteria->addSelectColumn(HistoricoIndicadorPeer::MEDICION_NUMERO);

		$criteria->addSelectColumn(HistoricoIndicadorPeer::OBSERVACION);

		$criteria->addSelectColumn(HistoricoIndicadorPeer::CREATED_AT);

		$criteria->addSelectColumn(HistoricoIndicadorPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(historico_indicador.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT historico_indicador.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HistoricoIndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HistoricoIndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HistoricoIndicadorPeer::doSelectRS($criteria, $con);
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
		$objects = HistoricoIndicadorPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HistoricoIndicadorPeer::populateObjects(HistoricoIndicadorPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HistoricoIndicadorPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HistoricoIndicadorPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinIndicador(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HistoricoIndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HistoricoIndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HistoricoIndicadorPeer::INDICADOR_ID, IndicadorPeer::ID);

		$rs = HistoricoIndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinIndicador(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HistoricoIndicadorPeer::addSelectColumns($c);
		$startcol = (HistoricoIndicadorPeer::NUM_COLUMNS - HistoricoIndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		IndicadorPeer::addSelectColumns($c);

		$c->addJoin(HistoricoIndicadorPeer::INDICADOR_ID, IndicadorPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HistoricoIndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getIndicador(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addHistoricoIndicador($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHistoricoIndicadors();
				$obj2->addHistoricoIndicador($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HistoricoIndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HistoricoIndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HistoricoIndicadorPeer::INDICADOR_ID, IndicadorPeer::ID);

		$rs = HistoricoIndicadorPeer::doSelectRS($criteria, $con);
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

		HistoricoIndicadorPeer::addSelectColumns($c);
		$startcol2 = (HistoricoIndicadorPeer::NUM_COLUMNS - HistoricoIndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		IndicadorPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + IndicadorPeer::NUM_COLUMNS;

		$c->addJoin(HistoricoIndicadorPeer::INDICADOR_ID, IndicadorPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HistoricoIndicadorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = IndicadorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getIndicador(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addHistoricoIndicador($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initHistoricoIndicadors();
				$obj2->addHistoricoIndicador($obj1);
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
		return HistoricoIndicadorPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HistoricoIndicadorPeer::ID); 

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
			$comparison = $criteria->getComparison(HistoricoIndicadorPeer::ID);
			$selectCriteria->add(HistoricoIndicadorPeer::ID, $criteria->remove(HistoricoIndicadorPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HistoricoIndicadorPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HistoricoIndicadorPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HistoricoIndicador) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HistoricoIndicadorPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HistoricoIndicador $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HistoricoIndicadorPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HistoricoIndicadorPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HistoricoIndicadorPeer::DATABASE_NAME, HistoricoIndicadorPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HistoricoIndicadorPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(HistoricoIndicadorPeer::DATABASE_NAME);

		$criteria->add(HistoricoIndicadorPeer::ID, $pk);


		$v = HistoricoIndicadorPeer::doSelect($criteria, $con);

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
			$criteria->add(HistoricoIndicadorPeer::ID, $pks, Criteria::IN);
			$objs = HistoricoIndicadorPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHistoricoIndicadorPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/HistoricoIndicadorMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.HistoricoIndicadorMapBuilder');
}
