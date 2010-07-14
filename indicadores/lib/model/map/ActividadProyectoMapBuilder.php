<?php



class ActividadProyectoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ActividadProyectoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('actividad_proyecto');
		$tMap->setPhpName('ActividadProyecto');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PROYECTO_ID', 'ProyectoId', 'int', CreoleTypes::INTEGER, 'proyecto', 'ID', false, null);

		$tMap->addColumn('ACTIVIDAD', 'Actividad', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PONDERACION', 'Ponderacion', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 