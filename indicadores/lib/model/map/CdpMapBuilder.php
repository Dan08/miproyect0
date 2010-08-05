<?php



class CdpMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CdpMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cdp');
		$tMap->setPhpName('Cdp');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUMERO', 'Numero', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('FECHA', 'Fecha', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('MONTO', 'Monto', 'double', CreoleTypes::FLOAT, false, null);

	} 
} 