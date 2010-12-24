<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php use_helper('Object') ?>

<h1>Plan de Contratacion: Buscar actividad</h1>
<?php echo form_tag('clienteactividad/create') ?>
<p><label>Seleccione un Proyecto: </label>
  <?php echo select_tag('proyecto', objects_for_select(ProyectoPeer::doSelect(new Criteria()),
'getId','__toString', null))?></p>
  <p><label>Seleccione mes inicio ejecucion: </label>
  <?php echo select_tag('mes', options_for_select(array(
  'enero'  => 'enero',
  'febrero'    => 'febrero',
  'febrero' => 'febrero',
  'marzo'    => 'marzo',
  'abril'    => 'abril',
  'mayo'    => 'mayo',
  'junio'    => 'junio',
  'julio'    => 'julio',
  'agosto'    => 'agosto',
  'septiembre'    => 'septiembre',
  'octubre'    => 'octubre',
  'noviembre'    => 'noviembre',
  'diciembre'   => 'diciembre'
))) ?></p>
  <p><?php echo submit_tag('Buscar') ?></p>
</form>