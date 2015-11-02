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
<footer id="colophon" class="site-footer" role="contentinfo">
            <?php if ( get_theme_mod( 'luna_footer_title' ) ) : ?> 
                
                <h3 class="footer-contact-title"><?php echo wp_kses_post( get_theme_mod( 'luna_footer_title' )); ?></h3>
                            
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'luna_footer_text' ) ) : ?> 
                
                <div class="footer-contact">
                    <?php echo wp_kses_post( get_theme_mod( 'luna_footer_text' )); ?>
                </div> 
                            
            <?php endif; ?>
        <div class="site-info">
                <div class="col-1-1">
                
                        <div class="col-1-2">
                        
                            <p>Powered by Wordpress</p>
                    
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>
