<?php
// auto-generated by sfPropelCrud
// date: 2010/07/02 09:19:41
?>
<?php

/**
 * anualizacion actions.
 *
 * @package    indicadores
 * @subpackage anualizacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class anualizacionActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('anualizacion', 'list');
  }

  public function executeList()
  {
    $this->anualizacions = AnualizacionPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->anualizacion = AnualizacionPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->anualizacion);
  }

  public function executeCreate()
  {
    $this->anualizacion = new Anualizacion();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->anualizacion = AnualizacionPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->anualizacion);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $anualizacion = new Anualizacion();
    }
    else
    {
      $anualizacion = AnualizacionPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($anualizacion);
    }

    $anualizacion->setId($this->getRequestParameter('id'));
    $anualizacion->setMetaPdId($this->getRequestParameter('meta_pd_id') ? $this->getRequestParameter('meta_pd_id') : null);
    $anualizacion->setAnyo1($this->getRequestParameter('anyo1'));
    $anualizacion->setAnyo2($this->getRequestParameter('anyo2'));
    $anualizacion->setAnyo3($this->getRequestParameter('anyo3'));
    $anualizacion->setAnyo4($this->getRequestParameter('anyo4'));

    $anualizacion->save();

    return $this->redirect('anualizacion/show?id='.$anualizacion->getId());
  }

  public function executeDelete()
  {
    $anualizacion = AnualizacionPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($anualizacion);

    $anualizacion->delete();

    return $this->redirect('anualizacion/list');
  }
}
