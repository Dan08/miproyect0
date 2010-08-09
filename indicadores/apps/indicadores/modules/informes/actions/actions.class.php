<?php

/**
 * informes actions.
 *
 * @package    indicadores
 * @subpackage informes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class informesActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    //$this->forward('default', 'module');
    $this->indicador = IndicadorPeer::doSelect(new Criteria());
  }
  
  public function executeCMI()
  {
    $this->objetivos = ObjetivoPeer::doSelect(new Criteria());
  }
  
  public function executeCMIAnual()
  {
    $this->objetivos = ObjetivoPeer::doSelect(new Criteria());
    $this->anyo = $this->getRequestParameter('year');
  }
  
  public function executeProcesos()
  {
    $c = new Criteria();
    $c->add(IndicadorPeer::PROCESO,null,Criteria::ISNOTNULL);
    $this->objetivos = ObjetivoPeer::doSelect($c);
  }
  
  public function executeUmbrales()
  {
    if (!$this->getRequestParameter('umbral'))
    {
      $this->setTemplate('umbralesform');
      
    } else {
      $this->umbral = $this->getRequestParameter('umbral');
      $this->objetivos = ObjetivoPeer::doSelect(new Criteria());
      
    }
  }
  
  /**
   * Devuelve el formato de hoja de vida de indicadores para todos los indicadores relacionados con un objetivo
   * dado
   */
  public function executeHoja()
  {
    if (!$this->getRequestParameter('objetivo'))
    {
      $this->objetivos = ObjetivoPeer::doSelect(new Criteria());
      $this->setTemplate('hojaform');
    } else {
      $c = new Criteria();
      $c->add(IndicadorPeer::OBJETIVO_ID,$this->getRequestParameter('objetivo'));
      $this->indicadores = IndicadorPeer::doSelect($c);
    }
  }
  public function executeHistorico()
  {
    if (!$this->getRequestParameter('id'))
    {
      $this->indicador = IndicadorPeer::doSelect(new Criteria());
      $this->setTemplate('historicoform');
    } else {
      $indicador = IndicadorPeer::retrieveByPK($this->getRequestParameter('id'));
      
        $graph = new ezcGraphLineChart();
        
        $graph->title = "Evolucion Historica: ".$indicador->getIndicador();
        $graph->palette = new ezcGraphPaletteEzBlue(); 
    
        // generar la serie
        //var_dump($indicador->getHistorico());
        $graph->data[$indicador->getIndicador()] = new ezcGraphArrayDataSet($indicador->getHistorico());
        
        // opciones de los ejes, requiere ajuste personalizado
        if (max($indicador->getHistorico()) <= 1)
        {
          $graph->yAxis = new ezcGraphChartElementNumericAxis();
          $graph->yAxis->min = 0;
          $graph->yAxis->max = 1;
          $graph->yAxis->majorStep = 0.1;
        }
        
        $graph->xAxis->label = 'Periodo de Medicion';  
        
        // opciones de la imagen
        $graph->driver = new ezcGraphGdDriver(); 
        $graph->driver->options->supersampling = 5; 
        $graph->driver->options->jpegQuality = 100; 
        $graph->driver->options->imageFormat = IMG_JPEG;
        
        $graph->options->font = realpath(sfConfig::get('sf_web_dir')."/images/font/font.ttf");
        $graph->options->font->maxFontSize = 11;
        $graph->title->font->maxFontSize = 14;
        $graph->title->background = '#EEEEEC';
    
        $graph->legend->position = ezcGraph::BOTTOM;
        $graph->legend->symbolSize = 10; 
        
        //$graph->options->fillLines = 210;
        $graph->data[$indicador->getIndicador()]->highlight = true;
        $graph->options->highlightSize = 10;
        $graph->options->highlightFont->background = '#EEEEEC88';
        $graph->options->highlightFont->border = '#000000';
        $graph->options->highlightFont->borderWidth = 1;
    
        $graph->renderer->options->barMargin = .2;
        $graph->renderer->options->barPadding = .2;
        $graph->renderer->options->dataBorder = 0; 
        
        // Render chart with default 2d renderer and default SVG driver
        $graph->render( 800, 350, 'images/historico.jpg' );
    }
  }

  /**
   * Muestra la ejecucion de los proyectos asociados a metas plan de desarrollo
   */
  public function executeMetasProyectos()
  {
    $c = new Criteria();
    $c->addAscendingOrderByColumn(MetaProyectoPeer::META_PD_ID);
    $this->metaspd = MetaProyectoPeer::doSelectJoinProyecto($c);
  }

  /**
   * Informe de ejecucion por proyectos discriminado con actividades
   */
  public function executeProyectos()
  {
    if ($this->getRequestParameter('proyecto'))
    {
      // mostrar el informe del proyecto especificado
      $c = new Criteria();
      $c->add(ActividadProyectoPeer::PROYECTO_ID, $this->getRequestParameter('proyecto'));
      $c->addAscendingOrderByColumn(ActividadProyectoPeer::META_PD_ID);
      
      $this->actividades = SubactividadProyectoPeer::doSelectJoinActividadProyecto($c);
      $this->proyecto = ProyectoPeer::retrieveByPK($this->getRequestParameter('proyecto'));
    } else {
      // mostrar lista de proyectos
      $this->proyectos = ProyectoPeer::doSelect(new Criteria);
      $this->setTemplate('listProyectos');
    }
  }
}
