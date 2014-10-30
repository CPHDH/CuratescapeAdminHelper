<?php

include dirname(__FILE__) . '/helpers.php';

class CuratescapeAdminHelperPlugin extends Omeka_Plugin_AbstractPlugin
{	
    protected $_hooks = array(
    	'admin_items_batch_edit_form', 
    	'items_batch_edit_custom',
    	'install',
    	'admin_head',
    	'admin_footer',
    	);
    
	public function hookAdminHead(){
		
		// header scripts: admin styles
		require dirname(__FILE__) . '/functions/admin_head.php';
		
	}

	public function hookAdminFooter(){
		
		// footer scripts: admin dashboard enhancements
		require dirname(__FILE__) . '/functions/admin_footer.php';
		
	}

    public function hookInstall(){  
		
		// install scripts: create custom item type and elements
		require dirname(__FILE__) . '/functions/install.php';
		
	}
    
    public function hookAdminItemsBatchEditForm(){
    	
    	// extend batch edit form: add option to convert to custom item type
    	require dirname(__FILE__) . '/functions/admin_items_batch_edit_form.php';
    
    }
    
    public function hookItemsBatchEditCustom($args){
		
		// save batch edit form: convert item to custom item type and cross-walk elements
    	require dirname(__FILE__) . '/functions/items_batch_edit_custom.php';
    	
    }
}