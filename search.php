<?php get_header();?>
<div class="container">
  <div class="cat-title my-4">Search Results: <i><?php the_search_query();?></i></div>
  <?php get_template_part('loop');?>
</div>
<?php get_footer();?>