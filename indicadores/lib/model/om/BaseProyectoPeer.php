<?php


abstract class BaseProyectoPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'proyecto';

	
	const CLASS_DEFAULT = 'lib.model.Proyecto';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'proyecto.ID';

	
	const META_PROYECTO_ID = 'proyecto.META_PROYECTO_ID';

	
	const ANUALIZACION_ID = 'proyecto.ANUALIZACION_ID';

	
	const CODIGO = 'proyecto.CODIGO';

	
	const PROYECTO = 'proyecto.PROYECTO';

	
	const DESCRIPCION = 'proyecto.DESCRIPCION';

	
	const MAGNITUD = 'proyecto.MAGNITUD';

	
	const PROGRAMA_INTERNO = 'proyecto.PROGRAMA_INTERNO';

	
	const CREATED_AT = 'proyecto.CREATED_AT';

	
	const UPDATED_AT = 'proyecto.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'MetaProyectoId', 'AnualizacionId', 'Codigo', 'Proyecto', 'Descripcion', 'Magnitud', 'ProgramaInterno', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (ProyectoPeer::ID, ProyectoPeer::META_PROYECTO_ID, ProyectoPeer::ANUALIZACION_ID, ProyectoPeer::CODIGO, ProyectoPeer::PROYECTO, ProyectoPeer::DESCRIPCION, ProyectoPeer::MAGNITUD, ProyectoPeer::PROGRAMA_INTERNO, ProyectoPeer::CREATED_AT, ProyectoPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'meta_proyecto_id', 'anualizacion_id', 'codigo', 'proyecto', 'descripcion', 'magnitud', 'programa_interno', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'MetaProyectoId' => 1, 'AnualizacionId' => 2, 'Codigo' => 3, 'Proyecto' => 4, 'Descripcion' => 5, 'Magnitud' => 6, 'ProgramaInterno' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ),
		BasePeer::TYPE_COLNAME => array (ProyectoPeer::ID => 0, ProyectoPeer::META_PROYECTO_ID => 1, ProyectoPeer::ANUALIZACION_ID => 2, ProyectoPeer::CODIGO => 3, ProyectoPeer::PROYECTO => 4, ProyectoPeer::DESCRIPCION => 5, ProyectoPeer::MAGNITUD => 6, ProyectoPeer::PROGRAMA_INTERNO => 7, ProyectoPeer::CREATED_AT => 8, ProyectoPeer::UPDATED_AT => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'meta_proyecto_id' => 1, 'anualizacion_id' => 2, 'codigo' => 3, 'proyecto' => 4, 'descripcion' => 5, 'magnitud' => 6, 'programa_interno' => 7, 'created_at' => 8, 'updated_at' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ProyectoMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ProyectoMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ProyectoPeer::getTableMap();
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
		return str_replace(ProyectoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ProyectoPeer::ID);

		$criteria->addSelectColumn(ProyectoPeer::META_PROYECTO_ID);

		$criteria->addSelectColumn(ProyectoPeer::ANUALIZACION_ID);

		$criteria->addSelectColumn(ProyectoPeer::CODIGO);

		$criteria->addSelectColumn(ProyectoPeer::PROYECTO);

		$criteria->addSelectColumn(ProyectoPeer::DESCRIPCION);

		$criteria->addSelectColumn(ProyectoPeer::MAGNITUD);

		$criteria->addSelectColumn(ProyectoPeer::PROGRAMA_INTERNO);

		$criteria->addSelectColumn(ProyectoPeer::CREATED_AT);

		$criteria->addSelectColumn(ProyectoPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(proyecto.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT proyecto.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ProyectoPeer::doSelectRS($criteria, $con);
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
		$objects = ProyectoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ProyectoPeer::populateObjects(ProyectoPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ProyectoPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ProyectoPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinMetaProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$rs = ProyectoPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = ProyectoPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinMetaProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProyectoPeer::addSelectColumns($c);
		$startcol = (ProyectoPeer::NUM_COLUMNS - ProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MetaProyectoPeer::addSelectColumns($c);

		$c->addJoin(ProyectoPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MetaProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addProyecto($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProyectos();
				$obj2->addProyecto($obj1); 			}
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

		ProyectoPeer::addSelectColumns($c);
		$startcol = (ProyectoPeer::NUM_COLUMNS - ProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AnualizacionPeer::addSelectColumns($c);

		$c->addJoin(ProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoPeer::getOMClass();

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
										$temp_obj2->addProyecto($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProyectos();
				$obj2->addProyecto($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = ProyectoPeer::doSelectRS($criteria, $con);
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

		ProyectoPeer::addSelectColumns($c);
		$startcol2 = (ProyectoPeer::NUM_COLUMNS - ProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaProyectoPeer::NUM_COLUMNS;

		AnualizacionPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(ProyectoPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProyecto($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initProyectos();
				$obj2->addProyecto($obj1);
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
					$temp_obj3->addProyecto($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initProyectos();
				$obj3->addProyecto($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptMetaProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = ProyectoPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(ProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$rs = ProyectoPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptMetaProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProyectoPeer::addSelectColumns($c);
		$startcol2 = (ProyectoPeer::NUM_COLUMNS - ProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AnualizacionPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(ProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoPeer::getOMClass();

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
					$temp_obj2->addProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProyectos();
				$obj2->addProyecto($obj1);
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

		ProyectoPeer::addSelectColumns($c);
		$startcol2 = (ProyectoPeer::NUM_COLUMNS - ProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaProyectoPeer::NUM_COLUMNS;

		$c->addJoin(ProyectoPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProyectos();
				$obj2->addProyecto($obj1);
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
		return ProyectoPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ProyectoPeer::ID); 

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
			$comparison = $criteria->getComparison(ProyectoPeer::ID);
			$selectCriteria->add(ProyectoPeer::ID, $criteria->remove(ProyectoPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ProyectoPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ProyectoPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Proyecto) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ProyectoPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Proyecto $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ProyectoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ProyectoPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ProyectoPeer::DATABASE_NAME, ProyectoPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ProyectoPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ProyectoPeer::DATABASE_NAME);

		$criteria->add(ProyectoPeer::ID, $pk);


		$v = ProyectoPeer::doSelect($criteria, $con);

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
			$criteria->add(ProyectoPeer::ID, $pks, Criteria::IN);
			$objs = ProyectoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseProyectoPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ProyectoMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ProyectoMapBuilder');
}
