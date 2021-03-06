<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>		

		<?php if ('post' == get_post_type()) { ?> 
		<div class="entry-meta">		
			<?php bootstrapBasicPostOn(); ?>
			<span class="slash">/</span>	
			<!-- comments -->	
			<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?> 
			<span class="comments-link"><?php bootstrapBasicCommentsPopupLink(); ?></span>
			<?php } //endif; ?>  
		</div><!-- .entry-meta -->
		<?php } //endif; ?> 
	</header><!-- .entry-header -->

	
	<?php if (is_search()) { // Only display Excerpts for Search ?> 
	<div class="entry-summary">
		<?php the_excerpt(); ?> 
		<div class="clearfix"></div>
	</div><!-- .entry-summary -->
	<?php } else { ?> 
	<div class="entry-content">
		<?php the_content(bootstrapBasicMoreLinkText()); ?> 
		<div class="clearfix"></div>
		<?php 
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?> 
	</div><!-- .entry-content -->
	<?php } //endif; ?> 

	<div class="well well-lg text-center">
		<div class="row">
			<?php gravity_form(1, true, true, false, null, true, 50); ?>
		</div>
	</div>


	<footer class="entry-meta text-center">

		<?php if ('post' == get_post_type()) { // Hide category and tag text for pages on Search ?> 

		<p>You just read <i>"<?php the_title() ?>"</i></p>
		<div class="entry-meta-category-tag">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list(__(', ', 'bootstrap-basic'));
				if (!empty($categories_list)) {
			?> 
			<span class="cat-links">
				<?php echo bootstrapBasicCategoriesList($categories_list); ?> 
			</span>
			<?php } // End if categories ?> 

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic'));
				if ($tags_list) {
			?> 
			<span class="tags-links">
				<?php echo bootstrapBasicTagsList($tags_list); ?> 
			</span>
			<?php } // End if $tags_list ?> 
		</div><!--.entry-meta-category-tag-->

		<!-- comments -->	
		<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?> 
		<span class="comments-button"><?php bootstrapBasicCommentsPopupLink(); ?></span>
		<?php } //endif; ?>  

		<div class="text-left"><?php echo do_shortcode( '[manual_related_posts]' ); ?></div>		

		<?php } // End if 'post' == get_post_type() ?> 

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->