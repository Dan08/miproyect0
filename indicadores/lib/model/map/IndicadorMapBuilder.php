<?php



class IndicadorMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.IndicadorMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('indicador');
		$tMap->setPhpName('Indicador');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('INDICADOR', 'Indicador', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('BORRADOR', 'Borrador', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addForeignKey('OBJETIVO_ID', 'ObjetivoId', 'int', CreoleTypes::INTEGER, 'objetivo', 'ID', false, null);

		$tMap->addColumn('OBJETIVO_ESTR', 'ObjetivoEstr', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addForeignKey('CATEGORIA_ID', 'CategoriaId', 'int', CreoleTypes::INTEGER, 'categoria', 'ID', false, null);

		$tMap->addColumn('PROCESO', 'Proceso', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DEFINCION', 'Defincion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('MEDICION', 'Medicion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DESCRIPCION', 'Descripcion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('FORMULA_TEXTUAL', 'FormulaTextual', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TIPO', 'Tipo', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('FRECUENCIA', 'Frecuencia', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addForeignKey('RESPONSABLE_ID', 'ResponsableId', 'int', CreoleTypes::INTEGER, 'dependencia', 'ID', false, null);

		$tMap->addForeignKey('QUIEN_ID', 'QuienId', 'int', CreoleTypes::INTEGER, 'dependencia', 'ID', false, null);

		$tMap->addColumn('COMO', 'Como', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('QUE', 'Que', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('FORMULA', 'Formula', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('UMBRAL_ROJO', 'UmbralRojo', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('UMBRAL_AMARILLO', 'UmbralAmarillo', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('UMBRAL_VERDE', 'UmbralVerde', 'double', CreoleTypes::FLOAT, false, null);

		$tMap->addColumn('META', 'Meta', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INICIATIVA', 'Iniciativa', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 