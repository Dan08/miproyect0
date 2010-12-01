<?php



class ActividadProcedimientoPoaMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ActividadProcedimientoPoaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('actividad_procedimiento_poa');
		$tMap->setPhpName('ActividadProcedimientoPoa');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PROCEDIMIENTO_POA_ID', 'ProcedimientoPoaId', 'int', CreoleTypes::INTEGER, 'procedimiento_poa', 'ID', false, null);

		$tMap->addColumn('ACTIVIDAD', 'Actividad', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PONDERACION', 'Ponderacion', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 