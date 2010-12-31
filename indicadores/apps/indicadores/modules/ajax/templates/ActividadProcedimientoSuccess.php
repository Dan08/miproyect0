<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php if ($procedimiento->getPonderacionAcum() >= 100): ?>
<span style="color:#FF0000"><?php echo $procedimiento->getPonderacionAcum() ?></span>
<?php else: ?>
<?php  echo $procedimiento->getPonderacionAcum() ?>
<?php    endif; ?>

