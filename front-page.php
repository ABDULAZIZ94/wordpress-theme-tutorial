<h1>front page</h1>
<?php
bloginfo( 'name' );
bloginfo( 'version' );

if ( have_posts() ) :
  while ( have_posts() ) :
      the_post();
  endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'devhub' );
endif;

wp_list_pages();

$next_posts = get_next_posts_link(); 
$prev_posts = get_previous_posts_link();

?>

<li><a href="<?php $next_posts  ?>">Next Post</a></li>
<li><a href="<?php $prev_posts  ?>">Prev Post</a></li>

