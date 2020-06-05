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
