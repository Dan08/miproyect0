<?php



class AnualizacionMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AnualizacionMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('anualizacion');
		$tMap->setPhpName('Anualizacion');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('META_PD_ID', 'MetaPdId', 'int', CreoleTypes::INTEGER, 'meta_pd', 'ID', false, null);

		$tMap->addColumn('ANYO1', 'Anyo1', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ANYO2', 'Anyo2', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ANYO3', 'Anyo3', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ANYO4', 'Anyo4', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 