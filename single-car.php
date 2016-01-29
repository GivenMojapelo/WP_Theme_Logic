	<?php get_header(); ?>
	<div id="main">
	<div id="content">
<div id="delimiter">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h3><?php the_title(); ?></h3>
	
	<p><?php the_content(__('(more...)')); ?></p>

	<div class="meta_content" style="margin-left:40px;font-weight:bold;font-size:large">
		<p><?php echo "Model Name:\t\t" . get_post_meta( get_the_ID(), 'modelName', true ); ?></p>
		<p><?php echo "Manufacture Name:\t\t" . get_post_meta( get_the_ID(), 'Manufacture', true ); ?></p>
		<p><?php echo "Color:\t\t" . get_post_meta( get_the_ID(), 'color', true ); ?></p>
		<p><?php echo "Engine No:\t\t" . get_post_meta( get_the_ID() , 'engineNo', true ); ?></p>
		<p><?php echo "Engine Capacity\t\t" . get_post_meta( get_the_ID(), 'EngineCapacity', true ); ?></p>
		<p><?php echo "Top Speed:\t\t" . get_post_meta( get_the_ID(), 'topSpeed', true ); ?></p>
	</div>	
	<h5>Posted on <?php the_time('F jS, Y') ?></h5>
	<hr> <?php endwhile; else: ?>

	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>
	</div>
	<div id="delimiter">
	</div>
	<?php get_footer(); ?>