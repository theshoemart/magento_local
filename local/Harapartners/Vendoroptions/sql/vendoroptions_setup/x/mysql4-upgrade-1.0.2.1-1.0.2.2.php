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

$catalogEavSetup = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup();

$catalogEavSetup->updateAttribute(Mage_Catalog_Model_Product::ENTITY, 'vendor_id', 'used_in_product_listing', true);
$catalogEavSetup->updateAttribute(Mage_Catalog_Model_Product::ENTITY, 'vendor_code', 'used_in_product_listing', true);
$catalogEavSetup->updateAttribute(Mage_Catalog_Model_Product::ENTITY, 'vendor_name', 'used_in_product_listing', true);

$installer->endSetup();
