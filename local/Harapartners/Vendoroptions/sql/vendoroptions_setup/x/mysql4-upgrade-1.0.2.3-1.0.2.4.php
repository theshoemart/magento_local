<?php

/*
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End User Software Agreement (EULA).
 * It is also available through the world-wide-web at this URL:
 * http://www.harapartners.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to eula@harapartners.com so we can send you a copy immediately.
 * 
 */

$installer = $this;
$installer->startSetup();

$installer->getConnection()->addColumn($installer->getTable('vendoroptions/vendoroptions_configure'), 'edi_date_offset', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT , 
    'length' => 255 , 
    'nullable' => true , 
    'comment' => 'Offest for Vendor Edi Date.',
	'default' => '+3 days'
)
);

$installer->endSetup();
