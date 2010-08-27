<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php
foreach ($actividades as $actividad)
{
  echo "<option value=\"{$actividad->getId()}\">";
  echo "{$actividad->getActividad()}";
  echo "</option>";
}
?>
