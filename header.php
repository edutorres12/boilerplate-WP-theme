<!doctype html>
	<html lang="en">
		<head>
			<!-- Title -->
			<?php if(is_category()): ?>
			<title><?php echo $wp_query->get_queried_object()->cat_name; ?> | <?php echo get_bloginfo('name'); ?></title>
			<?php else: ?>
			<title><?php single_post_title(); ?> | <?php echo get_bloginfo('name'); ?></title>
			<?php endif; ?>

			<!-- Metatags -->
			<meta charset="utf-8" />
			<meta name="description" content="<?php bloginfo('description');?>">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

			<?php echo wp_head(); ?>
		</head>
	

		<?php 
			global $post;
			$post_slug = $post->post_name;
		?>

  		<?php if(is_home() || is_category()): ?>
    		<?php //$post_slug = "blog"; ?>
  		<?php elseif(is_singular("post")): ?>
			<?php $post_slug = "post"; ?>
  		<?php else: ?>
    		<?php $post_slug = $post->post_name; ?>
 	 	<?php endif; ?>





		<body <?php body_class(); ?>>
			<?php include (TEMPLATEPATH . '/includes/nav.php'); ?>

			<div class="global__wrapper" data-namespace="<?php echo $post_slug; ?>">