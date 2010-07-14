<?php

/**
 * Subclass for representing a row from the 'indicador' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Indicador extends BaseIndicador
{
  public function __toString()
  {
    return $this->getIndicador();
  }
  
  /**
   * Devuelve un array con las variables asociadas al indicador
   */
  public function getArrayVariables()
  {
    $variables = array();
    foreach ($this->getIndicadorVariablesJoinVariable() as $variable)
    {
      $variables[$variable->getId()] = $variable->getVariable();
    }
    
    return $variables;
  }

  /**
   * forma el array de variables para el calculo del indicador de la forma
   * id => valor
   */
  public function getArrayFormVariables()
  {

  }
  
  public function ejecutarFormula()
  {
    $variables = $this->getArrayFormVariables();
    extract($variables);
    eval('$ind='.$this->getFormula());
    return $ind;
  }
  
  /**
   * Funcion para calcular el indicador, recibe un array con los valores de las variables asociadas
   * como id => valor
   */
  public function calcularIndicador($variables = array(), $observacion = '')
  {
    extract($variables);
    eval('$ind='.$this->getFormula().';');

    if ($this->getLastPeriod(date('Y')) < $this->getPeriodos())
    {
      // crear entrada en tabla historico_indicador
      $historico = new HistoricoIndicador();
      $historico->setIndicadorId($this->getId());
      $historico->setValor($ind);
      $historico->setAno(date('Y'));
      $historico->setObservacion($observacion);
      
      $historico->setMedicionNumero($this->getLastPeriod(date('Y')) + 1);
      
      $historico->save();
    
      foreach ($variables as $key => $value)
      {
        $id = substr($key, 3);
        
        $hvariable = new HistoricoVariable();
        $hvariable->setHistoricoIndicadorId($historico->getId());
        $hvariable->setVariableId($id);
        $hvariable->setValor($value);
        $hvariable->save();
      }
      
      return $ind;
    } else {
      return false;
    }
  }
  
  /**
   * obtiene el ultimo periodo calculado para el indicador
   */
  public function getLastPeriod($año)
  {
    empty($año) ? $año = date('Y') : $año; 
    
    $c = new Criteria;
    $c->add(HistoricoIndicadorPeer::ANO, $año);
    $c->addDescendingOrderByColumn(HistoricoIndicadorPeer::ID);

    $periodos = $this->getHistoricoIndicadors($c);
    foreach ($periodos as $periodo)
    {
      $a = $periodo->getMedicionNumero();
      break;
    }
    
    if (empty ($a))
    {
      return 0;
    } else {
      return $a;
    }
  }
  
  /**
   * calcula el numero de periodos a partir de la frecuencia de medicion
   */
  public function getPeriodos()
  {
    switch ($this->getFrecuencia())
    {
      case "semanal":
        return 48;
      case "mensual":
        return 12;
      case "trimestral":
        return 4;
      case "semestral":
        return 2;
      case "anual":
        return 1;
    }
  }
  
  public function getFrecuencias()
  {
  switch ($this->getFrecuencia())
    {
      case "mensual":
        return array(
          1 => 'enero',
          2 => 'febrero',
          3 => 'marzo',
          4 => 'abril',
          5 => 'mayo',
          6 => 'junio',
          7 => 'julio',
          8 => 'agosto',
          9 => 'septiembre',
          10 => 'octubre',
          11 => 'noviembre',
          12 => 'diciembre',
        );
      case "trimestral":
        return array(
          1 => 'Trimestre 1',
          2 => 'Trimestre 2',
          3 => 'Trimestre 3',
          4 => 'Trimestre 4',
        );
      case "semestral":
        return array(
          1 => 'semestre 1',
          2 => 'semestre 2',
        );
      case "anual":
        return date('Y');
    }
  }
  
  public function getValorActual()
  {
    $c = new Criteria;
    $c->add(HistoricoIndicadorPeer::ANO, date('Y'));
    $c->add(HistoricoIndicadorPeer::INDICADOR_ID, $this->getId());
    $c->addDescendingOrderByColumn(HistoricoIndicadorPeer::ID);
    $periodo = HistoricoIndicadorPeer::doSelectOne($c);

    if ($periodo)
    {
      return $periodo->getValor();
    } else {
      return 0;
    }
  }
  
  /**
   * Consulta los valores historicos del indicador y devuelve un array con los valores
   * @todo : añadir rango por año de inicio y fin
   */
  public function getHistorico()
  {
    $historico = array();
    
    foreach($this->getHistoricoIndicadors() as $entrada)
    {
      $historico[$entrada->getAno()."-".$entrada->getMedicionNumero()] = round($entrada->getValor(), 1);
    }
    
    return $historico;
  }
  
  public function getInformeUmbrales($umbral = null)
  {
    $objetivo = array();
    
    $c = new Criteria();
    $c->addJoin($this->getId(), HistoricoIndicadorPeer::INDICADOR_ID, Criteria::LEFT_JOIN);
    $c->add(HistoricoIndicadorPeer::VALOR, $this->getUmbralRojo(), Criteria::LESS_THAN);
    $c->add(IndicadorPeer::OBJETIVO_ID, $this->getObjetivoId());
    $c->addDescendingOrderByColumn(HistoricoIndicadorPeer::ID);
    $indicadores = IndicadorPeer::doSelect($c);
    
    foreach ($indicadores as $indicador)
    {
      $objetivo[] = array (
        $indicador->getObjetivo(),
        $indicador->getIndicador(),
        $indicador->getCategoria(),
        $indicador->getFormulaTextual(),
        $indicador->getUmbralRojo(),
        $indicador->getUmbralAmarillo(),
        $indicador->getUmbralVerde(),
        $indicador->getValorActual(),
        $indicador->getMeta(),
        $indicador->getIniciativa(),
      );
      //break;
    }
    return $objetivo;
  }
  
  public function getResponsable()
  {
    return DependenciaPeer::retrieveByPK($this->getResponsableId());
  }
}
