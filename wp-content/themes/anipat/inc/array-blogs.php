<?php
/**
 * Custom template block for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Anipat
 */

	global $post;

	$myposts = get_posts( array(
		'numberposts' => 4,
		'offset'      => 0,
		'order'       => 'DESC',
	) );

	if (!empty($myposts)) {
		
		foreach( $myposts as $post ) {
			setup_postdata( $post ); 
			
			$url  = '/date'. get_the_date('/Y/f/');  // /date/2014/08/
			$text = get_the_date('j F, Y'); // 12 Нояб. 2014
			?>

			<article class="blog_item">
				<div class="blog_item_img">
					<a class="card-img rounded-0" href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-card') ?></a>
					<a href="<?php echo get_archives_link( $url, $text, '' ); ?>" class="blog_item_date"> <!--href="archive.html" -->
						<h3><?php echo get_the_date('j'); ?></h3>
						<p><?php echo get_the_date('F'); ?></p>
					</a>
				</div>

				<div class="blog_details">
					<a class="d-inline-block" href="<?php the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
					<p><?php the_excerpt(); ?></p>
					<ul class="blog-info-link">
						<li><a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><i class="fa fa-folder-open"></i> <?php echo get_the_category()[0]->cat_name; ?></a></li>
					</ul>
				</div>
			</article>	

		<?php 
		} 
		
	} else {
		echo "Постов нет";
	}

	wp_reset_postdata();
?>

<!-- <nav class="blog-pagination justify-content-center d-flex">
	<ul class="pagination">
		<li class="page-item">
			<a href="#" class="page-link" aria-label="Previous">
				<i class="ti-angle-left"></i>
			</a>
		</li>
		<li class="page-item">
			<a href="#" class="page-link">1</a>
		</li>
		<li class="page-item active">
			<a href="#" class="page-link">2</a>
		</li>
		<li class="page-item">
			<a href="#" class="page-link" aria-label="Next">
				<i class="ti-angle-right"></i>
			</a>
		</li>
	</ul>
</nav> -->
