<?php
// auto-generated by sfViewConfigHandler
// date: 2010/07/20 02:25:18
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'FVS - Sistema de Medicion de Indicadores', false, false);
  $response->addMeta('robots', 'index, nofollow', false, false);
  $response->addMeta('description', 'symfony project', false, false);
  $response->addMeta('keywords', 'symfony, project', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
  $response->addStylesheet('styles', '', array ());
  $response->addStylesheet('menu', '', array ());
  $response->addStylesheet('button', '', array ());
  $response->addJavascript('yahoo-dom-event', '');
  $response->addJavascript('container-min', '');
  $response->addJavascript('menu-min', '');
  $response->addJavascript('element-beta-min', '');
  $response->addJavascript('button-min', '');
  $response->addJavascript('functions', '');


