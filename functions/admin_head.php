<?php 
$story_container='div#element-'.cah_get_element_id('Item Type Metadata','Story');
?>
<style>
	.fa{
		font-family:"FontAwesome"
		}
	.fa-exclamation-triangle:after,	 
	.fa-check-circle:after{
		font-style: normal;
		font-weight: lighter;
		font-size:1.35em;
		line-height:0em;
		vertical-align: middle;
		padding-left: .25em;
		text-shadow:0 0 2px #fff;		
	}
	.fa-exclamation-triangle:after{
		content:"\f071";
		color:#AD6345;
	}	
	.fa-check-circle:after{
		content: "\f058";
		color: #A4C637;
	}
	<?php echo $story_container;?> textarea{
		height:25em;
	}
	p.cah-helper{
		font-style: italic;
		padding:.5em;
		background:#eaeaea;
	}
	.element-set-description{
		font-size:0.85em;
	}
	#dc-reveal{
		background:#22546B;
		background:linear-gradient(to bottom, #22546B, #102D3B) repeat scroll 0% 0% transparent;
		clear: both;
		cursor: pointer;
		text-align: center;
		color:#fff;
		padding: 1em 0;
		margin-bottom: 1em;
	}
</style>