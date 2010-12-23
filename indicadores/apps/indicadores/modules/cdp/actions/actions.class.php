<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:14:46
?>
<?php

/**
 * cdp actions.
 *
 * @package    indicadores
 * @subpackage cdp
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class cdpActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('cdp', 'list');
  }

  public function executeList()
  {
    if (!$this->getRequestParameter('cdp')) {
      $this->setTemplate('BuscarCDP');
    } else {
      $c = new Criteria();
      $c->add(CdpPeer::NUMERO, $this->getRequestParameter('cdp'));
      
      $this->cdps = CdpPeer::doSelect($c);
    }
  }

  public function executeShow()
  {
    $this->cdp = CdpPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cdp);
  }

  public function executeCreate()
  {
    $this->cdp = new Cdp();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->cdp = CdpPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->cdp);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $cdp = new Cdp();
    }
    else
    {
      $cdp = CdpPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($cdp);
    }

    $cdp->setId($this->getRequestParameter('id'));
    $cdp->setNumero($this->getRequestParameter('numero'));
    if ($this->getRequestParameter('fecha'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha'), $this->getUser()->getCulture());
      $cdp->setFecha("$y-$m-$d");
    }
    $cdp->setMonto($this->getRequestParameter('monto'));

    $cdp->save();

    return $this->redirect('cdp/show?id='.$cdp->getId());
  }

  public function executeDelete()
  {
    $cdp = CdpPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($cdp);

    $cdp->delete();

    return $this->redirect('cdp/list');
  }
}
