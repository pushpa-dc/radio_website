<?php $i=0; $args = array('showposts' => 3, 'cat' => $cat[0]); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
<div class="main-list clearfix">
    <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('medium');?>
    </a>
    <h5 class="pt-2"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>    
</div>
<hr>
<div class="custom-list">
<?php } else{?>
    <div class="media custom-list-item">
        <i class="fa fa-adjust align-self-center"></i>
        <div class="media-body"><h6 class="mt-0 ml-3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6></div>
    </div>
<?php } endwhile; wp_reset_postdata(); ?>
</div>