<?php
/*
Template Name: Home Page
 *
 * @package luna
 */

get_header(); ?>


	<?php if ( get_theme_mod( 'luna_home_bg_image' ) ) : ?>
		<section id="home-hero" style="background-image: url('<?php echo esc_url( get_theme_mod( 'luna_home_bg_image' )); ?>');"> 
    <?php else: ?>
    	<section id="home-hero">
    <?php endif; ?>

    			<div class="col-1-1">
        	
            		<?php if ( get_theme_mod( 'luna_home_title' ) ) : ?>
        				<h1><?php echo wp_kses_post( get_theme_mod( 'luna_home_title' )); ?></h1>
            		<?php endif; ?>
                    
            		<?php if ( get_theme_mod( 'luna_home_text' ) ) : ?>
        				<p><?php echo wp_kses_post( get_theme_mod( 'luna_home_text' )); ?></p> 
            		<?php endif; ?>
            		
                    <?php if ( get_theme_mod( 'luna_home_button_url' ) ) : ?>
             			<a href="<?php echo esc_url( get_page_link( get_theme_mod('luna_home_button_url'))) ?>" class="featured-link"> 
            		<?php endif; ?>
            
            		<?php if ( get_theme_mod( 'luna_home_button_text' ) ) : ?> 
                		<button>
                        	<?php echo esc_html( get_theme_mod( 'luna_home_button_text' )); ?> 
                    	</button>
                	<?php endif; ?>
                
            		<?php if ( get_theme_mod( 'luna_home_button_url' ) ) : ?>
            			</a> 
            		<?php endif; ?> 
                    
        	
            	</div>

    
	<?php if ( get_theme_mod( 'luna_home_bg_image' ) ) : ?>
		</section>
    <?php else: ?>
    	</section>
    <?php endif; ?>



	<section id="home-works">
		
    		<div class="col-1-1">
            	<?php if ( get_theme_mod( 'luna_home_projects_text' ) ) : ?>
        			<h3><?php echo wp_kses_post( get_theme_mod( 'luna_home_projects_text', esc_html__( 'Recently Added', 'luna' ) )); ?></h3>
            	<?php endif; ?>
        	</div>
        
            
        <?php if ( get_theme_mod( 'active_default_home_widget' ) == '' ) : ?> 
        	<?php if ( is_active_sidebar('default-home-widget-area') ) : ?>
        
        		<div class="home-widget home-widget-default shortcodes">
                		<div class="col-1-1"> 
                
                    		<?php dynamic_sidebar('default-home-widget-area'); ?>
                            
                        </div><!-- .col -->
                </div><!-- .home-widget -->
                
            <?php endif; ?>
        <?php endif; ?>


<?php get_footer(); ?>
