<?php



class IndicadorVariableMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.IndicadorVariableMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('indicador_variable');
		$tMap->setPhpName('IndicadorVariable');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('INDICADOR_ID', 'IndicadorId', 'int', CreoleTypes::INTEGER, 'indicador', 'ID', false, null);

		$tMap->addForeignKey('VARIABLE_ID', 'VariableId', 'int', CreoleTypes::INTEGER, 'variable', 'ID', false, null);

	} 
} 