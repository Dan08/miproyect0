<?php
// auto-generated by sfPropelAdmin
// date: 2010/07/19 22:02:20
?>
<td colspan="3">
    <?php echo link_to($sf_guard_user->getUsername() ? $sf_guard_user->getUsername() : __('-'), 'sfGuardUser/edit?id='.$sf_guard_user->getId()) ?>
     - 
    <?php echo ($sf_guard_user->getCreatedAt() !== null && $sf_guard_user->getCreatedAt() !== '') ? format_date($sf_guard_user->getCreatedAt(), "f") : '' ?>
     - 
    <?php echo ($sf_guard_user->getLastLogin() !== null && $sf_guard_user->getLastLogin() !== '') ? format_date($sf_guard_user->getLastLogin(), "f") : '' ?>
     - 
</td>