<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */
?>

<?php get_header('drop'); ?>

<section class="masthead">
    <div class="container">
        <div class="row">  
            <div class="col-md-6 col-md-push-6 text-right">
                <p>Enjoy weekly Ruby on Rails tips & tricks.</p>
            </div>                      
            <div class="col-md-4 col-md-offset-1 col-md-pull-6 text-left">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png" alt="Rails Vitamins">          
                </a>
            </div>                                     
        </div>
    </div>
</section>	

<section class="primary-content">
    <div class="container"> 
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1 class="text-center"><?php the_title('') ?></h1>            
            </div>           
        </div>       
        <div class="row">    
            <div class="main-col col-md-6 col-md-offset-3 page-content">              
				<?php 
				while (have_posts()) {
					the_post();

					get_template_part('content', get_post_format());

					echo "\n\n";
					
					bootstrapBasicPagination();

					echo "\n\n";
					
					// If comments are open or we have at least one comment, load up the comment template
					if (comments_open() || '0' != get_comments_number()) {
						comments_template();
					}

					echo "\n\n";

				} //endwhile;
				?> 
			</div> <!-- .main-col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .primary-content -->

<?php get_footer(); ?> 