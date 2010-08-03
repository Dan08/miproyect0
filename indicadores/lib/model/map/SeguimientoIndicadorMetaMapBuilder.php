<?php



class SeguimientoIndicadorMetaMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.SeguimientoIndicadorMetaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('seguimiento_indicador_meta');
		$tMap->setPhpName('SeguimientoIndicadorMeta');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('INDICADOR_META_ID', 'IndicadorMetaId', 'int', CreoleTypes::INTEGER, 'indicador_meta', 'ID', false, null);

		$tMap->addColumn('ANYO', 'Anyo', 'string', CreoleTypes::VARCHAR, true, 4);

		$tMap->addColumn('VALOR', 'Valor', 'double', CreoleTypes::FLOAT, true, null);

	} 
} 