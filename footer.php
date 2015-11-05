<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package luna
 */
?>

	</div><!-- #content -->
	
</div><!-- #page -->
<footer id="pagefooter">
                
   
    <div id"contact">
    	<div class="contact">
        <h2>Visit Our Store</h2>
        <p>1 Street Road<br>Townsville<br>City</p>
       </div> 
        <div class="social">
     	<?php if( get_theme_mod( 'active_social' ) == '') : ?> 
                        
                    		<?php if ( is_active_sidebar('social-widget-area') ) : ?>
                        
                            		<?php dynamic_sidebar('social-widget-area');  ?>

                            
                    		<?php endif; ?> 
                            
                    	<?php endif; ?>
     </div>	
    </div>
       
     <div class="disclaimer">
     	<p>This is a demo site for educational purposes only. No orders shall be fulfilled.</p>
     </div>	                
  
</footer>
<?php wp_footer(); ?>

</body>
</html>
