<div class="cat-wrap">
<div class="cat-title">मुख्य समाचार</div>
</div>
<div class="row">
    <div class="col-md-12 mb-5">
        <?php $i=0; $args = array('showposts' => 7, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <div class="main-list row clearfix">
            <div class="col-md-8">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('medium');?>
                </a>
            </div>
            <div class="col-md-4">
                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                <div class="pt-3">
                    <p><?php echo wp_trim_words(get_the_excerpt(),35,'');?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- .col-md-7 -->
    <?php } else{?>
    <div class="col-md-4 custom-list">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('medium');?>
        </a>
        <div class="card border-0 custom-list-item">
            <div class="media-body">
                <h6 class="mt-0 mt-2 mb-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                <p style="font-size:12px;font-"><?php echo wp_trim_words(get_the_excerpt(),35,'');?></p>
            </div>
        </div>
    </div>
    <?php } endwhile; wp_reset_postdata();?>
    <!-- .col-md-5 -->
</div>
<!-- .row -->