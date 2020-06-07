# pages
Pages are a static Post Type, outside of the normal blog stream/feed. Their features are:

- non-time dependent and without a time stamp
- are not organized using the categories and/or tags taxonomies
- can have page templates applied to them
- can be organized in a hierarchical structure — i.e. pages can be parents/children of other pages
 
The template files that display the Page post type are:

1. page.php and all its iterations
2. $custom.php and all its iterations
3. front-page.php
4. search.php
5. index.php

You can build page templates for:

1. full-width, one-column
2. two-column with a sidebar on the right
3. two-column with a sidebar on the left
4. three-column

Global page template example

    <?php
    /**
    * Template Name: Full Width Page
    *
    * @package WordPress
    * @subpackage Twenty_Fourteen
    * @since Twenty Fourteen 1.0
    */

Specific post type

    <?php
    /*
    Template Name: Full-width layout
    Template Post Type: post, page, event
    */
    // Page code here...

