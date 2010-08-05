<?php

/**
 * Subclass for representing a row from the 'objetivo' table.
 *
 *
 *
 * @package lib.model
 */
class Objetivo extends BaseObjetivo
{
  public function __toString()
  {
    return $this->getNombre();
  }

  //Genera una fila del informe CMI, para cada objetivo consulta los indicadores asociado y toma los datos
  public function getInformeCMI()
  {
    $objetivo = array();

    $c = new Criteria();
    $c->add(IndicadorPeer::OBJETIVO_ID, $this->getId());
    $c->add(IndicadorPeer::PROCESO, null, Criteria::ISNULL);
    $c->add(IndicadorPeer::BORRADOR, 0, Criteria::EQUAL);
    $indicadores = IndicadorPeer::doSelect($c);

    foreach ($indicadores as $indicador)
    {
      $objetivo[] = array (
      $this->getNombre(),
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
    }
    return $objetivo;
  }
  
  public function getInformeCMIProcesos()
  {
    $objetivo = array();

    $c = new Criteria();
    $c->add(IndicadorPeer::OBJETIVO_ID, $this->getId());
    $c->add(IndicadorPeer::PROCESO, null, Criteria::ISNOTNULL);
    $c->add(IndicadorPeer::BORRADOR, 0, Criteria::EQUAL);
    $indicadores = IndicadorPeer::doSelect($c);

    foreach ($indicadores as $indicador)
    {
      $objetivo[] = array (
      $this->getNombre(),
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
    }
    return $objetivo;
  }


  public function getInformeUmbrales($umbral = "rojo")
  {
    $objetivo = array();

    $c = new Criteria();
    $c->addJoin(IndicadorPeer::ID, HistoricoIndicadorPeer::INDICADOR_ID, Criteria::LEFT_JOIN);
    //$c->add(HistoricoIndicadorPeer::VALOR, IndicadorPeer::UMBRAL_ROJO, Criteria::LESS_THAN);
    $c->add(IndicadorPeer::OBJETIVO_ID, $this->getId());
    $c->addDescendingOrderByColumn(HistoricoIndicadorPeer::ID);
    $c->addGroupByColumn(HistoricoIndicadorPeer::INDICADOR_ID);
    $indicadores = IndicadorPeer::doSelect($c);

    foreach ($indicadores as $indicador)
    {
      if (($umbral == "rojo") && ($indicador->getValorActual() < $indicador->getUmbralRojo()))
      {
        $objetivo[] = array (
          $this->getNombre(),
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
      } elseif (($umbral == "amarillo") && ($indicador->getValorActual() < $indicador->getUmbralAmarillo()) && ($indicador->getValorActual() > $indicador->getUmbralRojo())) {
        $objetivo[] = array (
          $this->getNombre(),
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
      } elseif (($umbral == "verde") && ($indicador->getValorActual() >= $indicador->getUmbralVerde())) {
        $objetivo[] = array (
          $this->getNombre(),
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
      }
    }
    
    return $objetivo;
  }
  
  public function getInformeCMIAnual($anyo)
  {
    $objetivo = array();

    $c = new Criteria();
    $c->addJoin(IndicadorPeer::ID, HistoricoIndicadorPeer::INDICADOR_ID, Criteria::LEFT_JOIN);
    $c->add(IndicadorPeer::OBJETIVO_ID, $this->getId());
    $c->add(IndicadorPeer::PROCESO, null, Criteria::ISNULL);
    $c->add(IndicadorPeer::BORRADOR, 0, Criteria::EQUAL);
    $c->add(HistoricoIndicadorPeer::ANO, $anyo, Criteria::EQUAL);
    $c->addDescendingOrderByColumn(HistoricoIndicadorPeer::ID);
    $c->addGroupByColumn(HistoricoIndicadorPeer::INDICADOR_ID);
    $indicadores = IndicadorPeer::doSelect($c);
    
    foreach ($indicadores as $indicador)
    {
      $objetivo[] = array (
      $this->getNombre(),
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
    }
    return $objetivo;
  }
}
