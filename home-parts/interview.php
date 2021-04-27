<div class="col-12">
<div class="cat-wrap">
    <div class="cat-title">स्थानीय समाचार </div>
</div>
</div>
<?php $args = array('showposts' => 4, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-3  main-list clearfix">
    <div style="position:relative">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('medium');?>
        </a>
    </div>
    <h5 class="pt-4"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
</div>
<?php endwhile; wp_reset_postdata();?>