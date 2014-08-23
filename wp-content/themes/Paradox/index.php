<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */
/*
Template Name: Blog
*/
?>

<?php get_header('drop'); ?>

<section class="masthead masthead-lg">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-push-7 text-left">
                <h1 class="h4"><br>Enjoy weekly Ruby on Rails tips & tricks.</h1>
            </div>            
            <div class="col-sm-7 col-md-6 col-md-pull-5 col-md-offset-1 text-left">
                <a href="<?php echo esc_url(home_url()); ?>/railsvitamins">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png" alt="Rails Vitamins">          
                </a>
            </div>
        </div>
    </div>
</section>	

<section class="primary-content">
    <div class="container">  
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center h1"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title('') ?></a></h2>            
            </div>
        </div>      
        <div class="row">    
            <div class="main-col col-md-6 col-md-offset-3 page-content">  								
				<?php if (have_posts()) { ?> 
				<?php 
				// start the loop
				while (have_posts()) {
					the_post();
					
					/* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part('content', get_post_format());

				}// end while
				
				bootstrapBasicPagination();
				?> 
				<?php } else { ?> 
				<?php get_template_part('no-results', 'index'); ?>
				<?php } // endif; ?> 					
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .primary-content -->
<?php get_footer(); ?> 