<?php /* Template Name: Single */ ?>

<?php get_header(); ?>


<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<h1 class="post-title"><?php the_title(); ?></h1>
	
	<div class="meat">
		<?php echo the_content(); ?>
	</div>
	
	<?php if(comments_open()): ?>
		<?php comments_template(); ?>
	<?php endif; ?>

<?php endwhile; endif; get_footer(); ?>
