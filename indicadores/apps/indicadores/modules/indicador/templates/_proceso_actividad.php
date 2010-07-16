<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
if ($indicador->getCategoriaId() == 4)
{
  echo object_select_tag($indicador, 'getProceso', array (
    'related_class' => 'ActividadPoa',
    'include_blank' => true,
      ));
} else {
  echo object_select_tag($indicador, 'getProceso', array (
    'related_class' => 'Proceso',
    'include_blank' => true,
      ));
}
?>
