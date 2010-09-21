<?php



class ActividadPoaMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ActividadPoaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('actividad_poa');
		$tMap->setPhpName('ActividadPoa');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('META_POA_ID', 'MetaPoaId', 'int', CreoleTypes::INTEGER, 'meta_poa', 'ID', false, null);

		$tMap->addForeignKey('PROCESO_ID', 'ProcesoId', 'int', CreoleTypes::INTEGER, 'proceso', 'ID', false, null);

		$tMap->addForeignKey('PROYECTO_ID', 'ProyectoId', 'int', CreoleTypes::INTEGER, 'proyecto', 'ID', false, null);

		$tMap->addForeignKey('ACTIVIDAD_ID', 'ActividadId', 'int', CreoleTypes::INTEGER, 'actividad_proyecto', 'ID', false, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('RESPONSABLE', 'Responsable', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('OBSERVACIONES', 'Observaciones', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 