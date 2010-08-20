<?php



class ContratoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ContratoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('contrato');
		$tMap->setPhpName('Contrato');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUMERO', 'Numero', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('CONTRATISTA', 'Contratista', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('FECHA_FIRMA', 'FechaFirma', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_ACTA_INICIO', 'FechaActaInicio', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_TERMINACION', 'FechaTerminacion', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FECHA_LIQUIDACION', 'FechaLiquidacion', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MODALIDAD_CONTRATACION', 'ModalidadContratacion', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('CANTIDAD', 'Cantidad', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('UNIDAD_MEDIDA', 'UnidadMedida', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CLASE_CONTRATO', 'ClaseContrato', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PLAZO', 'Plazo', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ESTADO', 'Estado', 'string', CreoleTypes::VARCHAR, false, 80);

	} 
} 