<?php
/*
Template Name: Home
*/
?>

<?php get_header('home'); ?>

<section class="masthead" style="height:700px">
    <div class="container">
        <div class="row">
<!--             <div class="col-xs-5 col-md-push-7 text-left">
                <h1 class="h4"><br>Flatten the learning curve of <br>Ruby on Rails</h1>
            </div>  -->           
            <div class="col-md-12 text-center logo-bg">
                
                    <h1 class="h1-lg text-center" style="text-indent:-9999px"><?php echo esc_attr(get_bloginfo('name', 'display')); ?></h1>
                    <h2 class="subhead">Ruby on Rails resources for those who <strong>learn by doing.</strong></h2>                
                    <!-- <a href="<?php // echo esc_url(home_url('/')); ?>">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lg.png" alt="Rails Vitamins">          
                    </a> -->
                    <?php wp_nav_menu(array('theme_location' => 'primary', 
                                            'container' => false, 
                                            'menu_class' => 'nav nav-pills text-center', 
                                            'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                
            </div>
        </div>
    </div>
</section>  

<?php get_footer(); ?> 
