

<?php
	 $options = array(
		 
	 		'Admin Dashboard Settings'=>
	 		array(
	        	array('name'=>'cah_enable_dashboard_stats','label'=>'File Statistics','explanation'=>'Display file statistics on the dashboard.'),
	        	array('name'=>'cah_enable_dashboard_resources','label'=>'Resources','explanation'=>'Display the Curatescape Resources widget on the dashboard.'),
	        	array('name'=>'cah_enable_dashboard_components','label'=>'Components','explanation'=>'Display the Curatescape Components widget on the dashboard.'),
	        	),
        	
        	'Item and File form settings'=>
        	array(  	
	        	array('name'=>'cah_enable_item_file_tab_notes','label'=>'Helper Notes','explanation'=>'Display Curatescape-related instructions, tips and other notes on the item and file forms.'),
	        	array('name'=>'cah_enable_item_file_toggle_dc','label'=>'Toggle Metadata','explanation'=>'By default, only display Curatescape-related metadata fields on the item and file forms. (Other fields are still accessible with a single click.)'),
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
