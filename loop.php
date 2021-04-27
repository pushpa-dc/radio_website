<?php while ( have_posts() ) : the_post();?>
<div class="row mb-4 no-gutters">
    <a href="<?php the_permalink();?>" class="row">
        <div class="col-md-2"><?php the_post_thumbnail('medium');?></div>
        <div class="col-md-10">
            <h5 class="mt-0"><?php the_title();?></h5>
            <p class="d-none d-sm-block"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
        </div>
    </a>
</div>
<?php endwhile;appharu_paging();?>