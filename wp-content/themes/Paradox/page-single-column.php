<?php
/*
Template Name: Single Column
*/
?>

<?php get_header(); ?>

<section class="masthead">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="row">            
            <div class="col-md-4 col-md-offset-1 text-left">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png" alt="Rails Vitamins">          
                </a>
            </div>
            <div class="col-md-6 text-right">
                <p>Enjoy weekly Ruby on Rails tips & tricks.</p>
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
            <article class="main-col col-sm-6 col-sm-offset-3 page-content">                                
                <?php 
                while (have_posts()) {
                  the_post();

                  get_template_part('content', 'page');

                  echo "\n\n";
                  
                  // If comments are open or we have at least one comment, load up the comment template
                  if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                  }

                  echo "\n\n";

                } //endwhile;
                ?>             
            </article>  
        </div> <!-- .row -->             
    </div> <!-- .container -->
</section> <!-- .primary-content -->

<?php get_footer(); ?> 
