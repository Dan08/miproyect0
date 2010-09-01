<?php



class ComponenteSectorMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ComponenteSectorMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('componente_sector');
		$tMap->setPhpName('ComponenteSector');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COMPONENTE_SECTOR', 'ComponenteSector', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 