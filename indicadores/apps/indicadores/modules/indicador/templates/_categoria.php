<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<span id="categoria">

<?php
echo object_select_tag($indicador, 'getCategoriaId', array (
  'related_class' => 'Categoria',
  'include_blank' => false,))
?>

<?php
  echo observe_field('categoria_id', array(
  'update'   => 'proceso',
  'url'      => 'indicador/categoria',
  'with'     => "'categoria=' + value",
  'script'   => true,
  'loading' => "Element.show('indicator')",
  'complete' => "Element.hide('indicator')",
));
?>
</span>
