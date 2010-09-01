<?php



class ComponenteProyectoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ComponenteProyectoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('componente_proyecto');
		$tMap->setPhpName('ComponenteProyecto');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('COMPONENTE_ID', 'ComponenteId', 'int', CreoleTypes::INTEGER, 'componente', 'ID', false, null);

		$tMap->addForeignKey('PROYECTO_ID', 'ProyectoId', 'int', CreoleTypes::INTEGER, 'proyecto', 'ID', false, null);

		$tMap->addColumn('MONTO', 'Monto', 'double', CreoleTypes::FLOAT, false, null);

	} 
} 