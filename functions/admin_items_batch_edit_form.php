<?php 
$it_info=cah_item_type();
$it_name=$it_info['name'];	
?>	
<div class="field">
    <div class="two columns alpha">
        <label for="migration-helper"><?php echo __('Convert to %s?',$it_name); ?></label>
    </div>

    <div class="inputs five columns omega">
        <?php echo get_view()->formCheckbox('custom[migration-helper]'); ?>

        <p class="explanation"><?php echo __(
                  'Check this box to convert the selected items to the %s type and copy existing Dublin Core data to corresponding Item Type Metadata fields.',$it_name ); ?></p>

		<table>
		    <thead>
		    <th>Dublin Core</th>
		    <th>Item Type</th>
		    </thead>
		    <tr>
		    	<td>2nd Title</td><td>Subtitle</td>
		    </tr>
		    <tr>
		    	<td>Description</td><td>Story</td>
		    </tr>
		     <tr>
		    	<td>Relation</td><td>Related Resources</td>
		    </tr>
		</table>
	                    
    </div>
    
    
</div>   