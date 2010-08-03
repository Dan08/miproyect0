<?php



class MetaProyectoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.MetaProyectoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('meta_proyecto');
		$tMap->setPhpName('MetaProyecto');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('META_PD_ID', 'MetaPdId', 'int', CreoleTypes::INTEGER, 'meta_pd', 'ID', false, null);

		$tMap->addForeignKey('PROYECTO_ID', 'ProyectoId', 'int', CreoleTypes::INTEGER, 'proyecto', 'ID', false, null);

		$tMap->addColumn('CODIGO', 'Codigo', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('META', 'Meta', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TIPO', 'Tipo', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addForeignKey('OBJETIVO_ID', 'ObjetivoId', 'int', CreoleTypes::INTEGER, 'objetivo', 'ID', false, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addForeignKey('ANUALIZACION_ID', 'AnualizacionId', 'int', CreoleTypes::INTEGER, 'anualizacion', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 