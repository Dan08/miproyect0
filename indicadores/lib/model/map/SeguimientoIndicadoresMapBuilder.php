<?php



class SeguimientoIndicadoresMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.SeguimientoIndicadoresMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('seguimiento_indicadores');
		$tMap->setPhpName('SeguimientoIndicadores');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('INDICADOR_META_ID', 'IndicadorMetaId', 'int', CreoleTypes::INTEGER, 'indicador_meta', 'ID', false, null);

		$tMap->addColumn('ANYO', 'Anyo', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('VALOR', 'Valor', 'double', CreoleTypes::FLOAT, false, null);

	} 
} 