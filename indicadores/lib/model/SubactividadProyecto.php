<?php

/**
 * Subclass for representing a row from the 'subactividad_proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SubactividadProyecto extends BaseSubactividadProyecto
{
  public function  __toString()
  {
    return $this->getDescripcion();
  }

  /**
   * Calcula el mes de la proxima medicion como la resta de la duracion de la subactividad menos las
   * mediciones realizadas que se encuentran en la tabla de seguimiento
   */
  public function getMesMedicion()
  {
    // obtener el numero de mediciones realizadas hasta el momento
    $c = new Criteria();
    $c->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());
    $medicion = SubactividadEjecucionPeer::doCount($c);

    // comprobar que quedan mediciones disponibles
    if (($this->getDuracion()-$medicion) < 1)
    {
      return 0;
    } else {
      return $medicion+1;
    }
  }

  /**
   * Obtiene el acumulado de la ejecucion de la tabla subactividad_ejecucion
   */
  public function getEjecucion()
  {
    $c = new Criteria();
    $c->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());
    $resultset = SubactividadEjecucionPeer::doSelect($c);

    $ejecucion = 0;
    foreach ($resultset as $item)
    {
      $ejecucion += $item->getAvance();
    }

    return $ejecucion;
  }

  /**
   * Calcula la Ejecucion ponderada de la subactividad como el avance de la subactividad
   * multiplicado por la ponderacion de la misma
   * 
   * @return valor de la ejecucion ponderada de la actividad
   */
  public function getEjecucionPonderada()
  {
    return ($this->getPonderacion()/100)*$this->getEjecucion();
  }

  /**
   * Calcula el numero de la semana en la cual se ha realizado la ejecucion de la subactivdad
   * segun la fecha en la que se crea
   *
   * @return array lista multinivel con el numero del semana por mes de ejecucion
   */
  public function getArrayEjecucion()
  {
    $c = new Criteria();
    $c->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());
    $resultset = SubactividadEjecucionPeer::doSelect($c);

    $ejecuciones = array();

    foreach ($resultset as $ejecucion)
    {
      $ejecuciones[] = array(date('W',strtotime($ejecucion->getCreatedAt())),
              (date('W',strtotime($ejecucion->getCreatedAt())))+1,
              (date('W',strtotime($ejecucion->getCreatedAt())))+2,
              (date('W',strtotime($ejecucion->getCreatedAt()))+3));
    }

    return $ejecuciones;
  }

  /**
   * Devuelve un array con el numero de las semanas en las cuales se va a ejecutar la
   * subactividad, calculada a partir de la fecha de inicio y la duracion
   *
   * @return array lista con el numero de las semanas programas para ejecucion
   */
  public function getArrayProgramacion()
  {
    $programacion = array();
    for ($i = 1; $i <= ($this->getDuracion()*4);$i++)
    {
      $programacion[$i] = (date('W', strtotime($this->getFechaInicio()))+$i-1);
    }

    return $programacion;

  }

  /**
   * Devuelve un array con las 52 semanas del año con valores segun las siguientes convenciones
   * - 0: semana sin programacion
   * - 1: semana programada para ejecutar la subactividad
   * - 2: semana programada para ejecutar pero sin avance (retrasada)
   * - 3: semana ejecutada (no tiene en cuenta la programacion)
   * 
   * @return array lista de semanas del año con valores para ser mostrado en un informe
   */
  public function getArrayInformeEjecucion()
  {
    $semanas = array();

    for ($i = 1; $i <= 52; $i++)
    {
      $semanas[$i] = 0;
    }

    foreach ($this->getArrayProgramacion() as $semana)
    {
      $semanas[$semana] = 1;
    }

    foreach ($this->getArrayEjecucion() as $ejecucion)
    {
      foreach ($ejecucion as $semana)
      {
        $semanas[$semana] = 3;
      }
    }


    // necesita mas depurado
    for ($i = (date('W')-1); $i >= current($this->getArrayProgramacion()); $i-- )
    {
      $semanas[$i] = 2;
    }

    return $semanas;
  }
}
