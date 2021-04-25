<div class="owl-carousel slide">
    <?php $args = array('showposts' => 10, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
    <div class="item row">

        <div class="col-md-4">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('thumbnail');?></a>
        </div>
        <div class="col-md-8 body-content">
            <div class="media-body">
                <a href="<?php the_permalink();?>">
                    <h6 class="text-light">
                        <?php echo wp_trim_words( get_the_title(), 2,'' ); ?>
                    </h6>
                </a>
                <div class="post-meta mt-3 text-white"><i class="fa fa-clock-o"></i> <?php echo get_the_time();?> </div>
            </div>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata();?>
</div>