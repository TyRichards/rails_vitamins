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
<!--         <div class="row">
            <div class="col-md-6 col-md-offset-3">                
                <div class="well well-lg text-center">
                    <div class="clearfix">
                        <h3>Get update when <i>30-Day Rails</i> is released</h3>
                        <?php //gravity_form(3, false, true, false, null, true, 50); ?>
                    </div>
                </div>                    
            </div>
        </div> -->

        <!-- Pre-Order -->
        <div class="row">
            <div class="col-md-8">
                <div class="well well-lg" >
                    <div class="clearfix">
                        <h2 class="text-center">Pre-order & pay what you want</h2>
                        
                        <div class="row">     
                            <div class="col-md-8 col-md-offset-2">
                                <?php gravity_form(4, false, true, false, null, true, 100); ?>   
                            </div>
                        </div>   
                        <hr>             
                        <div class="row">                                                                
                            <div class="col-md-6">
                                <h3 class=""><i class="fa fa-question-circle"></i> How it works</h3>
                                <div class="small">
                                    <p>It's a no-nonsense deal, pick the amount you want to pay for the online course, anything between $10 to $1000, completely up to you. In return, you'll get access to the parts of the course as it's created, and the final version upon it’s completion.</p>

                                    <p>If you pay less than $50 then you will get online access to each lesson. If you pay over $50 or more then you'll get access to the screencasts that go with each lesson.</p>

                                    <p>If you're interested, but not sure about it, maybe just pay $10, then as you start getting updated with more lessons, if you decide it's worth a greater amount, you can pay more, or if you're unhappy, you can just get a refund.</p>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5><strong><i class="fa fa-wrench"></i> If you pay from $1 to $49</strong></h5>                                
                                        <div class="small">
                                            <p><strong>Format:</strong> Online Course</p>
                                            <p>Only want the course with no screencasts, pay any price, and you'll get the course as well as the source code, starting on your journey to understanding how to develop Rails apps.</p>                                    
                                        </div>
                                    </div> 
                                </div>
                                <div class="row" style="margin-top:30px;">
                                    <div class="col-md-12">
                                        <h5><strong><i class="fa fa-youtube-play"></i> If you pay over $50</strong></h5>
                                        <div class="small">                  
                                            <p><strong>Format:</strong> Online Course + Screencasts</p>
                                            <p>You'll get the same "easy to follow but certainly not lacking the details" course, though you will be able to dive deeper into the topics covered, by watching these screencasts. Not to mention, the more you pay the more time I can dedicate to the community and to making this course that much more awesome.</p>
                                        </div>
                                    </div> 
                                </div>                                
                            </div>                 
                        </div> <!-- .row -->                                         
                    </div> <!-- .clearfix -->
                </div>  <!-- .well -->
            </div> <!-- .col -->
            <div class="col-md-4">                
                <div class="well well-lg text-center">
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
