<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php use_helper('Object') ?>

<h1>Listar Asignaciones de Proyecto por Componentes</h1>
<?php echo form_tag('componenteproyecto/list') ?>
<p><label>Seleccione un Proyecto: </label>
  <?php echo select_tag('proyecto', objects_for_select(ProyectoPeer::doSelect(new Criteria()),
'getId','__toString', null))?><?php echo submit_tag('Buscar') ?></p>
</form>