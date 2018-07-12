<?php
/* Template Name: Catalog */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hardcoded_Yehudit
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

			<?php 
			$model_terms = get_terms(['taxonomy' => 'model', 'hide_empty' => false]);
			$class_terms = get_terms(['taxonomy' => 'class', 'hide_empty' => false]);
			
			?>
			<div class="row">
				<form>

					<div class="form-group col-sm-2">
					  <label for="model">Select model:</label>
					  <select class="form-control" id="model">
					  	<option value='all' selected>All models</option>
					  	<?php 
					  	foreach ($model_terms as $key => $value) { 
						  	echo ' <option value="' . $value->slug . '">'.$value->name.'</option>';
						}
						?>
					  </select>
					</div>

					<div class="form-group col-sm-2">
					  <label for="class">Select class:</label>
					  <select class="form-control" id="class">
					  	<option value='all' selected>All classes</option>
					  	<?php 
					  	foreach ($class_terms as $key => $value) { 
						  	echo ' <option <option value="' . $value->slug . '">'.$value->name.'</option>';
						}
						?>
					  </select>
					</div>

				</form>
			</div>


			<div class="row posts_filters">
			
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

// get_sidebar();
get_footer();
