<?php
/*
Template Name: Home
*/
?>

<?php get_header('drop'); ?>

<section class="masthead" style="height:700px">
    <div class="container">
        <div class="row">
<!--             <div class="col-xs-5 col-md-push-7 text-left">
                <h1 class="h4"><br>Flatten the learning curve of <br>Ruby on Rails</h1>
            </div>  -->           
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 class="h1-lg text-center"><?php echo esc_attr(get_bloginfo('name', 'display')); ?></h1>            
                <hr>
                <p class="subhead">Ruby on Rails Tools</p>
                <h2>Learn by doing</p>
                <!-- <a href="<?php // echo esc_url(home_url('/')); ?>">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png" alt="Rails Vitamins">          
                </a> -->
                <a class="btn btn-lg btn-secondary" href="/railscurve">Rails Curve</a>
                <a class="btn btn-lg btn-secondary" href="/railsvitamins">Rails Vitamins</a>
            </div>
        </div>
    </div>
</section>  

<?php get_footer(); ?> 
