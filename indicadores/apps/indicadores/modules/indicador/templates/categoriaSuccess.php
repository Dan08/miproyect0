<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php
foreach ($lista as $item)
{
  echo "<option value=\"";
  if ($tipo == 4)
  {
    echo "{$item->getId()}\">{$item->getDescripcion()}";
  } else{
    echo "{$item->getId()}\">{$item->getNombre()}";
  }
  echo "</option>";
}


