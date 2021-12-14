<div class="entry-meta">

	<?php //if ( !is_category() ) { ?>
		<span class="entry-category"><?php enjoyblog_first_category(); ?></span>
	<?php //} ?>

	<span class="entry-date"><?php echo get_the_date(); ?></span>
	<span class="sep">&bullet;</span>
	<span class='entry-comment'><?php comments_popup_link( __('0 Comment','enjoyblog'), __('1 Comment','enjoyblog'), __('% Comments','enjoyblog'), 'comments-link', __('Comments off','enjoyblog')); ?></span>
	
</div><!-- .entry-meta -->