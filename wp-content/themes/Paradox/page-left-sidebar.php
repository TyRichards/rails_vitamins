<?php
/*
Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container-fluid">        
        <!-- no row needed on fluid -->                
        <div class="col-sm-3 col-sm-offset-1">
            <section class="sidebar-col sidebar sidebar-left">                    
                <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                    } 
                ?>                  
                <?php // get_sidebar('about'); ?>                                               
            </section>  
        </div> <!-- .col -->
        <div class="col-sm-6 col-sm-offset-1">
            <section class="main-col page-content">                
                <div id="main" class="site-main" role="main">
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
                </div>           
            </section>
        </div> <!-- .col -->                    
    </div> <!-- .container -->
</section>
<div class="clearfix"></div>

<?php get_footer(); ?> 
