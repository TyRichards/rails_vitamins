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

        <!-- Temporary -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">                
                <div class="well well-lg text-center">
                    <div class="clearfix">
                        <h3>Get update when <i>30-Day Rails</i> is released</h3>
                        <?php gravity_form(3, false, true, false, null, true, 50); ?>
                    </div>
                </div>                    
            </div>
        </div>

        <!-- Pre-Order -->
        <div class="row">
            <div class="col-md-8">
                <div class="well well-lg" style="display:none;">
                    <div class="clearfix">
                        <h2>Pre-Order and Pay What You Want</h2>
                        
                        <?php gravity_form(4, false, true, false, null, true, 100); ?>   
                        <hr>
                        <div class="col-md-6">
                            <strong>If you pay from $1 to $49</strong>
                            <div class="small">
                                <p>Only want the book, pay any price, and you'll get the book as well as the source code, starting you on your journey to understanding how to develop iOS and OS X applications using RubyMotion!</p>

                                <p>I'll show you straightforward ways to look at iOS and OS X development from a Rails point of view, but don't worry, though it will be an effortless journey, this won't be just an introductory book.</p>

                                <p><strong>Formats:</strong> PDF, ePub, and Mobi</p>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <strong>If you pay over $50</strong>
                            <div class="small">                            
                                <p>If you choose this package, not only are you further supporting me in helping the community, but I'll also be giving you screencasts that I'll make to go along with this book and take things beyond the confines of text!</p>

                                <p>You'll get the same "easy to follow but certainly not lacking the details" book, though you will be able to dive deeper into the topics covered, by watching these screencasts.</p>

                                <p><strong>Formats:</strong> MP4, PDF, ePub, and Mobi</p>
                            </div>
                        </div>                         

                        <!-- <ul>
                            <li>Early access to each lesson as I complete them</li>
                            <li>One year of access to the online course (after launch)</li>
                            <li>Source code to the demo app</li>
                            <li>PDF format of lessons</li>
                        </ul>                        

                        Save by joining early. Price will double on launch day. This will get you:

                        This only lasts until the official launch of the product in a few weeks. Plus when you pre-order Rails Curve, I can make the initial course that much better. -->
                 
                    </div><!-- .clearfix -->
                </div>  
            </div>          
            <div class="col-md-4">                
                <div class="well well-lg text-center" style="display:none">
                    <div class="clearfix">
                        <h4><strong>OR</strong> get updates on when 30-Day Rails is released</h4>
                        <?php gravity_form(3, false, true, false, null, true, 50); ?>
                    </div>
                </div>                    
            </div>

        </div> <!-- .row -->        
    </div> <!-- .container -->
</section> <!-- .primary-content -->

<?php get_footer(); ?> 
