<div class="col-12"><div class="cat-title">अन्तर्वार्ता</div></div>
<?php $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-4 main-list clearfix">
    <div style="position:relative">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('medium');?>
        </a>
        <i class="fa fa-microphone"></i>
    </div>
    <h5 class="pt-2"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>    
</div>
    <?php endwhile; wp_reset_postdata();?>