<?php



class CrpActividadMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CrpActividadMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('crp_actividad');
		$tMap->setPhpName('CrpActividad');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('CRP_ID', 'CrpId', 'int', CreoleTypes::INTEGER, 'crp', 'ID', false, null);

		$tMap->addForeignKey('ACTIVIDAD_ID', 'ActividadId', 'int', CreoleTypes::INTEGER, 'actividad', 'ID', false, null);

	} 
} 