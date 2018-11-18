<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
	if (is_home()){
		$keywords = "你网站首页的关键字，自己修改吧";
		$description = "你网站首页的描述，自己修改吧";
	}
	elseif (is_single()){
		$tags = wp_get_post_tags($post->ID);
		foreach ($tags as $tag){
			$keywords = $keywords.$tag->name.",";
		}
		$keywords = rtrim($keywords, ', ');
		if($post->post_excerpt){
			$description = $post->post_excerpt;
		}else{
			$description = mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,200);
		}
	}
	elseif (is_page()){
		$keywords = get_post_meta($post->ID, "keywords", true);
		$description = get_post_meta($post->ID, "description", true);
	}
	elseif (is_category()){
		$keywords = single_cat_title('', false);
		$description = category_description();
	}
	elseif (is_tag()){
		$keywords = single_tag_title('', false);
		$description = tag_description();
	}
	$keywords = trim(strip_tags($keywords));
	$description = trim(strip_tags($description));
	?>
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
