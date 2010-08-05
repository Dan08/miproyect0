<?php


abstract class BaseProyectoInversionMetaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'proyecto_inversion_meta';

	
	const CLASS_DEFAULT = 'lib.model.ProyectoInversionMeta';

	
	const NUM_COLUMNS = 4;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'proyecto_inversion_meta.ID';

	
	const META_PD_ID = 'proyecto_inversion_meta.META_PD_ID';

	
	const PROYECTO_INVERSION_ID = 'proyecto_inversion_meta.PROYECTO_INVERSION_ID';

	
	const ACTIVIDAD_ID = 'proyecto_inversion_meta.ACTIVIDAD_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'MetaPdId', 'ProyectoInversionId', 'ActividadId', ),
		BasePeer::TYPE_COLNAME => array (ProyectoInversionMetaPeer::ID, ProyectoInversionMetaPeer::META_PD_ID, ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionMetaPeer::ACTIVIDAD_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'meta_pd_id', 'proyecto_inversion_id', 'actividad_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'MetaPdId' => 1, 'ProyectoInversionId' => 2, 'ActividadId' => 3, ),
		BasePeer::TYPE_COLNAME => array (ProyectoInversionMetaPeer::ID => 0, ProyectoInversionMetaPeer::META_PD_ID => 1, ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID => 2, ProyectoInversionMetaPeer::ACTIVIDAD_ID => 3, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'meta_pd_id' => 1, 'proyecto_inversion_id' => 2, 'actividad_id' => 3, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ProyectoInversionMetaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ProyectoInversionMetaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ProyectoInversionMetaPeer::getTableMap();
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
		return str_replace(ProyectoInversionMetaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ProyectoInversionMetaPeer::ID);

		$criteria->addSelectColumn(ProyectoInversionMetaPeer::META_PD_ID);

		$criteria->addSelectColumn(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID);

		$criteria->addSelectColumn(ProyectoInversionMetaPeer::ACTIVIDAD_ID);

	}

	const COUNT = 'COUNT(proyecto_inversion_meta.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT proyecto_inversion_meta.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
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
		$objects = ProyectoInversionMetaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ProyectoInversionMetaPeer::populateObjects(ProyectoInversionMetaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ProyectoInversionMetaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ProyectoInversionMetaPeer::getOMClass();
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
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinProyectoInversion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinActividad(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
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

		ProyectoInversionMetaPeer::addSelectColumns($c);
		$startcol = (ProyectoInversionMetaPeer::NUM_COLUMNS - ProyectoInversionMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MetaPdPeer::addSelectColumns($c);

		$c->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoInversionMetaPeer::getOMClass();

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
										$temp_obj2->addProyectoInversionMeta($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProyectoInversionMetas();
				$obj2->addProyectoInversionMeta($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinProyectoInversion(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProyectoInversionMetaPeer::addSelectColumns($c);
		$startcol = (ProyectoInversionMetaPeer::NUM_COLUMNS - ProyectoInversionMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProyectoInversionPeer::addSelectColumns($c);

		$c->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoInversionMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProyectoInversionPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getProyectoInversion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addProyectoInversionMeta($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProyectoInversionMetas();
				$obj2->addProyectoInversionMeta($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinActividad(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProyectoInversionMetaPeer::addSelectColumns($c);
		$startcol = (ProyectoInversionMetaPeer::NUM_COLUMNS - ProyectoInversionMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ActividadPeer::addSelectColumns($c);

		$c->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoInversionMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getActividad(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addProyectoInversionMeta($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initProyectoInversionMetas();
				$obj2->addProyectoInversionMeta($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);

		$criteria->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
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

		ProyectoInversionMetaPeer::addSelectColumns($c);
		$startcol2 = (ProyectoInversionMetaPeer::NUM_COLUMNS - ProyectoInversionMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		ProyectoInversionPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ProyectoInversionPeer::NUM_COLUMNS;

		ActividadPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ActividadPeer::NUM_COLUMNS;

		$c->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);

		$c->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoInversionMetaPeer::getOMClass();


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
					$temp_obj2->addProyectoInversionMeta($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initProyectoInversionMetas();
				$obj2->addProyectoInversionMeta($obj1);
			}


					
			$omClass = ProyectoInversionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getProyectoInversion(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProyectoInversionMeta($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initProyectoInversionMetas();
				$obj3->addProyectoInversionMeta($obj1);
			}


					
			$omClass = ActividadPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getActividad(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addProyectoInversionMeta($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initProyectoInversionMetas();
				$obj4->addProyectoInversionMeta($obj1);
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
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);

		$criteria->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptProyectoInversion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptActividad(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ProyectoInversionMetaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);

		$rs = ProyectoInversionMetaPeer::doSelectRS($criteria, $con);
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

		ProyectoInversionMetaPeer::addSelectColumns($c);
		$startcol2 = (ProyectoInversionMetaPeer::NUM_COLUMNS - ProyectoInversionMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoInversionPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoInversionPeer::NUM_COLUMNS;

		ActividadPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ActividadPeer::NUM_COLUMNS;

		$c->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);

		$c->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoInversionMetaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProyectoInversionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getProyectoInversion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addProyectoInversionMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProyectoInversionMetas();
				$obj2->addProyectoInversionMeta($obj1);
			}

			$omClass = ActividadPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getActividad(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProyectoInversionMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initProyectoInversionMetas();
				$obj3->addProyectoInversionMeta($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptProyectoInversion(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProyectoInversionMetaPeer::addSelectColumns($c);
		$startcol2 = (ProyectoInversionMetaPeer::NUM_COLUMNS - ProyectoInversionMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		ActividadPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ActividadPeer::NUM_COLUMNS;

		$c->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(ProyectoInversionMetaPeer::ACTIVIDAD_ID, ActividadPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoInversionMetaPeer::getOMClass();

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
					$temp_obj2->addProyectoInversionMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProyectoInversionMetas();
				$obj2->addProyectoInversionMeta($obj1);
			}

			$omClass = ActividadPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getActividad(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProyectoInversionMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initProyectoInversionMetas();
				$obj3->addProyectoInversionMeta($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptActividad(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ProyectoInversionMetaPeer::addSelectColumns($c);
		$startcol2 = (ProyectoInversionMetaPeer::NUM_COLUMNS - ProyectoInversionMetaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		ProyectoInversionPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ProyectoInversionPeer::NUM_COLUMNS;

		$c->addJoin(ProyectoInversionMetaPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(ProyectoInversionMetaPeer::PROYECTO_INVERSION_ID, ProyectoInversionPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ProyectoInversionMetaPeer::getOMClass();

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
					$temp_obj2->addProyectoInversionMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initProyectoInversionMetas();
				$obj2->addProyectoInversionMeta($obj1);
			}

			$omClass = ProyectoInversionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getProyectoInversion(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addProyectoInversionMeta($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initProyectoInversionMetas();
				$obj3->addProyectoInversionMeta($obj1);
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
		return ProyectoInversionMetaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ProyectoInversionMetaPeer::ID); 

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
			$comparison = $criteria->getComparison(ProyectoInversionMetaPeer::ID);
			$selectCriteria->add(ProyectoInversionMetaPeer::ID, $criteria->remove(ProyectoInversionMetaPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ProyectoInversionMetaPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ProyectoInversionMetaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ProyectoInversionMeta) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ProyectoInversionMetaPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ProyectoInversionMeta $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ProyectoInversionMetaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ProyectoInversionMetaPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ProyectoInversionMetaPeer::DATABASE_NAME, ProyectoInversionMetaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ProyectoInversionMetaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ProyectoInversionMetaPeer::DATABASE_NAME);

		$criteria->add(ProyectoInversionMetaPeer::ID, $pk);


		$v = ProyectoInversionMetaPeer::doSelect($criteria, $con);

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
			$criteria->add(ProyectoInversionMetaPeer::ID, $pks, Criteria::IN);
			$objs = ProyectoInversionMetaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseProyectoInversionMetaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ProyectoInversionMetaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ProyectoInversionMetaMapBuilder');
}
