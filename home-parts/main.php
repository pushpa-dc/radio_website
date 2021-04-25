<div class="cat-title">मुख्य समाचार</div>
<div class="row">
    <div class="col-md-7">
<?php $i=0; $args = array('showposts' => 8, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
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
<!-- .col-md-7 -->
<div class="col-md-5 custom-list">
    <?php } else{?>
        <div class="media custom-list-item">
            <div class="media-body"><h6 class="mt-0 ml-3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6></div>
        </div>  
    <?php } endwhile; wp_reset_postdata();?>
</div>
<!-- .col-md-5 -->
</div>
<!-- .row -->