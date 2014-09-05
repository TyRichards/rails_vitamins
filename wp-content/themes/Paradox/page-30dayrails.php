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
        <div class="row">
<!--             <div class="col-md-7">
                <div class="well well-lg">
                    <div class="clearfix">
                        <h3>Pre-Order and Pay What You Want</h3>
                        <ul>
                            <li>Early access to each lesson as I complete them</li>
                            <li>One year of access to the online course (after launch)</li>
                            <li>Source code to the demo app</li>
                            <li>PDF format of lessons</li>
                        </ul>

                        <a class="btn btn-primary btn-block" href="/pre-order">Pre-Order Now</a>

Save by joining early. Price will double on launch day. This will get you:

This only lasts until the official launch of the product in a few weeks. Plus when you pre-order Rails Curve, I can make the initial course that much better.


                        
                    </div> .clearfix -->
      
            <div class="col-md-6 col-md-offset-3">                
                <div class="well well-lg text-center">
                    <div class="clearfix">
                        <h4>Get updates on when 30-Day Rails is released</h4>
                        <?php gravity_form(3, false, true, false, null, true, 50); ?>
                    </div>
                </div>                    
            </div>
        </div> <!-- .row -->        
    </div> <!-- .container -->
</section> <!-- .primary-content -->

<?php get_footer(); ?> 
