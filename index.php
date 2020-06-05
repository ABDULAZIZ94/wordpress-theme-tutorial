<h1>Index </h1>
<?php 
  get_header();
  wp_title( );
  get_sidebar();
  get_post_status();
  get_posts();
  get_post();
  get_tags();
  get_pages();
  wp_page_menu();
  get_comments();

  if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
    endwhile;
  else :
      _e( 'Sorry, no posts matched your criteria.', 'devhub' );
  endif;
  
  wp_list_pages();

?>
<body>

</body>

<?php 
  get_footer();
?>

