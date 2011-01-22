<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
  $cuenta = array();
  foreach ($actividades as $actividad)
  {
    $cuenta[$actividad->getActividadProcedimientoId()]++;
  }
?>
<h1>Informe Ejecucion Procedimiento</h1>

<br />
<h3>Procedimiento: <em><?php echo $procedimiento->getProcedimiento(); ?></em></h3>
<h3>Porcentaje Ejecucion: <em><?php echo $procedimiento->getEjecucion(); ?>%</em></h3>
<h3>Fecha de elaboracion: <em><?php echo date('d/M/Y H:m:s'); ?></em></h3>
<br />

<table>
<thead>
<tr>
  <th>Actividad</th>
  <th>Subactividad</th>
  <th>Fecha Inicio</th>
  <th>Duracion</th>
  <th>% Ejecucion</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>
    <th>16</th>
    <th>17</th>
    <th>18</th>
    <th>19</th>
    <th>20</th>
    <th>21</th>
    <th>22</th>
    <th>23</th>
    <th>24</th>
    <th>25</th>
    <th>26</th>
    <th>27</th>
    <th>28</th>
    <th>29</th>
    <th>30</th>
    <th>31</th>
    <th>32</th>
    <th>33</th>
    <th>34</th>
    <th>45</th>
    <th>36</th>
    <th>37</th>
    <th>38</th>
    <th>39</th>
    <th>40</th>
    <th>41</th>
    <th>42</th>
    <th>43</th>
    <th>44</th>
    <th>45</th>
    <th>46</th>
    <th>47</th>
    <th>48</th>
    <th>49</th>
    <th>50</th>
    <th>51</th>
    <th>52</th>
</tr>
</thead>
<tbody>
  <?php $pos = $actividades[0]->getId();?>
  <?php foreach ($actividades as $actividad): ?>
  <tr>
    <?php if ($pos == (pos($actividad))): ?>
      <td rowspan="<?php echo current($cuenta) ?>"><?php ($actividad);echo $actividad->getDescripcion() ?></td>
      <?php $pos +=current($cuenta); next($cuenta); ?>
    <? endif; ?>

    <td><?echo $actividad ?></td>
    <td><?echo $actividad->getFechaInicio() ?></td>
    <td><?echo $actividad->getDuracion() ?></td>
    <td><?php echo $actividad->getEjecucion() ?>%</td>
    <?php foreach ($actividad->getArrayInformeEjecucion() as $semana): ?>
    <td <?php if($semana == 1) { echo 'class="amarillo"'; } ?>
        <?php if($semana == 2) { echo 'class="naranja"'; } ?>
        <?php if($semana == 3) { echo 'class="verde"'; } ?>
      >&nbsp;</td>
    <?php endforeach; ?>
  </tr>
  <?php endforeach; ?>
</tbody>
</table>

