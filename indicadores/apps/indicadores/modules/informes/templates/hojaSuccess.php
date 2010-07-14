<style type="text/css">
<!--
.borde_tabla {
	border: 2px solid #000000;
}
.borde_celda {
	border: 1px solid #000000;
	clear: both;
	float: none;
}
.celda {
	background-color: #ffffff;
	clear: both;
}

.titulo {
	background-color: #FFFF00;
}

.break
{
page-break-after: always;
}
-->
</style>

<?php foreach ($indicadores as $indicador): ?>
<br class="break"/>
<table border="0" cellpadding="2" cellspacing="1" id="tabla">
  <tr height="27">
    <td height="27" colspan="6" align="center" bgcolor="#FFFF00" class="borde_tabla titulo"><strong>HOJA DE VIDA DE INDICADOR</strong></td>
  </tr>
  <tr height="10">
    <td width="375" height="10" class="celda">&nbsp;</td>
    <td width="177" class="celda"></td>
    <td width="19" class="celda"></td>
    <td width="73" class="celda"></td>
    <td width="20" class="celda"></td>
    <td width="301" class="celda"></td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Fecha de   creaci&oacute;n</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo date('d / M / Y');?></td>
  </tr>
  <tr height="10">
    <td height="10" class="celda">&nbsp;</td>
    <td class="celda"></td>
    <td class="celda"></td>
    <td class="celda"></td>
    <td class="celda"></td>
    <td class="celda">&nbsp;</td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Entidad</strong></td>
    <td colspan="5" class="borde_celda celda">FONDO DE VIGILANCIA Y SEGURIDAD</td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>NIT</strong></td>
    <td colspan="5" class="borde_celda celda">&nbsp;</td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Objetivo   Estrat&eacute;gico</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getObjetivo();?></td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Nombre del   Indicador</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getIndicador();?></td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Objetivo del   Indicador</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getObjetivoEstr();?></td>
  </tr>
  <tr height="27">
    <td height="54" rowspan="2" bgcolor="#FFCC99" class="borde_celda"><strong>Categorizaci&oacute;n del Indicador</strong></td>
    <td class="borde_celda celda">Eficiencia</td>
    <td class="borde_celda celda"><?php if ($indicador->getCategoria() == 'Eficiencia') {echo "X";}?></td>
    <td class="borde_celda celda">Efectividad/Impacto</td>
    <td class="borde_celda celda"><?php if ($indicador->getCategoria() == 'Efectividad') {echo "X";}?></td>
    <td class="borde_celda celda"></td>
  </tr>
  <tr height="27">
    <td height="27" class="borde_celda celda">Eficacia</td>
    <td class="borde_celda celda"><?php if ($indicador->getCategoria() == 'Eficacia') {echo "X";}?></td>
    <td class="borde_celda celda">Otro</td>
    <td class="borde_celda celda"><?php if ($indicador->getCategoria() == 'Otro') {echo "X";}?></td>
    <td class="borde_celda celda">&nbsp;</td>
  </tr>
  <tr height="43">
    <td height="43" colspan="6" bgcolor="#FFCC99" class="borde_celda"><strong>Explique brevemente el criterio por el cual ubic&oacute; al   INDICADOR en la categor&iacute;a se&ntilde;alada:</strong></td>
  </tr>
  <tr height="27">
    <td height="27" colspan="6" class="borde_celda celda">&nbsp;</td>
  </tr>
  <tr height="27">
    <td height="27" colspan="6" class="borde_celda celda">C&oacute;mo se mide   el INDICADOR?</td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Definici&oacute;n   operacional</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getDefincion();?></td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Mecanismo de   medici&oacute;n</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getMedicion();?></td>
  </tr>
  <tr height="27">
    <td height="27" bgcolor="#FFCC99" class="borde_celda"><strong>Variables</strong></td>
    <td colspan="5" class="borde_celda celda">
    <?php foreach ($indicador->getArrayVariables() as $variable):?>
    	<p><?php echo $variable?></p>
    <?php endforeach;?>
    </td>
  </tr>
  <tr height="13">
    <td height="13" class="celda">&nbsp;</td>
    <td class="celda"></td>
    <td class="celda"></td>
    <td class="celda"></td>
    <td class="celda"></td>
    <td class="celda"></td>
  </tr>
  <tr height="17">
    <td height="17" bgcolor="#FFCC99" class="borde_celda"><strong>Frecuencia de   Medici&oacute;n</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getFrecuencia();?></td>
  </tr>
  <tr height="34">
    <td height="34" bgcolor="#FFCC99" class="borde_celda"><strong>Responsable de   definir el Indicador</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getResponsableId();?></td>
  </tr>
  <tr height="34">
    <td height="34" bgcolor="#FFCC99" class="borde_celda"><strong>QUI&Eacute;N Observa   el Indicador y establece decisiones de acci&oacute;n?</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getQuienId();?></td>
  </tr>
  <tr height="51">
    <td height="51" bgcolor="#FFCC99" class="borde_celda"><strong>C&Oacute;MO se   interpreta el indicador? (para un objetivo estrat&eacute;gico indique las metas)</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getComo();?></td>
  </tr>
  <tr height="55">
    <td height="55" bgcolor="#FFCC99" class="borde_celda"><strong>QU&Eacute; otros   aspectos internos o externos deben tenerse en cuenta para la interpretaci&oacute;n?</strong></td>
    <td colspan="5" class="borde_celda celda"><?php echo $indicador->getQue();?></td>
  </tr>
  <tr height="28">
    <td height="28" bgcolor="#FFCC99" class="borde_celda"><strong>Unidad de   medida</strong></td>
    <td colspan="5" class="borde_celda celda">&nbsp;</td>
  </tr>
  <tr height="27">
    <td height="27" colspan="6" bgcolor="#FFCC99" class="borde_celda"><strong>Observaciones</strong></td>
  </tr>
  <tr height="27">
    <td height="27" colspan="6" class="borde_celda celda">&nbsp;</td>
  </tr>
</table>
<hr />
<?php endforeach; ?>