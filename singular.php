<?php
  get_header();
  get_sidebar(); 
  comment_form();
  get_search_form();
  wp_login_url();

  wp_list_pages();
?>

<h1>Im singular page</h1>

<body class="container">
  <button class="btn btn-info"> HELP</button>
<?php wp_login_form();?>
</body>


<?php 
  get_footer()
?>

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