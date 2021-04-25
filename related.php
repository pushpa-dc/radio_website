<aside class="related text-left">
<div class="cat-title">संबन्धित</div>
<div class="row">
    <?php $i=0; $id=get_the_ID(); $allcat = wp_get_post_categories($id); $categoryarr = array_diff($allcat,array(2)); $args = array('showposts' => 4, 'cat'=>implode(',',$categoryarr),'post__not_in'=>array($id));$loop = new WP_Query( $args );while($loop->have_posts()): $loop->the_post(); ?>
    <div class="small-list col-md-6 <?php if($i%2==0){echo 'border-right';}?>">
        <a href="<?php the_permalink();?>">
            <h5><?php the_title();?></h5>
            <?php the_post_thumbnail('thumbnail');?>
            <p><?php echo wp_trim_words(get_the_excerpt(),15,'');?></p>
        </a>
    </div>
        <?php if(++$i%2==0){echo '<div class="col-12"><div class="w-100 seperator break clearfix"></div></div>';} endwhile; wp_reset_postdata();?>
</div>
</aside>