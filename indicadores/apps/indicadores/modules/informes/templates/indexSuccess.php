<?php use_helper('Object') ?>
<h1>Informes</h1>

<table cellspacing="5" cellpadding="5">
  <tr>
    <th>Informe General (CMI)</th>
    <th>Informe por umbrales</th>
    <th>Informe Historico</th>
  </tr>
  <tr valign="bottom">
    <td><?php echo link_to('Cuadro de Mando Integral (CMI)', 'informes/CMI') ?></td>
    <td><?php echo form_tag('informes/historico') ?>
      <p>Informe Historico</p>
      <span>Seleccione el Indicador a consultar</span><br />
      <?php echo select_tag('id', objects_for_select($indicador, 'getId', 'getIndicador',1)) ?>
      <?php echo submit_tag('Realizar Informe') ?>
      </form>
    </td>
    <td>
      <?php echo form_tag('informes/umbrales') ?>
      <p></p>
      <span>Seleccione el umbral a consultar</span><br />
      <?php echo select_tag('umbral', options_for_select( array('rojo' => 'rojo', 'amarillo' => 'amarillo', 'verde' => 'verde'), 'multiple=false')) ?>
      <?php echo submit_tag('Realizar Informe') ?>
      </form>
    </td>
  </tr>
</table>


