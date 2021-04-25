<?php get_header();?>
<?php while ( have_posts() ) : the_post();?>
<div class="row single">
    <?php get_template_part('template-parts/content');?>
</div>
<!-- .row -->

<?php endwhile; wp_reset_postdata();?>
<?php get_footer();?>