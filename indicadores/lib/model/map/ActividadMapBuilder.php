<?php



class ActividadMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ActividadMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('actividad');
		$tMap->setPhpName('Actividad');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PROYECTO_ID', 'ProyectoId', 'int', CreoleTypes::INTEGER, 'proyecto', 'ID', false, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addForeignKey('TIPO_GASTO_ID', 'TipoGastoId', 'int', CreoleTypes::INTEGER, 'tipo_gasto', 'ID', false, null);

		$tMap->addForeignKey('COMPONENTE_SECTOR_ID', 'ComponenteSectorId', 'int', CreoleTypes::INTEGER, 'componente_sector', 'ID', false, null);

		$tMap->addForeignKey('CONCEPTO_GASTO_ID', 'ConceptoGastoId', 'int', CreoleTypes::INTEGER, 'concepto_gasto', 'ID', false, null);

		$tMap->addColumn('COD_APP_FVS', 'CodAppFvs', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addForeignKey('META_PROYECTO_ID', 'MetaProyectoId', 'int', CreoleTypes::INTEGER, 'meta_proyecto', 'ID', false, null);

		$tMap->addColumn('INVERSION_RECURRENTE', 'InversionRecurrente', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('MES_ETAPA_CONTRACTUAL', 'MesEtapaContractual', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('MES_INICIO_EJECUCION', 'MesInicioEjecucion', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('RESERVAS', 'Reservas', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addForeignKey('AREA_RESPONSABLE', 'AreaResponsable', 'int', CreoleTypes::INTEGER, 'dependencia', 'ID', false, null);

		$tMap->addForeignKey('COMPONENTE_INVERSION_ID', 'ComponenteInversionId', 'int', CreoleTypes::INTEGER, 'componente', 'ID', false, null);

		$tMap->addColumn('PLURIANUAL_PROGRAMADO', 'PlurianualProgramado', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NUMERO_SOLICITUD', 'NumeroSolicitud', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FECHA_SOLICITUD', 'FechaSolicitud', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_CONTRATO', 'FechaContrato', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_ACTA_INICIO', 'FechaActaInicio', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_TERMINACION', 'FechaTerminacion', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_LIQUIDACION', 'FechaLiquidacion', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('PLAZO_MESES', 'PlazoMeses', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('CONTRATO_ID', 'ContratoId', 'int', CreoleTypes::INTEGER, 'contrato', 'ID', false, null);

		$tMap->addColumn('EXISTENCIA_CONTRATO_NUMERO', 'ExistenciaContratoNumero', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 