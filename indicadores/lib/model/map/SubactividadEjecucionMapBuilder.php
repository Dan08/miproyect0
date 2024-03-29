<?php



class SubactividadEjecucionMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.SubactividadEjecucionMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('subactividad_ejecucion');
		$tMap->setPhpName('SubactividadEjecucion');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('SUBACTIVIDAD_PROYECTO_ID', 'SubactividadProyectoId', 'int', CreoleTypes::INTEGER, 'subactividad_proyecto', 'ID', false, null);

		$tMap->addColumn('MES', 'Mes', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('AVANCE', 'Avance', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 