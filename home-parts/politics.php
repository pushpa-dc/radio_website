<div class="cat-title">राजनीति</div>
<div class="row">
    <div class="col-md-4">
    <?php $i=0; $args = array('showposts' => 7, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <div class="main-list clearfix">
            <div class="">
                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            </div>
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('medium');?>
            </a>
            <div class="pt-3">
                <p><?php echo wp_trim_words(get_the_excerpt(),25,'');?></p>
            </div>
        </div>
    </div>
    <!-- .col-md-4 -->
    <div class="col-md">
        <div class="row">
    <?php }  else{?>
        <div class="col-md-6">
        <a href="<?php the_permalink();?>">
        <div class="media custom-list-item small-list">
            <?php the_post_thumbnail('thumbnail');?>
            <div class="media-body"><h5 class="mt-0 ml-3"><?php the_title();?></h5></div>
        </div>
    </a>
        </div>  
    <?php } endwhile; wp_reset_postdata();?>
    </div>
    </div>
</div>
<!-- .row -->