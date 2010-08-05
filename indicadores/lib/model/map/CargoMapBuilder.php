<?php



class CargoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CargoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cargo');
		$tMap->setPhpName('Cargo');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NOMBRE', 'Nombre', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addForeignKey('DEPENDENCIA_ID', 'DependenciaId', 'int', CreoleTypes::INTEGER, 'dependencia', 'ID', false, null);

	} 
} 