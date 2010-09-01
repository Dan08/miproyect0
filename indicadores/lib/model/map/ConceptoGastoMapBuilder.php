<?php



class ConceptoGastoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ConceptoGastoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('concepto_gasto');
		$tMap->setPhpName('ConceptoGasto');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CONCEPTO_GASTO', 'ConceptoGasto', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 