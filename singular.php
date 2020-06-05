<?php
  get_header();
  get_sidebar(); 
  comment_form();
  get_search_form();
  wp_login_url();
  
?>

<h1>Im singular page</h1>

<body>
<?php wp_login_form();?>
</body>


<?php 
  get_footer()
?>
