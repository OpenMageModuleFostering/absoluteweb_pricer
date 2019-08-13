<?php
class AbsoluteWeb_Pricer_Adminhtml_PricerbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("API Credentails"));
	   $this->renderLayout();
    }
}