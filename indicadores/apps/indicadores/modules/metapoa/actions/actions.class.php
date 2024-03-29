<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:23:50
?>
<?php

/**
 * metapoa actions.
 *
 * @package    indicadores
 * @subpackage metapoa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class metapoaActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('metapoa', 'list');
  }

  public function executeList()
  {
    $this->meta_poas = MetaPoaPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->meta_poa = MetaPoaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->meta_poa);
  }

  public function executeCreate()
  {
    $this->meta_poa = new MetaPoa();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->meta_poa = MetaPoaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->meta_poa);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $meta_poa = new MetaPoa();
    }
    else
    {
      $meta_poa = MetaPoaPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($meta_poa);
    }

    $meta_poa->setId($this->getRequestParameter('id'));
    $meta_poa->setMeta($this->getRequestParameter('meta'));
    $meta_poa->setDescripcion($this->getRequestParameter('descripcion'));

    $meta_poa->save();

    return $this->redirect('metapoa/show?id='.$meta_poa->getId());
  }

  public function executeDelete()
  {
    $meta_poa = MetaPoaPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($meta_poa);

    $meta_poa->delete();

    return $this->redirect('metapoa/list');
  }
}
