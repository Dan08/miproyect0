<?php


abstract class BaseIndicadorPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'indicador';

	
	const CLASS_DEFAULT = 'lib.model.Indicador';

	
	const NUM_COLUMNS = 25;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'indicador.ID';

	
	const INDICADOR = 'indicador.INDICADOR';

	
	const BORRADOR = 'indicador.BORRADOR';

	
	const OBJETIVO_ID = 'indicador.OBJETIVO_ID';

	
	const OBJETIVO_ESTR = 'indicador.OBJETIVO_ESTR';

	
	const CATEGORIA_ID = 'indicador.CATEGORIA_ID';

	
	const PROCESO = 'indicador.PROCESO';

	
	const DEFINCION = 'indicador.DEFINCION';

	
	const MEDICION = 'indicador.MEDICION';

	
	const DESCRIPCION = 'indicador.DESCRIPCION';

	
	const FORMULA_TEXTUAL = 'indicador.FORMULA_TEXTUAL';

	
	const TIPO = 'indicador.TIPO';

	
	const FRECUENCIA = 'indicador.FRECUENCIA';

	
	const RESPONSABLE_ID = 'indicador.RESPONSABLE_ID';

	
	const QUIEN_ID = 'indicador.QUIEN_ID';

	
	const COMO = 'indicador.COMO';

	
	const QUE = 'indicador.QUE';

	
	const FORMULA = 'indicador.FORMULA';

	
	const UMBRAL_ROJO = 'indicador.UMBRAL_ROJO';

	
	const UMBRAL_AMARILLO = 'indicador.UMBRAL_AMARILLO';

	
	const UMBRAL_VERDE = 'indicador.UMBRAL_VERDE';

	
	const META = 'indicador.META';

	
	const INICIATIVA = 'indicador.INICIATIVA';

	
	const CREATED_AT = 'indicador.CREATED_AT';

	
	const UPDATED_AT = 'indicador.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Indicador', 'Borrador', 'ObjetivoId', 'ObjetivoEstr', 'CategoriaId', 'Proceso', 'Defincion', 'Medicion', 'Descripcion', 'FormulaTextual', 'Tipo', 'Frecuencia', 'ResponsableId', 'QuienId', 'Como', 'Que', 'Formula', 'UmbralRojo', 'UmbralAmarillo', 'UmbralVerde', 'Meta', 'Iniciativa', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (IndicadorPeer::ID, IndicadorPeer::INDICADOR, IndicadorPeer::BORRADOR, IndicadorPeer::OBJETIVO_ID, IndicadorPeer::OBJETIVO_ESTR, IndicadorPeer::CATEGORIA_ID, IndicadorPeer::PROCESO, IndicadorPeer::DEFINCION, IndicadorPeer::MEDICION, IndicadorPeer::DESCRIPCION, IndicadorPeer::FORMULA_TEXTUAL, IndicadorPeer::TIPO, IndicadorPeer::FRECUENCIA, IndicadorPeer::RESPONSABLE_ID, IndicadorPeer::QUIEN_ID, IndicadorPeer::COMO, IndicadorPeer::QUE, IndicadorPeer::FORMULA, IndicadorPeer::UMBRAL_ROJO, IndicadorPeer::UMBRAL_AMARILLO, IndicadorPeer::UMBRAL_VERDE, IndicadorPeer::META, IndicadorPeer::INICIATIVA, IndicadorPeer::CREATED_AT, IndicadorPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'indicador', 'borrador', 'objetivo_id', 'objetivo_estr', 'categoria_id', 'proceso', 'defincion', 'medicion', 'descripcion', 'formula_textual', 'tipo', 'frecuencia', 'responsable_id', 'quien_id', 'como', 'que', 'formula', 'umbral_rojo', 'umbral_amarillo', 'umbral_verde', 'meta', 'iniciativa', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Indicador' => 1, 'Borrador' => 2, 'ObjetivoId' => 3, 'ObjetivoEstr' => 4, 'CategoriaId' => 5, 'Proceso' => 6, 'Defincion' => 7, 'Medicion' => 8, 'Descripcion' => 9, 'FormulaTextual' => 10, 'Tipo' => 11, 'Frecuencia' => 12, 'ResponsableId' => 13, 'QuienId' => 14, 'Como' => 15, 'Que' => 16, 'Formula' => 17, 'UmbralRojo' => 18, 'UmbralAmarillo' => 19, 'UmbralVerde' => 20, 'Meta' => 21, 'Iniciativa' => 22, 'CreatedAt' => 23, 'UpdatedAt' => 24, ),
		BasePeer::TYPE_COLNAME => array (IndicadorPeer::ID => 0, IndicadorPeer::INDICADOR => 1, IndicadorPeer::BORRADOR => 2, IndicadorPeer::OBJETIVO_ID => 3, IndicadorPeer::OBJETIVO_ESTR => 4, IndicadorPeer::CATEGORIA_ID => 5, IndicadorPeer::PROCESO => 6, IndicadorPeer::DEFINCION => 7, IndicadorPeer::MEDICION => 8, IndicadorPeer::DESCRIPCION => 9, IndicadorPeer::FORMULA_TEXTUAL => 10, IndicadorPeer::TIPO => 11, IndicadorPeer::FRECUENCIA => 12, IndicadorPeer::RESPONSABLE_ID => 13, IndicadorPeer::QUIEN_ID => 14, IndicadorPeer::COMO => 15, IndicadorPeer::QUE => 16, IndicadorPeer::FORMULA => 17, IndicadorPeer::UMBRAL_ROJO => 18, IndicadorPeer::UMBRAL_AMARILLO => 19, IndicadorPeer::UMBRAL_VERDE => 20, IndicadorPeer::META => 21, IndicadorPeer::INICIATIVA => 22, IndicadorPeer::CREATED_AT => 23, IndicadorPeer::UPDATED_AT => 24, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'indicador' => 1, 'borrador' => 2, 'objetivo_id' => 3, 'objetivo_estr' => 4, 'categoria_id' => 5, 'proceso' => 6, 'defincion' => 7, 'medicion' => 8, 'descripcion' => 9, 'formula_textual' => 10, 'tipo' => 11, 'frecuencia' => 12, 'responsable_id' => 13, 'quien_id' => 14, 'como' => 15, 'que' => 16, 'formula' => 17, 'umbral_rojo' => 18, 'umbral_amarillo' => 19, 'umbral_verde' => 20, 'meta' => 21, 'iniciativa' => 22, 'created_at' => 23, 'updated_at' => 24, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/IndicadorMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.IndicadorMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = IndicadorPeer::getTableMap();
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
		return str_replace(IndicadorPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(IndicadorPeer::ID);

		$criteria->addSelectColumn(IndicadorPeer::INDICADOR);

		$criteria->addSelectColumn(IndicadorPeer::BORRADOR);

		$criteria->addSelectColumn(IndicadorPeer::OBJETIVO_ID);

		$criteria->addSelectColumn(IndicadorPeer::OBJETIVO_ESTR);

		$criteria->addSelectColumn(IndicadorPeer::CATEGORIA_ID);

		$criteria->addSelectColumn(IndicadorPeer::PROCESO);

		$criteria->addSelectColumn(IndicadorPeer::DEFINCION);

		$criteria->addSelectColumn(IndicadorPeer::MEDICION);

		$criteria->addSelectColumn(IndicadorPeer::DESCRIPCION);

		$criteria->addSelectColumn(IndicadorPeer::FORMULA_TEXTUAL);

		$criteria->addSelectColumn(IndicadorPeer::TIPO);

		$criteria->addSelectColumn(IndicadorPeer::FRECUENCIA);

		$criteria->addSelectColumn(IndicadorPeer::RESPONSABLE_ID);

		$criteria->addSelectColumn(IndicadorPeer::QUIEN_ID);

		$criteria->addSelectColumn(IndicadorPeer::COMO);

		$criteria->addSelectColumn(IndicadorPeer::QUE);

		$criteria->addSelectColumn(IndicadorPeer::FORMULA);

		$criteria->addSelectColumn(IndicadorPeer::UMBRAL_ROJO);

		$criteria->addSelectColumn(IndicadorPeer::UMBRAL_AMARILLO);

		$criteria->addSelectColumn(IndicadorPeer::UMBRAL_VERDE);

		$criteria->addSelectColumn(IndicadorPeer::META);

		$criteria->addSelectColumn(IndicadorPeer::INICIATIVA);

		$criteria->addSelectColumn(IndicadorPeer::CREATED_AT);

		$criteria->addSelectColumn(IndicadorPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(indicador.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT indicador.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
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
		$objects = IndicadorPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return IndicadorPeer::populateObjects(IndicadorPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			IndicadorPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = IndicadorPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinObjetivo(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinCategoria(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinDependenciaRelatedByResponsableId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinDependenciaRelatedByQuienId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinObjetivo(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ObjetivoPeer::addSelectColumns($c);

		$c->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

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
										$temp_obj2->addIndicador($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initIndicadors();
				$obj2->addIndicador($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinCategoria(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CategoriaPeer::addSelectColumns($c);

		$c->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = CategoriaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getCategoria(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addIndicador($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initIndicadors();
				$obj2->addIndicador($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinDependenciaRelatedByResponsableId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DependenciaPeer::addSelectColumns($c);

		$c->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DependenciaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getDependenciaRelatedByResponsableId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addIndicadorRelatedByResponsableId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initIndicadorsRelatedByResponsableId();
				$obj2->addIndicadorRelatedByResponsableId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinDependenciaRelatedByQuienId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DependenciaPeer::addSelectColumns($c);

		$c->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DependenciaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getDependenciaRelatedByQuienId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addIndicadorRelatedByQuienId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initIndicadorsRelatedByQuienId();
				$obj2->addIndicadorRelatedByQuienId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$criteria->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);

		$criteria->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);

		$criteria->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
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

		IndicadorPeer::addSelectColumns($c);
		$startcol2 = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ObjetivoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ObjetivoPeer::NUM_COLUMNS;

		CategoriaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CategoriaPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + DependenciaPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + DependenciaPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$c->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);

		$c->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);

		$c->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getObjetivo(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicador($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadors();
				$obj2->addIndicador($obj1);
			}


					
			$omClass = CategoriaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCategoria(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addIndicador($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initIndicadors();
				$obj3->addIndicador($obj1);
			}


					
			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getDependenciaRelatedByResponsableId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addIndicadorRelatedByResponsableId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initIndicadorsRelatedByResponsableId();
				$obj4->addIndicadorRelatedByResponsableId($obj1);
			}


					
			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getDependenciaRelatedByQuienId(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addIndicadorRelatedByQuienId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initIndicadorsRelatedByQuienId();
				$obj5->addIndicadorRelatedByQuienId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptObjetivo(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);

		$criteria->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);

		$criteria->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptCategoria(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$criteria->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);

		$criteria->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptDependenciaRelatedByResponsableId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$criteria->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptDependenciaRelatedByQuienId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IndicadorPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IndicadorPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$criteria->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);

		$rs = IndicadorPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptObjetivo(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol2 = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		CategoriaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + CategoriaPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DependenciaPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + DependenciaPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);

		$c->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);

		$c->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = CategoriaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getCategoria(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicador($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadors();
				$obj2->addIndicador($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getDependenciaRelatedByResponsableId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addIndicadorRelatedByResponsableId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initIndicadorsRelatedByResponsableId();
				$obj3->addIndicadorRelatedByResponsableId($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getDependenciaRelatedByQuienId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addIndicadorRelatedByQuienId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initIndicadorsRelatedByQuienId();
				$obj4->addIndicadorRelatedByQuienId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptCategoria(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol2 = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ObjetivoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ObjetivoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DependenciaPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + DependenciaPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$c->addJoin(IndicadorPeer::RESPONSABLE_ID, DependenciaPeer::ID);

		$c->addJoin(IndicadorPeer::QUIEN_ID, DependenciaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getObjetivo(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicador($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadors();
				$obj2->addIndicador($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getDependenciaRelatedByResponsableId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addIndicadorRelatedByResponsableId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initIndicadorsRelatedByResponsableId();
				$obj3->addIndicadorRelatedByResponsableId($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getDependenciaRelatedByQuienId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addIndicadorRelatedByQuienId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initIndicadorsRelatedByQuienId();
				$obj4->addIndicadorRelatedByQuienId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptDependenciaRelatedByResponsableId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol2 = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ObjetivoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ObjetivoPeer::NUM_COLUMNS;

		CategoriaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CategoriaPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$c->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getObjetivo(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicador($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadors();
				$obj2->addIndicador($obj1);
			}

			$omClass = CategoriaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCategoria(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addIndicador($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initIndicadors();
				$obj3->addIndicador($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptDependenciaRelatedByQuienId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IndicadorPeer::addSelectColumns($c);
		$startcol2 = (IndicadorPeer::NUM_COLUMNS - IndicadorPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ObjetivoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ObjetivoPeer::NUM_COLUMNS;

		CategoriaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CategoriaPeer::NUM_COLUMNS;

		$c->addJoin(IndicadorPeer::OBJETIVO_ID, ObjetivoPeer::ID);

		$c->addJoin(IndicadorPeer::CATEGORIA_ID, CategoriaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IndicadorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ObjetivoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getObjetivo(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIndicador($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initIndicadors();
				$obj2->addIndicador($obj1);
			}

			$omClass = CategoriaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCategoria(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addIndicador($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initIndicadors();
				$obj3->addIndicador($obj1);
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
		return IndicadorPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(IndicadorPeer::ID); 

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
			$comparison = $criteria->getComparison(IndicadorPeer::ID);
			$selectCriteria->add(IndicadorPeer::ID, $criteria->remove(IndicadorPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(IndicadorPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(IndicadorPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Indicador) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(IndicadorPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Indicador $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(IndicadorPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(IndicadorPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(IndicadorPeer::DATABASE_NAME, IndicadorPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = IndicadorPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(IndicadorPeer::DATABASE_NAME);

		$criteria->add(IndicadorPeer::ID, $pk);


		$v = IndicadorPeer::doSelect($criteria, $con);

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
			$criteria->add(IndicadorPeer::ID, $pks, Criteria::IN);
			$objs = IndicadorPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseIndicadorPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/IndicadorMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.IndicadorMapBuilder');
}
