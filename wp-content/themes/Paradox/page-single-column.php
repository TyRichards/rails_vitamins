<?php
/*
Template Name: Single Column
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container">     
        <div class="row">    
            <article class="main-col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 page-content">                                
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
