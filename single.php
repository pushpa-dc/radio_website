<?php get_header();?>
<div class="container mt-4">
<?php while ( have_posts() ) : the_post();?>
<div class="row single">
    <?php get_template_part('template-parts/content');?>
</div>
<!-- .row -->

<?php endwhile; wp_reset_postdata();?>
</div>
<?php get_footer();?>