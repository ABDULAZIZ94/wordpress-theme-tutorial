<h1>Page </h1>
<?php
get_header();
?>
<?php 
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    the_content();
  endwhile; else: 
?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<div>
  <h1>The tags</h1>
  <?php the_tags(); ?>
</div>