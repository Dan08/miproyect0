<?php



class ComponenteMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ComponenteMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('componente');
		$tMap->setPhpName('Componente');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CODIGO', 'Codigo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('COMPONENTE', 'Componente', 'string', CreoleTypes::VARCHAR, false, 100);

	} 
} 