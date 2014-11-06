

<?php
	 $options = array(
		 
	 		__('Admin Dashboard Settings')=>
	 		array(
	        	array('name'=>'cah_enable_dashboard_stats','label'=>__('File Statistics'),'explanation'=>__('Display file statistics on the dashboard.')),
	        	array('name'=>'cah_enable_dashboard_resources','label'=>__('Resources'),'explanation'=>__('Display the Curatescape Resources widget on the dashboard.')),
	        	array('name'=>'cah_enable_dashboard_components','label'=>__('Components'),'explanation'=>__('Display the Curatescape Components widget on the dashboard.')),
	        	),
        	
        	__('Item and File form settings')=>
        	array(  	
	        	array('name'=>'cah_enable_item_file_tab_notes','label'=>__('Helper Notes'),'explanation'=>__('Display Curatescape-related instructions, tips and other notes on the item and file forms.')),
	        	array('name'=>'cah_enable_item_file_toggle_dc','label'=>__('Toggle Metadata'),'explanation'=>__('By default, only display Curatescape-related metadata fields on the item and file forms. (Other fields are still accessible with a single click.)')),
	        	array('name'=>'cah_enable_file_edit_links','label'=>__('File Edit Links'),'explanation'=>__('Display "edit" links below each file on item records.')),
	        	),
    );
    
foreach($options as $section_title=>$infos){
?>
<div class="field">
	
	<h2><?php echo $section_title; ?></h2>
	
	<?php foreach($infos as $info){ ?>
    
	    <div id="<?php echo $info['name']; ?>" class="two columns alpha">
	        <label for="<?php echo $info['name']; ?>"><?php echo $info['label']; ?></label>
	    </div>
	    
	    <div class="inputs five columns omega">
	        
	        <?php echo get_view()->formCheckbox($info['name'], true, 
	                array('checked'=>(boolean)get_option($info['name']))); ?>
	                
	        <p class="explanation"><?php echo $info['explanation']; ?></p>
	        
	    </div>
	    
    <?php } ?>
    
</div>
<?php
}    
    
?>
