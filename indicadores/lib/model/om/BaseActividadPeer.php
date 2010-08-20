<?php


abstract class BaseActividadPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'actividad';

	
	const CLASS_DEFAULT = 'lib.model.Actividad';

	
	const NUM_COLUMNS = 26;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'actividad.ID';

	
	const PROYECTO_ID = 'actividad.PROYECTO_ID';

	
	const DESCRIPCION = 'actividad.DESCRIPCION';

	
	const TIPO_GASTO_ID = 'actividad.TIPO_GASTO_ID';

	
	const COMPONENTE_SECTOR_ID = 'actividad.COMPONENTE_SECTOR_ID';

	
	const CONCEPTO_GASTO_ID = 'actividad.CONCEPTO_GASTO_ID';

	
	const COD_APP_FVS = 'actividad.COD_APP_FVS';

	
	const META_PROYECTO_ID = 'actividad.META_PROYECTO_ID';

	
	const INVERSION_RECURRENTE = 'actividad.INVERSION_RECURRENTE';

	
	const MES_ETAPA_CONTRACTUAL = 'actividad.MES_ETAPA_CONTRACTUAL';

	
	const MES_INICIO_EJECUCION = 'actividad.MES_INICIO_EJECUCION';

	
	const RESERVAS = 'actividad.RESERVAS';

	
	const AREA_RESPONSABLE = 'actividad.AREA_RESPONSABLE';

	
	const COMPONENTE_INVERSION_ID = 'actividad.COMPONENTE_INVERSION_ID';

	
	const PLURIANUAL_PROGRAMADO = 'actividad.PLURIANUAL_PROGRAMADO';

	
	const NUMERO_SOLICITUD = 'actividad.NUMERO_SOLICITUD';

	
	const FECHA_SOLICITUD = 'actividad.FECHA_SOLICITUD';

	
	const FECHA_CONTRATO = 'actividad.FECHA_CONTRATO';

	
	const FECHA_ACTA_INICIO = 'actividad.FECHA_ACTA_INICIO';

	
	const FECHA_TERMINACION = 'actividad.FECHA_TERMINACION';

	
	const FECHA_LIQUIDACION = 'actividad.FECHA_LIQUIDACION';

	
	const PLAZO_MESES = 'actividad.PLAZO_MESES';

	
	const CONTRATO_ID = 'actividad.CONTRATO_ID';

	
	const EXISTENCIA_CONTRATO_NUMERO = 'actividad.EXISTENCIA_CONTRATO_NUMERO';

	
	const CREATED_AT = 'actividad.CREATED_AT';

	
	const UPDATED_AT = 'actividad.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ProyectoId', 'Descripcion', 'TipoGastoId', 'ComponenteSectorId', 'ConceptoGastoId', 'CodAppFvs', 'MetaProyectoId', 'InversionRecurrente', 'MesEtapaContractual', 'MesInicioEjecucion', 'Reservas', 'AreaResponsable', 'ComponenteInversionId', 'PlurianualProgramado', 'NumeroSolicitud', 'FechaSolicitud', 'FechaContrato', 'FechaActaInicio', 'FechaTerminacion', 'FechaLiquidacion', 'PlazoMeses', 'ContratoId', 'ExistenciaContratoNumero', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (ActividadPeer::ID, ActividadPeer::PROYECTO_ID, ActividadPeer::DESCRIPCION, ActividadPeer::TIPO_GASTO_ID, ActividadPeer::COMPONENTE_SECTOR_ID, ActividadPeer::CONCEPTO_GASTO_ID, ActividadPeer::COD_APP_FVS, ActividadPeer::META_PROYECTO_ID, ActividadPeer::INVERSION_RECURRENTE, ActividadPeer::MES_ETAPA_CONTRACTUAL, ActividadPeer::MES_INICIO_EJECUCION, ActividadPeer::RESERVAS, ActividadPeer::AREA_RESPONSABLE, ActividadPeer::COMPONENTE_INVERSION_ID, ActividadPeer::PLURIANUAL_PROGRAMADO, ActividadPeer::NUMERO_SOLICITUD, ActividadPeer::FECHA_SOLICITUD, ActividadPeer::FECHA_CONTRATO, ActividadPeer::FECHA_ACTA_INICIO, ActividadPeer::FECHA_TERMINACION, ActividadPeer::FECHA_LIQUIDACION, ActividadPeer::PLAZO_MESES, ActividadPeer::CONTRATO_ID, ActividadPeer::EXISTENCIA_CONTRATO_NUMERO, ActividadPeer::CREATED_AT, ActividadPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'proyecto_id', 'descripcion', 'tipo_gasto_id', 'componente_sector_id', 'concepto_gasto_id', 'cod_app_fvs', 'meta_proyecto_id', 'inversion_recurrente', 'mes_etapa_contractual', 'mes_inicio_ejecucion', 'reservas', 'area_responsable', 'componente_inversion_id', 'plurianual_programado', 'numero_solicitud', 'fecha_solicitud', 'fecha_contrato', 'fecha_acta_inicio', 'fecha_terminacion', 'fecha_liquidacion', 'plazo_meses', 'contrato_id', 'existencia_contrato_numero', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ProyectoId' => 1, 'Descripcion' => 2, 'TipoGastoId' => 3, 'ComponenteSectorId' => 4, 'ConceptoGastoId' => 5, 'CodAppFvs' => 6, 'MetaProyectoId' => 7, 'InversionRecurrente' => 8, 'MesEtapaContractual' => 9, 'MesInicioEjecucion' => 10, 'Reservas' => 11, 'AreaResponsable' => 12, 'ComponenteInversionId' => 13, 'PlurianualProgramado' => 14, 'NumeroSolicitud' => 15, 'FechaSolicitud' => 16, 'FechaContrato' => 17, 'FechaActaInicio' => 18, 'FechaTerminacion' => 19, 'FechaLiquidacion' => 20, 'PlazoMeses' => 21, 'ContratoId' => 22, 'ExistenciaContratoNumero' => 23, 'CreatedAt' => 24, 'UpdatedAt' => 25, ),
		BasePeer::TYPE_COLNAME => array (ActividadPeer::ID => 0, ActividadPeer::PROYECTO_ID => 1, ActividadPeer::DESCRIPCION => 2, ActividadPeer::TIPO_GASTO_ID => 3, ActividadPeer::COMPONENTE_SECTOR_ID => 4, ActividadPeer::CONCEPTO_GASTO_ID => 5, ActividadPeer::COD_APP_FVS => 6, ActividadPeer::META_PROYECTO_ID => 7, ActividadPeer::INVERSION_RECURRENTE => 8, ActividadPeer::MES_ETAPA_CONTRACTUAL => 9, ActividadPeer::MES_INICIO_EJECUCION => 10, ActividadPeer::RESERVAS => 11, ActividadPeer::AREA_RESPONSABLE => 12, ActividadPeer::COMPONENTE_INVERSION_ID => 13, ActividadPeer::PLURIANUAL_PROGRAMADO => 14, ActividadPeer::NUMERO_SOLICITUD => 15, ActividadPeer::FECHA_SOLICITUD => 16, ActividadPeer::FECHA_CONTRATO => 17, ActividadPeer::FECHA_ACTA_INICIO => 18, ActividadPeer::FECHA_TERMINACION => 19, ActividadPeer::FECHA_LIQUIDACION => 20, ActividadPeer::PLAZO_MESES => 21, ActividadPeer::CONTRATO_ID => 22, ActividadPeer::EXISTENCIA_CONTRATO_NUMERO => 23, ActividadPeer::CREATED_AT => 24, ActividadPeer::UPDATED_AT => 25, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'proyecto_id' => 1, 'descripcion' => 2, 'tipo_gasto_id' => 3, 'componente_sector_id' => 4, 'concepto_gasto_id' => 5, 'cod_app_fvs' => 6, 'meta_proyecto_id' => 7, 'inversion_recurrente' => 8, 'mes_etapa_contractual' => 9, 'mes_inicio_ejecucion' => 10, 'reservas' => 11, 'area_responsable' => 12, 'componente_inversion_id' => 13, 'plurianual_programado' => 14, 'numero_solicitud' => 15, 'fecha_solicitud' => 16, 'fecha_contrato' => 17, 'fecha_acta_inicio' => 18, 'fecha_terminacion' => 19, 'fecha_liquidacion' => 20, 'plazo_meses' => 21, 'contrato_id' => 22, 'existencia_contrato_numero' => 23, 'created_at' => 24, 'updated_at' => 25, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
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

		$criteria->addSelectColumn(ActividadPeer::TIPO_GASTO_ID);

		$criteria->addSelectColumn(ActividadPeer::COMPONENTE_SECTOR_ID);

		$criteria->addSelectColumn(ActividadPeer::CONCEPTO_GASTO_ID);

		$criteria->addSelectColumn(ActividadPeer::COD_APP_FVS);

		$criteria->addSelectColumn(ActividadPeer::META_PROYECTO_ID);

		$criteria->addSelectColumn(ActividadPeer::INVERSION_RECURRENTE);

		$criteria->addSelectColumn(ActividadPeer::MES_ETAPA_CONTRACTUAL);

		$criteria->addSelectColumn(ActividadPeer::MES_INICIO_EJECUCION);

		$criteria->addSelectColumn(ActividadPeer::RESERVAS);

		$criteria->addSelectColumn(ActividadPeer::AREA_RESPONSABLE);

		$criteria->addSelectColumn(ActividadPeer::COMPONENTE_INVERSION_ID);

		$criteria->addSelectColumn(ActividadPeer::PLURIANUAL_PROGRAMADO);

		$criteria->addSelectColumn(ActividadPeer::NUMERO_SOLICITUD);

		$criteria->addSelectColumn(ActividadPeer::FECHA_SOLICITUD);

		$criteria->addSelectColumn(ActividadPeer::FECHA_CONTRATO);

		$criteria->addSelectColumn(ActividadPeer::FECHA_ACTA_INICIO);

		$criteria->addSelectColumn(ActividadPeer::FECHA_TERMINACION);

		$criteria->addSelectColumn(ActividadPeer::FECHA_LIQUIDACION);

		$criteria->addSelectColumn(ActividadPeer::PLAZO_MESES);

		$criteria->addSelectColumn(ActividadPeer::CONTRATO_ID);

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


	
	public static function doCountJoinTipoGasto(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinComponenteSector(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinConceptoGasto(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinMetaProyecto(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinDependencia(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinComponente(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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


	
	public static function doSelectJoinTipoGasto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TipoGastoPeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoGastoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTipoGasto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
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


	
	public static function doSelectJoinComponenteSector(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ComponenteSectorPeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ComponenteSectorPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getComponenteSector(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
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


	
	public static function doSelectJoinConceptoGasto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ConceptoGastoPeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ConceptoGastoPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
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


	
	public static function doSelectJoinMetaProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		MetaProyectoPeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

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


	
	public static function doSelectJoinDependencia(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DependenciaPeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DependenciaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getDependencia(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
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


	
	public static function doSelectJoinComponente(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ComponentePeer::addSelectColumns($c);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ComponentePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getComponente(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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

		TipoGastoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoGastoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ComponenteSectorPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ConceptoGastoPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + MetaProyectoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + DependenciaPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ComponentePeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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


					
			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoGasto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}


					
			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getComponenteSector(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}


					
			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}


					
			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}


					
			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7 = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getDependencia(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}


					
			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8 = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getComponente(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
			}


					
			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj9 = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getContrato(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addActividad($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj9->initActividads();
				$obj9->addActividad($obj1);
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTipoGasto(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptComponenteSector(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptConceptoGasto(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptMetaProyecto(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptDependencia(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

		$criteria->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);

		$rs = ActividadPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptComponente(Criteria $criteria, $distinct = false, $con = null)
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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

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

		$criteria->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$criteria->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$criteria->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$criteria->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$criteria->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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

		TipoGastoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TipoGastoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ComponenteSectorPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ConceptoGastoPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MetaProyectoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + DependenciaPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ComponentePeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

		$c->addJoin(ActividadPeer::CONTRATO_ID, ContratoPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ActividadPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTipoGasto(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initActividads();
				$obj2->addActividad($obj1);
			}

			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getComponenteSector(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getDependencia(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getComponente(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getContrato(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTipoGasto(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ComponenteSectorPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ConceptoGastoPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MetaProyectoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + DependenciaPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ComponentePeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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

			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getComponenteSector(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getDependencia(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getComponente(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getContrato(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptComponenteSector(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		TipoGastoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoGastoPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ConceptoGastoPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MetaProyectoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + DependenciaPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ComponentePeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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

			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoGasto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getDependencia(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getComponente(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getContrato(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptConceptoGasto(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		TipoGastoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoGastoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ComponenteSectorPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + MetaProyectoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + DependenciaPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ComponentePeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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

			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoGasto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getComponenteSector(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getDependencia(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getComponente(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getContrato(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptMetaProyecto(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		TipoGastoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoGastoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ComponenteSectorPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ConceptoGastoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + DependenciaPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ComponentePeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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

			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoGasto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getComponenteSector(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getDependencia(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getComponente(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getContrato(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptDependencia(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		TipoGastoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoGastoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ComponenteSectorPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ConceptoGastoPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + MetaProyectoPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + ComponentePeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);

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

			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoGasto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getComponenteSector(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getComponente(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getContrato(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptComponente(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ActividadPeer::addSelectColumns($c);
		$startcol2 = (ActividadPeer::NUM_COLUMNS - ActividadPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProyectoPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProyectoPeer::NUM_COLUMNS;

		TipoGastoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoGastoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ComponenteSectorPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ConceptoGastoPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + MetaProyectoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + DependenciaPeer::NUM_COLUMNS;

		ContratoPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ContratoPeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

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

			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoGasto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getComponenteSector(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getDependencia(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ContratoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getContrato(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
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

		TipoGastoPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TipoGastoPeer::NUM_COLUMNS;

		ComponenteSectorPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ComponenteSectorPeer::NUM_COLUMNS;

		ConceptoGastoPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ConceptoGastoPeer::NUM_COLUMNS;

		MetaProyectoPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + MetaProyectoPeer::NUM_COLUMNS;

		DependenciaPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + DependenciaPeer::NUM_COLUMNS;

		ComponentePeer::addSelectColumns($c);
		$startcol9 = $startcol8 + ComponentePeer::NUM_COLUMNS;

		$c->addJoin(ActividadPeer::PROYECTO_ID, ProyectoPeer::ID);

		$c->addJoin(ActividadPeer::TIPO_GASTO_ID, TipoGastoPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_SECTOR_ID, ComponenteSectorPeer::ID);

		$c->addJoin(ActividadPeer::CONCEPTO_GASTO_ID, ConceptoGastoPeer::ID);

		$c->addJoin(ActividadPeer::META_PROYECTO_ID, MetaProyectoPeer::ID);

		$c->addJoin(ActividadPeer::AREA_RESPONSABLE, DependenciaPeer::ID);

		$c->addJoin(ActividadPeer::COMPONENTE_INVERSION_ID, ComponentePeer::ID);


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

			$omClass = TipoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTipoGasto(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initActividads();
				$obj3->addActividad($obj1);
			}

			$omClass = ComponenteSectorPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getComponenteSector(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initActividads();
				$obj4->addActividad($obj1);
			}

			$omClass = ConceptoGastoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getConceptoGasto(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initActividads();
				$obj5->addActividad($obj1);
			}

			$omClass = MetaProyectoPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getMetaProyecto(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initActividads();
				$obj6->addActividad($obj1);
			}

			$omClass = DependenciaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getDependencia(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initActividads();
				$obj7->addActividad($obj1);
			}

			$omClass = ComponentePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getComponente(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addActividad($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initActividads();
				$obj8->addActividad($obj1);
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
