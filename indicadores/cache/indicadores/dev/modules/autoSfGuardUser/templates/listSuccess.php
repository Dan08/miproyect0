<?php
// auto-generated by sfPropelAdmin
// date: 2010/07/19 22:02:20
?>
<?php use_helper('I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('User list', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('sfGuardUser/list_header', array('pager' => $pager)) ?>
<?php include_partial('sfGuardUser/list_messages', array('pager' => $pager)) ?>
</div>

<div id="sf_admin_bar">
<?php include_partial('filters', array('filters' => $filters)) ?>
</div>

<div id="sf_admin_content">
<?php if (!$pager->getNbResults()): ?>
<?php echo __('no result') ?>
<?php else: ?>
<?php include_partial('sfGuardUser/list', array('pager' => $pager)) ?>
<?php endif; ?>
<?php include_partial('list_actions') ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('sfGuardUser/list_footer', array('pager' => $pager)) ?>
</div>

</div>
