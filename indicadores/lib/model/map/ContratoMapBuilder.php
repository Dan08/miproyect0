<?php



class ContratoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ContratoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('contrato');
		$tMap->setPhpName('Contrato');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUMERO', 'Numero', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('ID_CONTRATISTA', 'IdContratista', 'string', CreoleTypes::VARCHAR, false, 30);

		$tMap->addColumn('CONTRATISTA', 'Contratista', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 