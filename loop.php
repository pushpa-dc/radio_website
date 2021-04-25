<?php while ( have_posts() ) : the_post();?>
    <a href="<?php the_permalink();?>" class="post-list d-flex">
        <div class="media">
            <div class="mr-3"><?php the_post_thumbnail('thumbnail');?></div>
            <div class="media-body">
                <h5 class="mt-0"><?php the_title();?></h5>
                <p class="d-none d-sm-block"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
            </div>
        </div>
    </a>
    <?php endwhile;appharu_paging();?>