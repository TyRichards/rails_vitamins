<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
		</div><!--.body-content-->				
		<footer class="footer">	
			<?php // get_footer('lg'); ?>
      		<section class="small-footer">
      			<div class="container-fluid">
      				<div class="row">
	      				<div class="col-xs-12 col-sm-8">
			        		<div class="pull-left footer-credits">		        			
			        			<small>
			        				<a href="<?php echo esc_url(home_url('/')); ?>">
			        					© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
			        				</a>
			        			</small>		        			
			        		</div>
			        		<div class="pull-left footer-menu">
			        			<?php dynamic_sidebar('footer-credits'); ?>
			        		</div>
		        		</div>
		        		<div class="col-xs-12 col-sm-4">
			        		<div class="pull-right no-float-xs">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<small>Site crafted by Paradox</small>
			        			</a>
			        		</div>
			        	</div>
			        </div> <!-- .row -->
	        	</div> <!-- .container -->
	        </section>	
      	</footer>	
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		
		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/ayy8qhh.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<!-- Drip -->
		<script type="text/javascript">
		  var _dcq = _dcq || [];
		  var _dcs = _dcs || {}; 
		  _dcs.account = '1058351';
		  
		  (function() {
		    var dc = document.createElement('script');
		    dc.type = 'text/javascript'; dc.async = true; 
		    dc.src = '//tag.getdrip.com/1058351.js';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(dc, s);
		  })();
		</script>	

		<!-- Perfect Audience -->
		<script type="text/javascript">
		  (function() {
		    window._pa = window._pa || {};
		    // _pa.orderId = "myOrderId"; // OPTIONAL: attach unique conversion identifier to conversions
		    // _pa.revenue = "19.99"; // OPTIONAL: attach dynamic purchase values to conversions
		    // _pa.productId = "myProductId"; // OPTIONAL: Include product ID for use with dynamic ads
		    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
		    pa.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + "//tag.perfectaudience.com/serve/54077f2a5ded377179000145.js";
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
		  })();
		</script>			
	</body>
</html>