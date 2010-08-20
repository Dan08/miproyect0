<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:08
?>
<?php

/**
 * crp actions.
 *
 * @package    indicadores
 * @subpackage crp
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class crpActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('crp', 'list');
  }

  public function executeList()
  {
    $this->crps = CrpPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->crp = CrpPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->crp);
  }

  public function executeCreate()
  {
    $this->crp = new Crp();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->crp = CrpPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->crp);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $crp = new Crp();
    }
    else
    {
      $crp = CrpPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($crp);
    }

    $crp->setId($this->getRequestParameter('id'));
    $crp->setNumero($this->getRequestParameter('numero'));
    if ($this->getRequestParameter('fecha'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('fecha'), $this->getUser()->getCulture());
      $crp->setFecha("$y-$m-$d");
    }
    $crp->setMonto($this->getRequestParameter('monto'));

    $crp->save();

    return $this->redirect('crp/show?id='.$crp->getId());
  }

  public function executeDelete()
  {
    $crp = CrpPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($crp);

    $crp->delete();

    return $this->redirect('crp/list');
  }
}
