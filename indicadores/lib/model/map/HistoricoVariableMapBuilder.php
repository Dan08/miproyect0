<?php



class HistoricoVariableMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.HistoricoVariableMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('historico_variable');
		$tMap->setPhpName('HistoricoVariable');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('VARIABLE_ID', 'VariableId', 'int', CreoleTypes::INTEGER, 'variable', 'ID', false, null);

		$tMap->addColumn('VALOR', 'Valor', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addForeignKey('HISTORICO_INDICADOR_ID', 'HistoricoIndicadorId', 'int', CreoleTypes::INTEGER, 'historico_indicador', 'ID', false, null);

	} 
} 