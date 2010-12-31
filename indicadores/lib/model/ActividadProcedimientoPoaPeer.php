<?php

/**
 * Subclass for performing query and update operations on the 'actividad_procedimiento_poa' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ActividadProcedimientoPoaPeer extends BaseActividadProcedimientoPoaPeer
{
  public static function doSelectByProcedimiento($procedimiento)
  {
    $c = new Criteria();
    $c->add(self::PROCEDIMIENTO_POA_ID, $procedimiento);

    return self::doSelect($c);
  }
}
