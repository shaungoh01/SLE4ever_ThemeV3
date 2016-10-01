<?php get_header(); ?>
<section class="index-post">
<div class="container">
<?php
if (have_posts()) :
	while (have_posts()) : the_post();
?>
<div class="box">
<div class="col-lg-12 text-center">
<h2><?php the_title(); ?>
                        <br>
                        <small><?php the_time('F jS, Y'); ?>| by 
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author(); ?></a>
	 | Posted in 
	<?php

	$catergories = get_the_category();
	$separator = ", ";
	$output ='';

	if($catergories){

		foreach ($catergories as $category) {
			$output .='<a href="'. get_category_link($category->term_id) .'">'. $category->cat_name .'</a>'. $separator;
		}

		echo trim($output , $separator);
	}

	?>
	</small>
                    </h2>
	<?php the_content() ?>
</div>
	<iframe width="55px" height="20px" src="//www.facebook.com/plugins/share_button.php?href=<?php the_permalink()?>&amp;layout=button" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
</div>
<?php
	endwhile;

	else :
		 echo '<p>No content found</p>';

	endif;

?>
<?php comments_popup_link(); ?>
</div>
</section>
<?php get_footer(); ?>