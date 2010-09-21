<?php



class SubactividadPoaMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.SubactividadPoaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('subactividad_poa');
		$tMap->setPhpName('SubactividadPoa');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PROCEDIMIENTO_ID', 'ProcedimientoId', 'int', CreoleTypes::INTEGER, 'procedimiento', 'ID', false, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('RESPONSABLE', 'Responsable', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('ENTREGABLE', 'Entregable', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('FECHA_INICIO', 'FechaInicio', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('DURACION', 'Duracion', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('PONDERACION', 'Ponderacion', 'double', CreoleTypes::FLOAT, true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 