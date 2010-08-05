<?php



class HistoricoIndicadorMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.HistoricoIndicadorMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('historico_indicador');
		$tMap->setPhpName('HistoricoIndicador');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('INDICADOR_ID', 'IndicadorId', 'int', CreoleTypes::INTEGER, 'indicador', 'ID', false, null);

		$tMap->addColumn('VALOR', 'Valor', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('ANO', 'Ano', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('MEDICION_NUMERO', 'MedicionNumero', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('OBSERVACION', 'Observacion', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 