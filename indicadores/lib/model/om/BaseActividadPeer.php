<?php


abstract class BaseActividadPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'actividad';

	
	const CLASS_DEFAULT = 'lib.model.Actividad';

	
	const NUM_COLUMNS = 24;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'actividad.ID';

	
	const PROYECTO_ID = 'actividad.PROYECTO_ID';

	
	const DESCRIPCION = 'actividad.DESCRIPCION';

	
	const TIPO_GASTO = 'actividad.TIPO_GASTO';

	
	const COMPONENTE_SECTOR = 'actividad.COMPONENTE_SECTOR';

	
	const CONCEPTO_GASTO = 'actividad.CONCEPTO_GASTO';

	
	const MES_ETAPA_CONTRACTUAL = 'actividad.MES_ETAPA_CONTRACTUAL';

	
	const MES_EJECUCION = 'actividad.MES_EJECUCION';

	
	const RESERVAS = 'actividad.RESERVAS';

	
	const AREA_RESPONSABLE = 'actividad.AREA_RESPONSABLE';

	
	const VALOR_PROCESO = 'actividad.VALOR_PROCESO';

	
	const NUMERO_SOLICITUD = 'actividad.NUMERO_SOLICITUD';

	
	const FECHA_SOLICITUD = 'actividad.FECHA_SOLICITUD';

	
	const FECHA_CONTRATO = 'actividad.FECHA_CONTRATO';

	
	const FECHA_ACTA_INICIO = 'actividad.FECHA_ACTA_INICIO';

	
	const FECHA_TERMINACION = 'actividad.FECHA_TERMINACION';

	
	const FECHA_LIQUIDACION = 'actividad.FECHA_LIQUIDACION';

	
	const PLAZO_MESES = 'actividad.PLAZO_MESES';

	
	const CONTRATO_ID = 'actividad.CONTRATO_ID';

	
	const CLASE_CONTRATO = 'actividad.CLASE_CONTRATO';

	
	const ESTADO = 'actividad.ESTADO';

	
	const EXISTENCIA_CONTRATO_NUMERO = 'actividad.EXISTENCIA_CONTRATO_NUMERO';

	
	const CREATED_AT = 'actividad.CREATED_AT';

	
	const UPDATED_AT = 'actividad.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ProyectoId', 'Descripcion', 'TipoGasto', 'ComponenteSector', 'ConceptoGasto', 'MesEtapaContractual', 'MesEjecucion', 'Reservas', 'AreaResponsable', 'ValorProceso', 'NumeroSolicitud', 'FechaSolicitud', 'FechaContrato', 'FechaActaInicio', 'FechaTerminacion', 'FechaLiquidacion', 'PlazoMeses', 'ContratoId', 'ClaseContrato', 'Estado', 'ExistenciaContratoNumero', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (ActividadPeer::ID, ActividadPeer::PROYECTO_ID, ActividadPeer::DESCRIPCION, ActividadPeer::TIPO_GASTO, ActividadPeer::COMPONENTE_SECTOR, ActividadPeer::CONCEPTO_GASTO, ActividadPeer::MES_ETAPA_CONTRACTUAL, ActividadPeer::MES_EJECUCION, ActividadPeer::RESERVAS, ActividadPeer::AREA_RESPONSABLE, ActividadPeer::VALOR_PROCESO, ActividadPeer::NUMERO_SOLICITUD, ActividadPeer::FECHA_SOLICITUD, ActividadPeer::FECHA_CONTRATO, ActividadPeer::FECHA_ACTA_INICIO, ActividadPeer::FECHA_TERMINACION, ActividadPeer::FECHA_LIQUIDACION, ActividadPeer::PLAZO_MESES, ActividadPeer::CONTRATO_ID, ActividadPeer::CLASE_CONTRATO, ActividadPeer::ESTADO, ActividadPeer::EXISTENCIA_CONTRATO_NUMERO, ActividadPeer::CREATED_AT, ActividadPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'proyecto_id', 'descripcion', 'tipo_gasto', 'componente_sector', 'concepto_gasto', 'mes_etapa_contractual', 'mes_ejecucion', 'reservas', 'area_responsable', 'valor_proceso', 'numero_solicitud', 'fecha_solicitud', 'fecha_contrato', 'fecha_acta_inicio', 'fecha_terminacion', 'fecha_liquidacion', 'plazo_meses', 'contrato_id', 'clase_contrato', 'estado', 'existencia_contrato_numero', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ProyectoId' => 1, 'Descripcion' => 2, 'TipoGasto' => 3, 'ComponenteSector' => 4, 'ConceptoGasto' => 5, 'MesEtapaContractual' => 6, 'MesEjecucion' => 7, 'Reservas' => 8, 'AreaResponsable' => 9, 'ValorProceso' => 10, 'NumeroSolicitud' => 11, 'FechaSolicitud' => 12, 'FechaContrato' => 13, 'FechaActaInicio' => 14, 'FechaTerminacion' => 15, 'FechaLiquidacion' => 16, 'PlazoMeses' => 17, 'ContratoId' => 18, 'ClaseContrato' => 19, 'Estado' => 20, 'ExistenciaContratoNumero' => 21, 'CreatedAt' => 22, 'UpdatedAt' => 23, ),
		BasePeer::TYPE_COLNAME => array (ActividadPeer::ID => 0, ActividadPeer::PROYECTO_ID => 1, ActividadPeer::DESCRIPCION => 2, ActividadPeer::TIPO_GASTO => 3, ActividadPeer::COMPONENTE_SECTOR => 4, ActividadPeer::CONCEPTO_GASTO => 5, ActividadPeer::MES_ETAPA_CONTRACTUAL => 6, ActividadPeer::MES_EJECUCION => 7, ActividadPeer::RESERVAS => 8, ActividadPeer::AREA_RESPONSABLE => 9, ActividadPeer::VALOR_PROCESO => 10, ActividadPeer::NUMERO_SOLICITUD => 11, ActividadPeer::FECHA_SOLICITUD => 12, ActividadPeer::FECHA_CONTRATO => 13, ActividadPeer::FECHA_ACTA_INICIO => 14, ActividadPeer::FECHA_TERMINACION => 15, ActividadPeer::FECHA_LIQUIDACION => 16, ActividadPeer::PLAZO_MESES => 17, ActividadPeer::CONTRATO_ID => 18, ActividadPeer::CLASE_CONTRATO => 19, ActividadPeer::ESTADO => 20, ActividadPeer::EXISTENCIA_CONTRATO_NUMERO => 21, ActividadPeer::CREATED_AT => 22, ActividadPeer::UPDATED_AT => 23, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'proyecto_id' => 1, 'descripcion' => 2, 'tipo_gasto' => 3, 'componente_sector' => 4, 'concepto_gasto' => 5, 'mes_etapa_contractual' => 6, 'mes_ejecucion' => 7, 'reservas' => 8, 'area_responsable' => 9, 'valor_proceso' => 10, 'numero_solicitud' => 11, 'fecha_solicitud' => 12, 'fecha_contrato' => 13, 'fecha_acta_inicio' => 14, 'fecha_terminacion' => 15, 'fecha_liquidacion' => 16, 'plazo_meses' => 17, 'contrato_id' => 18, 'clase_contrato' => 19, 'estado' => 20, 'existencia_contrato_numero' => 21, 'created_at' => 22, 'updated_at' => 23, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ActividadMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ActividadMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ActividadPeer::getTableMap();
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
		return str_replace(ActividadPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ActividadPeer::ID);

		$criteria->addSelectColumn(ActividadPeer::PROYECTO_ID);

		$criteria->addSelectColumn(ActividadPeer::DESCRIPCION);

		$criteria->addSelectColumn(ActividadPeer::TIPO_GASTO);

		$criteria->addSelectColumn(ActividadPeer::COMPONENTE_SECTOR);

		$criteria->addSelectColumn(ActividadPeer::CONCEPTO_GASTO);

		$criteria->addSelectColumn(ActividadPeer::MES_ETAPA_CONTRACTUAL);

		$criteria->addSelectColumn(ActividadPeer::MES_EJECUCION);

		$criteria->addSelectColumn(ActividadPeer::RESERVAS);

		$criteria->addSelectColumn(ActividadPeer::AREA_RESPONSABLE);

		$criteria->addSelectColumn(ActividadPeer::VALOR_PROCESO);

		$criteria->addSelectColumn(ActividadPeer::NUMERO_SOLICITUD);

		$criteria->addSelectColumn(ActividadPeer::FECHA_SOLICITUD);

		$criteria->addSelectColumn(ActividadPeer::FECHA_CONTRATO);

		$criteria->addSelectColumn(ActividadPeer::FECHA_ACTA_INICIO);

		$criteria->addSelectColumn(ActividadPeer::FECHA_TERMINACION);

		$criteria->addSelectColumn(ActividadPeer::FECHA_LIQUIDACION);

		$criteria->addSelectColumn(ActividadPeer::PLAZO_MESES);

		$criteria->addSelectColumn(ActividadPeer::CONTRATO_ID);

		$criteria->addSelectColumn(ActividadPeer::CLASE_CONTRATO);

		$criteria->addSelectColumn(ActividadPeer::ESTADO);

		$criteria->addSelectColumn(ActividadPeer::EXISTENCIA_CONTRATO_NUMERO);

		$criteria->addSelectColumn(ActividadPeer::CREATED_AT);

		$criteria->addSelectColumn(ActividadPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(actividad.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT actividad.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ActividadPeer::doSelectRS($criteria, $con);
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
		$objects = ActividadPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ActividadPeer::populateObjects(ActividadPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ActividadPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ActividadPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinContrato(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProyectoPeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

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
										$temp_obj2->addActividad($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initActividads();
				$obj2->addActividad($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinContrato(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ContratoPeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ContratoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getContrato(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addActividad($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initActividads();
				$obj2->addActividad($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
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

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getProyecto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initActividads();
				$obj2->addActividad($obj1);
			}


					
			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getContrato(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptProyecto(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptContrato(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ActividadPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ActividadPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ContratoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getContrato(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initActividads();
				$obj2->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptContrato(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

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
					$temp_obj2->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initActividads();
				$obj2->addActividad($obj1);
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
		return ActividadPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ActividadPeer::ID); 

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
			$comparison = $criteria->getComparison(ActividadPeer::ID);
			$selectCriteria->add(ActividadPeer::ID, $criteria->remove(ActividadPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ActividadPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ActividadPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Actividad) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ActividadPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Actividad $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ActividadPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ActividadPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ActividadPeer::DATABASE_NAME, ActividadPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ActividadPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ActividadPeer::DATABASE_NAME);

		$criteria->add(ActividadPeer::ID, $pk);


		$v = ActividadPeer::doSelect($criteria, $con);

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
			$criteria->add(ActividadPeer::ID, $pks, Criteria::IN);
			$objs = ActividadPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseActividadPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ActividadMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ActividadMapBuilder');
}
