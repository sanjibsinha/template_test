<div id="body">

    <?php while(have_posts()) {
        the_post(); ?>
        <h1 class="pb-4 mb-4 fst-italic border-bottom">
        <?php the_title(); ?>
      </h1>
      <p class="blog-post-meta">
          
          Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    in
    <?php echo get_the_category_list(', '); ?>
        </p>
<p>
	<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
?>
		</p>	
			<article class="blog-post">
      <?php the_content( ); ?>
      </article> 

    <?php
  }
 
  ?>
	
</div>

