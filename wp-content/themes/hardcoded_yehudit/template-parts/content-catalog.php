<?php
/**
 * Template part for displaying page content in catalog.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hardcoded_Yehudit
 */

?>

	<div class="col-md-4">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

			<div class="image_category" style="background-image:url('<?php echo the_post_thumbnail_url(); ?> '); padding-bottom: 56%; background-repeat: no-repeat; background-size: cover; background-position: center;">
   			</div>
			
			<div class="entry-content" style="text-align:center;">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php $class_term = wp_get_post_terms( $post->ID, 'class', array("fields" => "all")); ?>
				<?php $model_term = wp_get_post_terms( $post->ID, 'model', array("fields" => "all")); ?>
				<strong>Model: </strong><?php echo $model_term[0]->name; ?><br>
				<strong>Class: </strong><?php echo $class_term[0]->name; ?><br>

				<?php
				the_content();
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hardcoded_yehudit' ),
					'after'  => '</div>',
				) );
				?>

			</div><!-- .entry-content -->

			
		</article><!-- #post-<?php the_ID(); ?> -->

	
</div>

