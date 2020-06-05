
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
?>
<body>

</body>

<?php 
  get_footer();
?>