<?php 

/* NOTICE OF LICENSE
 *
 * This source file is subject to the End User Software Agreement (EULA).
 * It is also available through the world-wide-web at this URL:
 * http://www.harapartners.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to eula@harapartners.com so we can send you a copy immediately.
 */ 
 
class Harapartners_GiftWithPurchase_Adminhtml_ReportController extends Mage_Adminhtml_Controller_Action{
	
	public function indexAction(){
		$this->loadLayout()
			->_setActiveMenu('hpreport/giftwithpurchase')
			->_addContent($this->getLayout()->createBlock('giftwithpurchase/adminhtml_report_index'))
			->renderLayout();
	}
	
}