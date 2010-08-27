<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if ($actividad->getPonderacionAcum() >= 100): ?>
<span style="color:#FF0000"><?php echo $actividad->getPonderacionAcum(); ?></span>
<?php else: ?>
<?php  echo $actividad->getPonderacionAcum() ?>
<?php    endif; ?>
