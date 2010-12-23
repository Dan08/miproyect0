<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<h1>Buscar Contrato</h1>
<?php echo form_tag('contrato/list') ?>
<p><label>Numero: </label>
  <?php  echo input_tag('contrato'); ?><?php echo submit_tag('Buscar') ?>
</p>
</form>
