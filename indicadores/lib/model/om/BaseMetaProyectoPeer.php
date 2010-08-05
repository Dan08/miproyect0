<?php


abstract class BaseMetaProyectoPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'meta_proyecto';

	
	const CLASS_DEFAULT = 'lib.model.MetaProyecto';

	
	const NUM_COLUMNS = 11;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'meta_proyecto.ID';

	
	const META_PD_ID = 'meta_proyecto.META_PD_ID';

	
	const PROYECTO_ID = 'meta_proyecto.PROYECTO_ID';

	
	const CODIGO = 'meta_proyecto.CODIGO';

	
	const META = 'meta_proyecto.META';

	
	const TIPO = 'meta_proyecto.TIPO';

	
	const OBJETIVO_ID = 'meta_proyecto.OBJETIVO_ID';

	
	const DESCRIPCION = 'meta_proyecto.DESCRIPCION';

	
	const ANUALIZACION_ID = 'meta_proyecto.ANUALIZACION_ID';

	
	const CREATED_AT = 'meta_proyecto.CREATED_AT';

	
	const UPDATED_AT = 'meta_proyecto.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'MetaPdId', 'ProyectoId', 'Codigo', 'Meta', 'Tipo', 'ObjetivoId', 'Descripcion', 'AnualizacionId', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (MetaProyectoPeer::ID, MetaProyectoPeer::META_PD_ID, MetaProyectoPeer::PROYECTO_ID, MetaProyectoPeer::CODIGO, MetaProyectoPeer::META, MetaProyectoPeer::TIPO, MetaProyectoPeer::OBJETIVO_ID, MetaProyectoPeer::DESCRIPCION, MetaProyectoPeer::ANUALIZACION_ID, MetaProyectoPeer::CREATED_AT, MetaProyectoPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'meta_pd_id', 'proyecto_id', 'codigo', 'meta', 'tipo', 'objetivo_id', 'descripcion', 'anualizacion_id', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'MetaPdId' => 1, 'ProyectoId' => 2, 'Codigo' => 3, 'Meta' => 4, 'Tipo' => 5, 'ObjetivoId' => 6, 'Descripcion' => 7, 'AnualizacionId' => 8, 'CreatedAt' => 9, 'UpdatedAt' => 10, ),
		BasePeer::TYPE_COLNAME => array (MetaProyectoPeer::ID => 0, MetaProyectoPeer::META_PD_ID => 1, MetaProyectoPeer::PROYECTO_ID => 2, MetaProyectoPeer::CODIGO => 3, MetaProyectoPeer::META => 4, MetaProyectoPeer::TIPO => 5, MetaProyectoPeer::OBJETIVO_ID => 6, MetaProyectoPeer::DESCRIPCION => 7, MetaProyectoPeer::ANUALIZACION_ID => 8, MetaProyectoPeer::CREATED_AT => 9, MetaProyectoPeer::UPDATED_AT => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'meta_pd_id' => 1, 'proyecto_id' => 2, 'codigo' => 3, 'meta' => 4, 'tipo' => 5, 'objetivo_id' => 6, 'descripcion' => 7, 'anualizacion_id' => 8, 'created_at' => 9, 'updated_at' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/MetaProyectoMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.MetaProyectoMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = MetaProyectoPeer::getTableMap();
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
		return str_replace(MetaProyectoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(MetaProyectoPeer::ID);

		$criteria->addSelectColumn(MetaProyectoPeer::META_PD_ID);

		$criteria->addSelectColumn(MetaProyectoPeer::PROYECTO_ID);

		$criteria->addSelectColumn(MetaProyectoPeer::CODIGO);

		$criteria->addSelectColumn(MetaProyectoPeer::META);

		$criteria->addSelectColumn(MetaProyectoPeer::TIPO);

		$criteria->addSelectColumn(MetaProyectoPeer::OBJETIVO_ID);

		$criteria->addSelectColumn(MetaProyectoPeer::DESCRIPCION);

		$criteria->addSelectColumn(MetaProyectoPeer::ANUALIZACION_ID);

		$criteria->addSelectColumn(MetaProyectoPeer::CREATED_AT);

		$criteria->addSelectColumn(MetaProyectoPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(meta_proyecto.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT meta_proyecto.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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
		$objects = MetaProyectoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return MetaProyectoPeer::populateObjects(MetaProyectoPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			MetaProyectoPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = MetaProyectoPeer::getOMClass();
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
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinObjetivo(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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

		MetaProyectoPeer::addSelectColumns($c);
		$startcol = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MetaPdPeer::addSelectColumns($c);

		$c->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

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
										$temp_obj2->addMetaProyecto($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1); 			}
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

		MetaProyectoPeer::addSelectColumns($c);
		$startcol = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProyectoPeer::addSelectColumns($c);

		$c->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

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
										$temp_obj2->addMetaProyecto($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinObjetivo(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		MetaProyectoPeer::addSelectColumns($c);
		$startcol = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ObjetivoPeer::addSelectColumns($c);

		$c->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ObjetivoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getObjetivo(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addMetaProyecto($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1); 			}
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

		MetaProyectoPeer::addSelectColumns($c);
		$startcol = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AnualizacionPeer::addSelectColumns($c);

		$c->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

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
										$temp_obj2->addMetaProyecto($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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

		MetaProyectoPeer::addSelectColumns($c);
		$startcol2 = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		ProyectoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ProyectoPeer::NUM_COLUMNS;

		ObjetivoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ObjetivoPeer::NUM_COLUMNS;

		AnualizacionPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$c->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();


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
					$temp_obj2->addMetaProyecto($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1);
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
					$temp_obj3->addMetaProyecto($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initMetaProyectos();
				$obj3->addMetaProyecto($obj1);
			}


					
			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getObjetivo(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addMetaProyecto($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initMetaProyectos();
				$obj4->addMetaProyecto($obj1);
			}


					
			$omClass = AnualizacionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getAnualizacion(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addMetaProyecto($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initMetaProyectos();
				$obj5->addMetaProyecto($obj1);
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
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptObjetivo(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MetaProyectoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$criteria->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$rs = MetaProyectoPeer::doSelectRS($criteria, $con);
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

		MetaProyectoPeer::addSelectColumns($c);
		$startcol2 = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		ObjetivoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ObjetivoPeer::NUM_COLUMNS;

		AnualizacionPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$c->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

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
					$temp_obj2->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1);
			}

			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getObjetivo(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initMetaProyectos();
				$obj3->addMetaProyecto($obj1);
			}

			$omClass = AnualizacionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getAnualizacion(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initMetaProyectos();
				$obj4->addMetaProyecto($obj1);
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

		MetaProyectoPeer::addSelectColumns($c);
		$startcol2 = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		ObjetivoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ObjetivoPeer::NUM_COLUMNS;

		AnualizacionPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$c->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

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
					$temp_obj2->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1);
			}

			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getObjetivo(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initMetaProyectos();
				$obj3->addMetaProyecto($obj1);
			}

			$omClass = AnualizacionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getAnualizacion(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initMetaProyectos();
				$obj4->addMetaProyecto($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptObjetivo(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		MetaProyectoPeer::addSelectColumns($c);
		$startcol2 = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		ProyectoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ProyectoPeer::NUM_COLUMNS;

		AnualizacionPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AnualizacionPeer::NUM_COLUMNS;

		$c->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(MetaProyectoPeer::ANUALIZACION_ID, AnualizacionPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

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
					$temp_obj2->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1);
			}

			$omClass = ProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getProyecto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initMetaProyectos();
				$obj3->addMetaProyecto($obj1);
			}

			$omClass = AnualizacionPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getAnualizacion(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initMetaProyectos();
				$obj4->addMetaProyecto($obj1);
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

		MetaProyectoPeer::addSelectColumns($c);
		$startcol2 = (MetaProyectoPeer::NUM_COLUMNS - MetaProyectoPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		MetaPdPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + MetaPdPeer::NUM_COLUMNS;

		ProyectoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ProyectoPeer::NUM_COLUMNS;

		ObjetivoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ObjetivoPeer::NUM_COLUMNS;

		$c->addJoin(MetaProyectoPeer::META_PD_ID, MetaPdPeer::ID);

		$c->addJoin(MetaProyectoPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(MetaProyectoPeer::OBJETIVO_ID, ObjetivoPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = MetaProyectoPeer::getOMClass();

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
					$temp_obj2->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initMetaProyectos();
				$obj2->addMetaProyecto($obj1);
			}

			$omClass = ProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getProyecto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initMetaProyectos();
				$obj3->addMetaProyecto($obj1);
			}

			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getObjetivo(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addMetaProyecto($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initMetaProyectos();
				$obj4->addMetaProyecto($obj1);
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
		return MetaProyectoPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(MetaProyectoPeer::ID); 

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
			$comparison = $criteria->getComparison(MetaProyectoPeer::ID);
			$selectCriteria->add(MetaProyectoPeer::ID, $criteria->remove(MetaProyectoPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(MetaProyectoPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(MetaProyectoPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof MetaProyecto) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(MetaProyectoPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(MetaProyecto $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(MetaProyectoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(MetaProyectoPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(MetaProyectoPeer::DATABASE_NAME, MetaProyectoPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = MetaProyectoPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(MetaProyectoPeer::DATABASE_NAME);

		$criteria->add(MetaProyectoPeer::ID, $pk);


		$v = MetaProyectoPeer::doSelect($criteria, $con);

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
			$criteria->add(MetaProyectoPeer::ID, $pks, Criteria::IN);
			$objs = MetaProyectoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseMetaProyectoPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/MetaProyectoMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.MetaProyectoMapBuilder');
}
