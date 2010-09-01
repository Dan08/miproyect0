<?php



class TipoGastoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TipoGastoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tipo_gasto');
		$tMap->setPhpName('TipoGasto');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TIPO_GASTO', 'TipoGasto', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 