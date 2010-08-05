<?php



class IndicadorMetaMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.IndicadorMetaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('indicador_meta');
		$tMap->setPhpName('IndicadorMeta');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('META_PD_ID', 'MetaPdId', 'int', CreoleTypes::INTEGER, 'meta_pd', 'ID', false, null);

		$tMap->addColumn('CODIGO', 'Codigo', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('MAGNITUD', 'Magnitud', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addForeignKey('ANUALIZACION_ID', 'AnualizacionId', 'int', CreoleTypes::INTEGER, 'anualizacion', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 