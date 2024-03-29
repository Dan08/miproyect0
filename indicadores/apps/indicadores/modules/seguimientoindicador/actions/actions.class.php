<?php
// auto-generated by sfPropelCrud
// date: 2010/07/02 08:43:10
?>
<?php

/**
 * seguimientoindicador actions.
 *
 * @package    indicadores
 * @subpackage seguimientoindicador
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class seguimientoindicadorActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('seguimientoindicador', 'list');
  }

  public function executeList()
  {
    $this->seguimiento_indicador_metas = SeguimientoIndicadorMetaPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->seguimiento_indicador_meta = SeguimientoIndicadorMetaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->seguimiento_indicador_meta);
  }

  public function executeCreate()
  {
    $this->seguimiento_indicador_meta = new SeguimientoIndicadorMeta();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->seguimiento_indicador_meta = SeguimientoIndicadorMetaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->seguimiento_indicador_meta);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $seguimiento_indicador_meta = new SeguimientoIndicadorMeta();
    }
    else
    {
      $seguimiento_indicador_meta = SeguimientoIndicadorMetaPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($seguimiento_indicador_meta);
    }

    $seguimiento_indicador_meta->setId($this->getRequestParameter('id'));
    $seguimiento_indicador_meta->setIndicadorMetaId($this->getRequestParameter('indicador_meta_id') ? $this->getRequestParameter('indicador_meta_id') : null);
    $seguimiento_indicador_meta->setAnyo($this->getRequestParameter('anyo'));
    $seguimiento_indicador_meta->setValor($this->getRequestParameter('valor'));

    $seguimiento_indicador_meta->save();

    return $this->redirect('seguimientoindicador/show?id='.$seguimiento_indicador_meta->getId());
  }

  public function executeDelete()
  {
    $seguimiento_indicador_meta = SeguimientoIndicadorMetaPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($seguimiento_indicador_meta);

    $seguimiento_indicador_meta->delete();

    return $this->redirect('seguimientoindicador/list');
  }
}
