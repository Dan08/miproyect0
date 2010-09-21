<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
if (($tipo != '4') || ($tipo != '5')) {
  echo '<option value="" selected="selected"></option>';
}
foreach ($lista as $item)
{
  echo "<option value=\"";
  if ($tipo == 4)
  {
    echo "{$item->getId()}\">{$item->getDescripcion()}";
  } elseif ($tipo == 5) {
    echo "{$item->getId()}\">{$item->getNombre()}";
  } else{
    echo "{$item->getId()}\">{$item->getNombre()}";
  }
  echo "</option>";
}


