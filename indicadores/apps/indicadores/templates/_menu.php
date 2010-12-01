<div id="yuimenubar" class="yuimenubar yuimenubarnav">
<div class="bd">
<ul>

  <!--<li class="yuimenubaritem">
  <?php echo link_to('Inicio', '/', 'class="yuimenuitemlabel"')?>
  </li>-->

  <!-- submenu plan de desarrollo -->
  <li class="yuimenubaritem first-of-type">
    <a class="yuimenubaritemlabel" href="#PlanDesarrollo">Plan de Desarrollo</a>
    <div id="PlanDesarrollo" class="yuimenu"><div class="bd">
      <ul>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#MetasPD">Metas Plan de Desarrollo</a>
          <div id="MetasPD" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'metapd/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'metapd/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Anualizaciones">Anualizaciones</a>
          <div id="anualizaciones" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'anualizacion/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'anualizacion/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#IndicadoresMetas">Indicadores</a>
          <div id="IndicadoresMetas" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'indicadormeta/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'indicadormeta/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

      </ul>
    </div></div>
  </li>

  <!-- submenu proyectos -->
  <li class="yuimenubaritem first-of-type">
    <a class="yuimenubaritemlabel" href="#ProyectosInversion">Proyectos de inversion</a>
    <div id="ProyectosInversion" class="yuimenu"><div class="bd">
      <ul>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Proyectos">Proyectos</a>
          <div id="Proyectos" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'proyecto/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'proyecto/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#MetasProyectos">Metas Proyectos de Inversion</a>
          <div id="MetasProyectos" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'metaproyecto/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'metaproyecto/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Actividadesproyectos">Actividades</a>
          <div id="Actividades" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'actividadproyecto/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'actividadproyecto/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#SubActividadesproyectos">Sub-actividades</a>
          <div id="SubActividades" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'subactividadproyecto/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'subactividadproyecto/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

      </ul>
    </div></div>
  </li>

  <!-- submenu poa -->
  <li class="yuimenubaritem first-of-type">
    <a class="yuimenubaritemlabel" href="#POA">Plan Operativo Anual</a>
    <div id="POA" class="yuimenu"><div class="bd">
      <ul>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#MetasPOA">Metas POA</a>
          <div id="MetasPOA" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'metapoa/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'metapoa/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#ActividadesPOA">Actividad POA a partir de proyecto</a>
          <div id="ActividadesPOA" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'actividadpoaproyecto/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'actividadpoaproyecto/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#ActividadesPOA">Actividad POA a partir de procedimiento</a>
          <div id="ActividadesPOAprocedimiento" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'actividadpoaprocedimiento/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'actividadpoaprocedimiento/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#IndicadoresPOA">Indicadores POA</a>
          <div id="IndicadoresPOA" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'macroproceso/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'proceso/create', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>
      </ul>
    </div></div>
  </li>

  <!-- submenu plan contractual -->
  <li class="yuimenubaritem first-of-type">
    <a class="yuimenubaritemlabel" href="#plancontractual">Plan Contractual</a>
    <div id="plancontractual" class="yuimenu"><div class="bd">
      <ul>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#programarproyecto">Programar Proyecto</a>
          <div id="Proyecto" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'componenteproyecto/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'componenteproyecto/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#actividades">Actividades</a>
          <div id="actividades" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'actividad/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'actividad/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#cdp">CDP</a>
          <div id="cdp" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'cdp/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'cdp/list', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Vincular con actividad', 'cdpactividad/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar con actividad', 'cdpactividad/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#clienteactividad">Clientes de Actividad</a>
          <div id="clienteactividad" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'clienteactividad/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'clienteactividad/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#localidadactividad">Localidades de Actividad</a>
          <div id="localidadactividad" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'clienteactividad/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'clienteactividad/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>
      </ul>
    </div></div>
  </li>

  <!-- submenu plataforma estrategica -->
  <li class="yuimenubaritem first-of-type">
    <a class="yuimenubaritemlabel" href="#PlataformaEstrategica">Plataforma Estrategica</a>
    <div id="Plataforma Estrategica" class="yuimenu"><div class="bd">
      <ul>
        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Objetivo">Objetivos Estrategicos</a>
          <div id="Objetivo" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'objetivo/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'objetivo/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Variable">Variables</a>
          <div id="Variable" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'variable/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'variable/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Indicadores">Indicadores</a>
          <div id="Indicadores" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'indicador/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'indicador/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Vinculo">Vincular Variables con Indicador</a>
          <div id="vinculo" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Vincular', 'indicadorvariable/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar vinculo', 'indicadorvariable/create', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#FormulaCalculo">Formula de Calculo</a>
          <div id="FormulaCalculo" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'indicador/createformula', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'indicador/createformula', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

      </ul>
    </div></div>
  </li>

  <!-- submenu seguimiento -->
  <li class="yuimenubaritem first-of-type"><a class="yuimenubaritemlabel"
    href="#seguimiento">Seguimiento</a>
    <div id="seguimiento" class="yuimenu">
    <div class="bd">
    <ul>
      <li class="yuimenuitem">
        <?php echo link_to('Seguimiento Objetivos', 'seguimiento/list', 'class="yuimenuitemlabel"')?></li>
      <li class="yuimenuitem">
        <?php echo link_to('Seguimiento Metas Plan de Desarrollo', 'seguimientometas/create', 'class="yuimenuitemlabel"')?></li>
      <li class="yuimenuitem">
        <?php echo link_to('Seguimiento Subactividades Proyectos', 'subactividadejecucion/list', 'class="yuimenuitemlabel"')?></li>
    </ul>
    </div>
    </div>
  </li>

  <!-- submenu informes -->
  <li class="yuimenubaritem first-of-type"><a class="yuimenubaritemlabel"
    href="#informes">Informes</a>
    <div id="informes" class="yuimenu"><div class="bd">
      <ul>
        <li class="yuimenuitem">
          <?php echo link_to('Programacion Metas Plan de Desarrollo', 'informes/MetasPlanDesarrollo', 'class="yuimenuitemlabel"')?></li>
        <li class="yuimenuitem">
          <?php echo link_to('Avance Metas-Proyectos', 'informes/MetasProyectos', 'class="yuimenuitemlabel"')?></li>
      </ul>
      <ul>
        <li class="yuimenuitem">
          <?php echo link_to('Avance Proyectos', 'informes/Proyectos', 'class="yuimenuitemlabel"')?></li>
        <li class="yuimenuitem">
          <?php echo link_to('Ejecucion Semanal Proyectos', 'informes/ejecucionproyectos', 'class="yuimenuitemlabel"')?></li>
      </ul>
       <ul>
        <li class="yuimenuitem">
          <?php echo link_to('Cuadro de Mando Integral (CMI)', 'informes/CMI', 'class="yuimenuitemlabel"')?></li>
        <li class="yuimenuitem">
          <?php echo link_to('Cuadro de Mando Integral para procesos', 'informes/procesos', 'class="yuimenuitemlabel"')?></li>
        <li class="yuimenuitem">
                  <?php echo link_to('Informe Historico', 'informes/historico', 'class="yuimenuitemlabel"')?></li>
        <li class="yuimenuitem">
          <?php echo link_to('Informe por Umbrales', 'informes/umbrales', 'class="yuimenuitemlabel"')?></li>
        <li class="yuimenuitem">
          <?php echo link_to('Generar hojas de vida de Indicadores', 'informes/hoja', 'class="yuimenuitemlabel"')?></li>        
       </ul>
     </div></div>
  </li>

<!-- submenu parametrizacion -->
  <li class="yuimenubaritem first-of-type"><a class="yuimenubaritemlabel"
    href="#parametrizacion">Parametrizacion</a>
    <div id="parametrizacion" class="yuimenu">
    <div class="bd">
    <ul>
      <li class="yuimenuitem">
        <?php echo link_to('Dependencias', 'dependencia/list', 'class="yuimenuitemlabel"')?></li>
      <li class="yuimenuitem">
        <?php echo link_to('Cargos', 'cargo/list', 'class="yuimenuitemlabel"')?></li>
      <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Macroprocesos">Macroprocesos</a>
          <div id="Macroprocesos" class="yuimenu"><div class="bd">
            <ul class="first-of-type">
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'macroproceso/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'macroproceso/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Procesos">Procesos</a>
          <div id="Procesos" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'proceso/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'proceso/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>

        <li class="yuimenuitem"><a class="yuimenuitemlabel" href="#Procesos">Procedimientos</a>
          <div id="Procedimientos" class="yuimenu"><div class="bd">
            <ul>
              <li class="yuimenuitem">
                <?php echo link_to('Crear', 'procedimiento/create', 'class="yuimenuitemlabel"')?></li>
              <li class="yuimenuitem">
                <?php echo link_to('Modificar', 'procedimiento/list', 'class="yuimenuitemlabel"')?></li>
            </ul>
          </div></div>
        </li>
     </ul>
     </div>
     </div>
  </li>

  <!-- submenu usuarios -->
  <li class="yuimenubaritem first-of-type"><a class="yuimenubaritemlabel"
    href="#UyG">Administracion</a>
    <div id="UyG" class="yuimenu">
    <div class="bd">
    <ul>
      <li class="yuimenuitem">
        <?php echo link_to('Usuarios', 'sfGuardUser', 'class="yuimenuitemlabel"')?></li>
      <li class="yuimenuitem">
        <?php echo link_to('Grupos', 'sfGuardGroup', 'class="yuimenuitemlabel"')?></li>
     </ul>
     </div>
     </div>
  </li>

  <li class="yuimenubaritem first-of-type">
  	<?php echo link_to ('Salir','signout', 'class="yuimenuitemlabel"')?>
  </li>

</ul>
</div>
</div>
