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

		$tMap->addForeignKey('PROYECTO_INVERSION_ID', 'ProyectoInversionId', 'int', CreoleTypes::INTEGER, 'proyecto_inversion', 'ID', false, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TIPO_GASTO', 'TipoGasto', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('COMPONENTE_SECTOR', 'ComponenteSector', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('CONCEPTO_GASTO', 'ConceptoGasto', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('MES_ETAPA_CONTRACTUAL', 'MesEtapaContractual', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('MES_EJECUCION', 'MesEjecucion', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('RESERVAS', 'Reservas', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('AREA_RESPONSABLE', 'AreaResponsable', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('VALOR_PROCESO', 'ValorProceso', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('NUMERO_SOLICITUD', 'NumeroSolicitud', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FECHA_SOLICITUD', 'FechaSolicitud', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_CONTRATO', 'FechaContrato', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_ACTA_INICIO', 'FechaActaInicio', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_TERMINACION', 'FechaTerminacion', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_LIQUIDACION', 'FechaLiquidacion', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('PLAZO_MESES', 'PlazoMeses', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('CONTRATO_ID', 'ContratoId', 'int', CreoleTypes::INTEGER, 'contrato', 'ID', false, null);

		$tMap->addColumn('CLASE_CONTRATO', 'ClaseContrato', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('ESTADO', 'Estado', 'string', CreoleTypes::VARCHAR, false, 80);

		$tMap->addColumn('EXISTENCIA_CONTRATO_NUMERO', 'ExistenciaContratoNumero', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('GIROS', 'Giros', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('SALDO', 'Saldo', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 