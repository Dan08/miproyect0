<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php use_helper('Object') ?>

<h1>Buscar CDP</h1>
<?php echo form_tag('cdp/list') ?>
<p><label>Numero: </label>
  <?php  echo input_tag('cdp'); ?><?php echo submit_tag('Buscar') ?>
</p>
</form>