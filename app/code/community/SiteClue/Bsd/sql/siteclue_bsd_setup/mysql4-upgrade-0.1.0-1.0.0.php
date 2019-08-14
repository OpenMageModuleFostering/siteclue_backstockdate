<?php
/**
 * SiteClue
 * @category   SiteClue
 * @package    SiteClue_BackInStockDate
 * @copyright  Copyright (c) 2014-2015 SiteClue. (http://www.siteclue.com)
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
 
 
$installer = $this;

$installer->startSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$setup->addAttribute('catalog_product', 'back_stock_date', array(
		'type'			=> 'datetime',
		'backend'       => 'eav/entity_attribute_backend_datetime',
		'source'        => '',
		'label'         => 'Back In Stock',
		'group'         => 'General',
		'input'         => 'date',
		'scope'			=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
		'visible'       => true,
		'required'	=> false,
		'user_defined'  => true,
		'visible_on_front' => true,
		'used_in_product_listing'   => true,			
		'sort_order'    => 15		
));	

$installer->endSetup();