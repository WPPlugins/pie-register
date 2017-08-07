<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php 
	$coming_soon_aweber = false;
	if(isset($this->pie_post_array['notice']) && $this->pie_post_array['notice'] ){
		echo '<div id="message" class="updated fade msg_belowheading"><p>' . $this->pie_post_array['notice'] . '</p></div>';
	}elseif(isset($this->pie_post_array['error']) && $this->pie_post_array['error'] ){
		echo '<div id="error" class="error fade msg_belowheading"><p>' . $this->pie_post_array['error'] . '</p></div>';
	}
	if(isset($this->pie_post_array['warning']) && $this->pie_post_array['warning'] ){
		echo '<div id="warning" class="warning fade msg_belowheading"><p>' . $this->pie_post_array['warning'] . '</p></div>';
	}
	?>
<div class="pieregister-admin">
<div id="bulkemails_tabs" class="hideBorder" style="display:none;">
	<div class="settings">
    	<h2 class="headingwidth"><?php _e("Bulk Email",'piereg') ?></h2>
        <div class="tabOverwrite">
            <div id="tabsSetting" class="tabsSetting">            
                <ul class="tabLayer1">
                    <?php 
                    if(	is_plugin_active('pie-register-mailchimp/pie-register-mailchimp.php') ) 
                    { ?>
                        <li><a href="#piereg_mailchimp"><?php _e("MailChimp","piereg")?></a></li>
                    <?php 
                    } 
					
					
					if( is_plugin_active('pie-register-aweber/pie-register-aweber.php') )
                    { ?>
                        <li><a href="#piereg_aweber"><?php _e("Aweber","piereg")?></a></li>
                    <?php 
                    } 
					else if( !file_exists( dirname(dirname(dirname(__FILE__))) . "\pie-register-aweber\pie-register-aweber.php" ) )
					{
						$coming_soon_aweber 			= true;
						?>
                    		<li><a href="#piereg_aweber"><?php _e("Aweber (Coming Soon)","piereg")?></a></li>
                    	<?php 
					}  
					?>
                </ul>
            </div>
        </div>
				<?php do_action("piereg_email_services"); ?>
                <?php 
				if( $coming_soon_aweber ) { ?>
                    <div id="piereg_aweber"><div class="right_section image_wrapper"><img class="comming_soon_img" alt="Aweber Coming Soon" src="<?php echo plugins_url('pie-register').'/images/Coming-soon_aweber.png'; ?>" /></div></div>    
                <?php } ?>
	</div>
</div>
</div>