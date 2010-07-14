<?php



class FuenteActividadMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FuenteActividadMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('fuente_actividad');
		$tMap->setPhpName('FuenteActividad');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('FUENTE_ID', 'FuenteId', 'int', CreoleTypes::INTEGER, 'fuente', 'ID', false, null);

		$tMap->addForeignKey('ACTIVIDAD_ID', 'ActividadId', 'int', CreoleTypes::INTEGER, 'actividad', 'ID', false, null);

		$tMap->addColumn('MONTO', 'Monto', 'double', CreoleTypes::FLOAT, false, null);

	} 
} 