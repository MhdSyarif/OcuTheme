<?php
/**
 * The header template file.
 * @package OcuTheme
 * @since OcuTheme 1.0
*/
?>
<?php get_header();
global	$themeurl;
?>
<div class="container">
	<div class="row">
	<div class="col-lg-8">
		<?php if(have_posts()): while (have_posts()): the_post();?>

          <div class="media">
				<h1><?php the_title();?></h1>
				<ul class="breadcrumb">
					<li><a href="<?php bloginfo('url');?>">Home</a></li>
					<li class="active"><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<li class="navbar-right"><?php the_time('m-d-y')?> Written by: 
					<?php the_author_posts_link(); ?></li>
				</ul>
				
				<article>
					<?php the_content();?>
				</article>
				
				<div class="navbar-right">
					<?php next_post_link(); ?>
				</div>
				<div class="navbar-left">
					<?php previous_post_link(); ?>
				</div>
				<hr>
				<ul class="breadcrumb">
					<?php comments_template(''); ?>
				</ul>
					<?php comment_form(''); ?>
		  </div>

		<?php
			endwhile;
			else:
			echo '</p>Belum ade artikel</p>';
			endif;
		?>

	</div>
	<?php get_sidebar();?>
	</div>
	</div>
<?php get_footer();?>