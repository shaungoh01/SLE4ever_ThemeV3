
<?php get_header(); ?>
<div class="container">
<?php
if (have_posts()) :
	while (have_posts()) : the_post();
?>
<div class="box">
<div class="col-lg-12 text-center">
    <h2><?php the_title(); ?>
    	</h2>
    	<?php the_content() ?>
        <hr>

	<?php comments_popup_link(); ?>
</div>
</div>
<?php
	endwhile;

	else :
		 echo '<p>No content found</p>';

	endif;
?>
</div>
<?php get_footer(); ?>