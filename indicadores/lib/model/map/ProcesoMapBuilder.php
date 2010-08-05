<?php



class ProcesoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ProcesoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('proceso');
		$tMap->setPhpName('Proceso');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('MACROPROCESO_ID', 'MacroprocesoId', 'int', CreoleTypes::INTEGER, 'macroproceso', 'ID', false, null);

		$tMap->addColumn('NOMBRE', 'Nombre', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addForeignKey('CARGO_ID', 'CargoId', 'int', CreoleTypes::INTEGER, 'cargo', 'ID', false, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 