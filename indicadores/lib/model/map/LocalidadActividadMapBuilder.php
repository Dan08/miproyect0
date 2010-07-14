<?php



class LocalidadActividadMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.LocalidadActividadMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('localidad_actividad');
		$tMap->setPhpName('LocalidadActividad');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('LOCALIDAD_ID', 'LocalidadId', 'int', CreoleTypes::INTEGER, 'localidad', 'ID', false, null);

		$tMap->addForeignKey('ACTIVIDAD_ID', 'ActividadId', 'int', CreoleTypes::INTEGER, 'actividad', 'ID', false, null);

		$tMap->addColumn('MONTO', 'Monto', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CANTIDAD', 'Cantidad', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 