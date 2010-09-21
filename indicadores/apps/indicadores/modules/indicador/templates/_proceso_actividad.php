<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
/**
 * Ajax para el formulario de indicadores

 */

/**
 * indicador de Actividad POA
 */
if ($indicador->getCategoriaId() == 4)
{
  echo object_select_tag($indicador, 'getProceso', array (
    'related_class' => 'ActividadPoa',
    'include_blank' => false,
      ));
/**
 * indicador de Procedimiento POA
 */
} elseif ($indicador->getCategoriaId() == 5) {
  echo object_select_tag($indicador, 'getProceso', array (
    'related_class' => 'Procedimiento',
    'include_blank' => false,
      ));
} else {
  echo object_select_tag($indicador, 'getProceso', array (
    'related_class' => 'Proceso',
    'include_blank' => true,
      ));
}
?>
