<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if ($metapd->getPonderacionAcum() >= 100): ?>
<span style="color:#FF0000"><?php echo $metapd->getPonderacionAcum() ?></span>
<?php else: ?>
<?php  echo $metapd->getPonderacionAcum() ?>
<?php    endif; ?>
