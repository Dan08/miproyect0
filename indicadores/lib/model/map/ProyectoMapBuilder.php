<?php



class ProyectoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ProyectoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('proyecto');
		$tMap->setPhpName('Proyecto');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('META_PROYECTO_ID', 'MetaProyectoId', 'int', CreoleTypes::INTEGER, 'meta_proyecto', 'ID', false, null);

		$tMap->addForeignKey('ANUALIZACION_ID', 'AnualizacionId', 'int', CreoleTypes::INTEGER, 'anualizacion', 'ID', false, null);

		$tMap->addColumn('CODIGO', 'Codigo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('PROYECTO', 'Proyecto', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('MAGNITUD', 'Magnitud', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('PROGRAMA_INTERNO', 'ProgramaInterno', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 