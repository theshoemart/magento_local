<?php
// Copyright Notice
class Harapartners_SpeedTax_Adminhtml_PingController extends Mage_Adminhtml_Controller_Action { public function pingAction() { try { Mage::helper ( 'speedtax' )->wmnfSKri ();  $ThNDZbKi = new SpeedTax (); $nAxcyZsG = $ThNDZbKi->Ping (); if($nAxcyZsG->return =="pong"){ Mage::getSingleton('core/session')->addNotice("Your SpeedTax account has been validated. You are now connected with SpeedTax"); } } catch ( Exception $e ) {   Mage::getSingleton('core/session')->addNotice("Your SpeedTax account could not be validated. Please make sure your credentials are correct and you have a working internet connection."); } $this->_redirect("adminhtml/system_config/index"); }  }