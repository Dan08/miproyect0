<?php



class ClienteActividadMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ClienteActividadMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cliente_actividad');
		$tMap->setPhpName('ClienteActividad');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('CLIENTE_ID', 'ClienteId', 'int', CreoleTypes::INTEGER, 'cliente', 'ID', false, null);

		$tMap->addForeignKey('ACTIVIDAD_ID', 'ActividadId', 'int', CreoleTypes::INTEGER, 'actividad', 'ID', false, null);

		$tMap->addColumn('MONTO', 'Monto', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CANTIDAD', 'Cantidad', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 