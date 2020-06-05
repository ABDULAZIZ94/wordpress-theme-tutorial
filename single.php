<h1>Single</h1>
<?php
get_header();
get_posts();
get_post();

$next_posts = get_next_posts_link(); 
$prev_posts = get_previous_posts_link();
get_footer();
?>


<li><a href="<?php $next_posts  ?>">Next Post</a></li>
<li><a href="<?php $prev_posts  ?>">Prev Post</a></li>

<?php 
if ( have_posts() ) :
  while ( have_posts() ) :
      the_post();
  endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'devhub' );
endif;

wp_list_pages();
?>