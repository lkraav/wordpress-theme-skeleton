<?php /* Template Name: Page */ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<h1 class="post-title"><?php the_title(); ?></h1>
	
	<div class="meat">
		<?php echo the_content(); ?>
	</div>

	<p class="post-footer">
		<em><?php _e('Written by:', 'stereotunnel') ?><?php echo get_avatar(get_the_author_meta('user_email'), $size = '32'); ?><?php the_author(); ?></em>
		<img class="blogicons" src="<?php echo get_bloginfo('template_directory'); ?>/img/icon-comment.png" alt="Comments" /><?php comments_popup_link(__('0 Comments', 'stereotunnel'), __('1 Comment', 'stereotunnel'), __('% Comments', 'stereotunnel')); ?>
		<?php edit_post_link(__('Edit', 'stereotunnel'), '<img class="blogicons" src="'.get_bloginfo('template_directory').'/img/icon-edit.png" alt="'.__('Edit', 'stereotunnel').'" /><em>', '</em>'); ?>
	</p>
	<div class="post-datum"><span class="post-footer"><?php _e('Last edited:', 'stereotunnel') ?></span> <?php the_modified_time('d.m.y', display); ?>, <?php the_time('G:i'); ?></div>
	<p class="post-footer">
		<em><?php the_tags(); ?></em>
	</p>	
	
	<?php if(comments_open()): ?>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php endif; ?>

<?php endwhile; endif; get_footer(); ?>
