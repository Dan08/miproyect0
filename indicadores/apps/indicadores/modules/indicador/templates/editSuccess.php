<?php
// auto-generated by sfPropelCrud
// date: 2009/02/04 17:11:54
?>
<?php use_helper('Object') ?>
<?php use_helper('Javascript') ?>

<?php echo form_tag('indicador/update') ?>

<?php echo object_input_hidden_tag($indicador, 'getId') ?>

<table class="data">
	<tbody>
		<tr>
			<th>Nombre del Indicador:</th>
			<td><?php echo object_input_tag($indicador, 'getIndicador', array (
  'size' => 80,
			)) ?></td>
		</tr>
		<tr>
			<th>Borrador:</th>
			<td><?php echo object_checkbox_tag($indicador, 'getBorrador', array (
			)) ?></td>
		</tr>
		<tr>
			<th>Objetivo Estrategico:</th>
			<td><?php echo object_select_tag($indicador, 'getObjetivoId', array (
  'related_class' => 'Objetivo',
  'include_blank' => false,
			)) ?></td>
		</tr>
                <tr>
			<th>Categor&iacute;a:</th>
			<td>                         
                          <?php include_partial('categoria', array('indicador' => $indicador)) ?>
                          <div id="indicator" style="display:none"></div>
                        </td>
		</tr>
		<tr>
                  <th><label id="type"></label></th>
      <td><?php include_partial('proceso_actividad', array('indicador' => $indicador, 'categoria' =>$indicador->getCategoriaId())) ?></td>
    </tr>
		<tr>
			<th>Objetivo del indicador:</th>
			<td><?php echo object_textarea_tag($indicador, 'getObjetivoEstr', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
		
		<tr>
			<th>Definci&oacute;n Operacional:</th>
			<td><?php echo object_textarea_tag($indicador, 'getDefincion', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
		<tr>
			<th>Mecanismo de medici&oacute;n:</th>
			<td><?php echo object_textarea_tag($indicador, 'getMedicion', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
		<tr>
			<th>Descripci&oacute;n:</th>
			<td><?php echo object_textarea_tag($indicador, 'getDescripcion', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
		<tr>
			<th>Tipo:</th>
			<td><?php echo select_tag('tipo', options_for_select(array('procentaje'=>'porcentaje', 'proporci&oacute;n' =>'proporci&oacute;n','escalar'=>'escalar'))) ?></td>
		</tr>
		<tr>
			<th>Frecuencia de medici&oacute;n:</th>
			<td><?php echo object_input_tag($indicador, 'getFrecuencia', array (
  'size' => 20,
			)) ?></td>
		</tr>
		<tr>
			<th>Responsable de definir el indicador:</th>
			<td><?php echo object_select_tag($indicador, 'getResponsableId', array (
  'related_class' => 'Dependencia',
  'include_blank' => true,
			)) ?></td>
		</tr>
		<tr>
			<th>Quien observa el indicador y establece decisiones de acci&oacute;n:</th>
			<td><?php echo object_select_tag($indicador, 'getQuienId', array (
  'related_class' => 'Dependencia',
  'include_blank' => true,
			)) ?></td>
		</tr>
		<tr>
			<th>Como se interpreta:</th>
			<td><?php echo object_textarea_tag($indicador, 'getComo', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
		<tr>
			<th>Que otros aspectos se tienen en cuenta para la interpretaci&oacute;n:</th>
			<td><?php echo object_textarea_tag($indicador, 'getQue', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
		<tr>
			<th>Umbral rojo:</th>
			<td><?php echo object_input_tag($indicador, 'getUmbralRojo', array (
  'size' => 7,
			)) ?></td>
		</tr>
		<tr>
			<th>Umbral amarillo:</th>
			<td><?php echo object_input_tag($indicador, 'getUmbralAmarillo', array (
  'size' => 7,
			)) ?></td>
		</tr>
		<tr>
			<th>Umbral verde:</th>
			<td><?php echo object_input_tag($indicador, 'getUmbralVerde', array (
  'size' => 7,
			)) ?></td>
		</tr>
		<tr>
			<th>Meta:</th>
			<td><?php echo object_textarea_tag($indicador, 'getMeta', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
		<tr>
			<th>Iniciativas:</th>
			<td><?php echo object_textarea_tag($indicador, 'getIniciativa', array (
  'size' => '30x3',
			)) ?></td>
		</tr>
	</tbody>
</table>
<hr />
<div id="buttons">
<?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($indicador->getId()): ?>
&nbsp;<?php echo link_to('Eliminar', 'indicador/delete?id='.$indicador->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
&nbsp;<?php echo link_to('Cancelar', 'indicador/show?id='.$indicador->getId(), 'class="button"') ?>
<?php else: ?> &nbsp;<?php echo link_to('Cancelar', 'indicador/list', 'class="button"') ?>
<?php endif; ?></div>
</form>
