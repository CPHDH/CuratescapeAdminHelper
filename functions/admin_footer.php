<script>
	
	// Plugin Options
	var cah_enable_item_file_tab_notes = <?php echo get_option('cah_enable_item_file_tab_notes');?>;
	var cah_enable_item_file_toggle_dc = <?php echo get_option('cah_enable_item_file_toggle_dc');?>;
	var cah_enable_dashboard_components = <?php echo get_option('cah_enable_dashboard_components');?>;
	var cah_enable_dashboard_resources = <?php echo get_option('cah_enable_dashboard_resources');?>;
	var cah_enable_dashboard_stats = <?php echo get_option('cah_enable_dashboard_stats');?>;
		
	// Dashboard
	var stats = jQuery('body.index #stats');
	if(cah_enable_dashboard_stats==1) stats.append('<div id="file_stats"><p>'+'<?php echo cah_get_file_info();?>'+'</p><div>');
	if(cah_enable_dashboard_components==1) stats.after('<?php echo cah_components_guide();?>');
	if(cah_enable_dashboard_resources==1) stats.after('<?php echo cah_resources_guide();?>');
	
	// Tab text on item and file forms
	if(cah_enable_item_file_tab_notes==1){
		var form_mod_array=<?php echo cah_item_form_helper_text_array();?>;
		jQuery.each(form_mod_array.tabs, function(i,data){
			jQuery(data.insert_after).after(data.text);
		});
	}
	
	// Re-order and re-style elements for items and files
	if(cah_enable_item_file_toggle_dc==1){
		jQuery('#dublin-core-metadata .field').addClass('toggle-me').hide();
		
		jQuery('#dublin-core-metadata .element-set-description').after('<div id="dc-reveal">Reveal additional Dublin Core fields</div>');
		
	    jQuery('#dc-reveal').click(function(){
	        jQuery('#dublin-core-metadata .field.toggle-me').slideToggle();
	        jQuery(this).text(function(i,text){
		        return text === "Reveal additional Dublin Core fields" ? "Hide additional Dublin Core fields" : "Reveal additional Dublin Core fields";
	        });
	    });
	    
	    // items
		jQuery.each(form_mod_array.item_fields, function(i,id){
			jQuery('.items.edit #element-'+id).removeClass('toggle-me').insertBefore('#dc-reveal').show();
		});
	
	    // fields
		jQuery.each(form_mod_array.file_fields, function(i,id){
			jQuery('.files.edit #element-'+id).removeClass('toggle-me').insertBefore('#dc-reveal').show();
		});
	}
</script>
