<?php



class FuenteMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FuenteMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('fuente');
		$tMap->setPhpName('Fuente');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CODIGO', 'Codigo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FUENTE', 'Fuente', 'string', CreoleTypes::VARCHAR, false, 100);

	} 
} 