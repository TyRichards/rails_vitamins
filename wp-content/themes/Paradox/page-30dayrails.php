<?php
/*
Template Name: 30-Day Rails
*/
?>

<?php get_header('drop'); ?>

<section class="masthead">
    <div class="container">
        <div class="row">
<!--             <div class="col-xs-5 col-md-push-7 text-left">
                <h1 class="h4"><br>Flatten the learning curve of <br>Ruby on Rails</h1>
            </div>  -->           
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 class="h1-lg text-center"><?php the_title('') ?></h1>            
                <hr>
                <p class="subhead">A Ruby on Rails crash-course</p>
                <h2>Build a live Rails app start-to-finish in 30 days</p>
                <!-- <a href="<?php // echo esc_url(home_url('/')); ?>">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png" alt="Rails Vitamins">          
                </a> -->
            </div>
        </div>
    </div>
</section>  

<section class="primary-content">
    <div class="container">      
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

<!--                 <div class="well well-lg text-center">
                  <div class="row">
                    <?php // gravity_form(4, true, true, false, null, true, 50); ?>                    
                  </div>
                </div>  

                <h2 class="text-center">OR</h2>
 -->
                <div class="well well-lg text-center">
                  <div class="row">
                    <?php gravity_form(3, true, true, false, null, true, 50); ?>                    
                  </div>
                </div>                                
            </article>  
        </div> <!-- .row -->             
    </div> <!-- .container -->
</section> <!-- .primary-content -->

<?php get_footer(); ?> 