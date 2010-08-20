<?php


abstract class BaseContratoPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'contrato';

	
	const CLASS_DEFAULT = 'lib.model.Contrato';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'contrato.ID';

	
	const NUMERO = 'contrato.NUMERO';

	
	const CONTRATISTA = 'contrato.CONTRATISTA';

	
	const FECHA_FIRMA = 'contrato.FECHA_FIRMA';

	
	const FECHA_ACTA_INICIO = 'contrato.FECHA_ACTA_INICIO';

	
	const FECHA_TERMINACION = 'contrato.FECHA_TERMINACION';

	
	const FECHA_LIQUIDACION = 'contrato.FECHA_LIQUIDACION';

	
	const MODALIDAD_CONTRATACION = 'contrato.MODALIDAD_CONTRATACION';

	
	const CANTIDAD = 'contrato.CANTIDAD';

	
	const UNIDAD_MEDIDA = 'contrato.UNIDAD_MEDIDA';

	
	const CLASE_CONTRATO = 'contrato.CLASE_CONTRATO';

	
	const PLAZO = 'contrato.PLAZO';

	
	const ESTADO = 'contrato.ESTADO';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Numero', 'Contratista', 'FechaFirma', 'FechaActaInicio', 'FechaTerminacion', 'FechaLiquidacion', 'ModalidadContratacion', 'Cantidad', 'UnidadMedida', 'ClaseContrato', 'Plazo', 'Estado', ),
		BasePeer::TYPE_COLNAME => array (ContratoPeer::ID, ContratoPeer::NUMERO, ContratoPeer::CONTRATISTA, ContratoPeer::FECHA_FIRMA, ContratoPeer::FECHA_ACTA_INICIO, ContratoPeer::FECHA_TERMINACION, ContratoPeer::FECHA_LIQUIDACION, ContratoPeer::MODALIDAD_CONTRATACION, ContratoPeer::CANTIDAD, ContratoPeer::UNIDAD_MEDIDA, ContratoPeer::CLASE_CONTRATO, ContratoPeer::PLAZO, ContratoPeer::ESTADO, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'numero', 'contratista', 'fecha_firma', 'fecha_acta_inicio', 'fecha_terminacion', 'fecha_liquidacion', 'modalidad_contratacion', 'cantidad', 'unidad_medida', 'clase_contrato', 'plazo', 'estado', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Numero' => 1, 'Contratista' => 2, 'FechaFirma' => 3, 'FechaActaInicio' => 4, 'FechaTerminacion' => 5, 'FechaLiquidacion' => 6, 'ModalidadContratacion' => 7, 'Cantidad' => 8, 'UnidadMedida' => 9, 'ClaseContrato' => 10, 'Plazo' => 11, 'Estado' => 12, ),
		BasePeer::TYPE_COLNAME => array (ContratoPeer::ID => 0, ContratoPeer::NUMERO => 1, ContratoPeer::CONTRATISTA => 2, ContratoPeer::FECHA_FIRMA => 3, ContratoPeer::FECHA_ACTA_INICIO => 4, ContratoPeer::FECHA_TERMINACION => 5, ContratoPeer::FECHA_LIQUIDACION => 6, ContratoPeer::MODALIDAD_CONTRATACION => 7, ContratoPeer::CANTIDAD => 8, ContratoPeer::UNIDAD_MEDIDA => 9, ContratoPeer::CLASE_CONTRATO => 10, ContratoPeer::PLAZO => 11, ContratoPeer::ESTADO => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'numero' => 1, 'contratista' => 2, 'fecha_firma' => 3, 'fecha_acta_inicio' => 4, 'fecha_terminacion' => 5, 'fecha_liquidacion' => 6, 'modalidad_contratacion' => 7, 'cantidad' => 8, 'unidad_medida' => 9, 'clase_contrato' => 10, 'plazo' => 11, 'estado' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ContratoMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ContratoMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ContratoPeer::getTableMap();
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
		return str_replace(ContratoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ContratoPeer::ID);

		$criteria->addSelectColumn(ContratoPeer::NUMERO);

		$criteria->addSelectColumn(ContratoPeer::CONTRATISTA);

		$criteria->addSelectColumn(ContratoPeer::FECHA_FIRMA);

		$criteria->addSelectColumn(ContratoPeer::FECHA_ACTA_INICIO);

		$criteria->addSelectColumn(ContratoPeer::FECHA_TERMINACION);

		$criteria->addSelectColumn(ContratoPeer::FECHA_LIQUIDACION);

		$criteria->addSelectColumn(ContratoPeer::MODALIDAD_CONTRATACION);

		$criteria->addSelectColumn(ContratoPeer::CANTIDAD);

		$criteria->addSelectColumn(ContratoPeer::UNIDAD_MEDIDA);

		$criteria->addSelectColumn(ContratoPeer::CLASE_CONTRATO);

		$criteria->addSelectColumn(ContratoPeer::PLAZO);

		$criteria->addSelectColumn(ContratoPeer::ESTADO);

	}

	const COUNT = 'COUNT(contrato.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT contrato.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ContratoPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ContratoPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ContratoPeer::doSelectRS($criteria, $con);
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
		$objects = ContratoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ContratoPeer::populateObjects(ContratoPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ContratoPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ContratoPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return ContratoPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ContratoPeer::ID); 

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
			$comparison = $criteria->getComparison(ContratoPeer::ID);
			$selectCriteria->add(ContratoPeer::ID, $criteria->remove(ContratoPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ContratoPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ContratoPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Contrato) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ContratoPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Contrato $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ContratoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ContratoPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ContratoPeer::DATABASE_NAME, ContratoPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ContratoPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ContratoPeer::DATABASE_NAME);

		$criteria->add(ContratoPeer::ID, $pk);


		$v = ContratoPeer::doSelect($criteria, $con);

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
			$criteria->add(ContratoPeer::ID, $pks, Criteria::IN);
			$objs = ContratoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseContratoPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/ContratoMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ContratoMapBuilder');
}
