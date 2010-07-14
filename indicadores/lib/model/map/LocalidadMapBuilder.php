<?php



class LocalidadMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.LocalidadMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('localidad');
		$tMap->setPhpName('Localidad');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LOCALIDAD', 'Localidad', 'string', CreoleTypes::VARCHAR, false, 50);

	} 
} 