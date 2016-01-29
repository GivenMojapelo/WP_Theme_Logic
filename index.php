
	<?php
	/**
	 * Template Name: Car Sales
	 *
	 * Selectable from a dropdown menu on the edit page screen.
	 */
	?>


	<?php get_header(); ?>
	<div id="main">
	<div id="content">


	<?php
	$type = 'car';
	$args=array(
	  'post_type' => $type,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  'caller_get_posts'=> 1);

	$my_query = null;
	$my_query = new WP_Query($args);

	if( $my_query->have_posts() ) {
		?>
		<ul style="margin-left:20px">
		<?php
	  while ($my_query->have_posts()) : $my_query->the_post();
	   ?>
	   <li style="list-style:none; font-weight:bold">
		<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
	   </li>
		<?php
	  endwhile;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
	?>
	</ul>


	</div>
	</div>
	
	</div>
	<?php get_footer(); ?>