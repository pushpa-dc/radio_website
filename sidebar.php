<aside>
<div class="fb-page" data-href="https://www.facebook.com/appharu" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/appharu" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/appharu">Appharu</a></blockquote></div>
</aside>
<aside>
<div class="cat-title">ताजा अपडेट</div>
<?php $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="post-list small-list clearfix">
    <a href="<?php the_permalink();?>">
        <h5><?php the_title();?></h5>
        <?php the_post_thumbnail('thumbnail');?>
        <p><?php echo wp_trim_words(get_the_excerpt(),15,'');?></p>
    </a>
</div>
<?php endwhile;wp_reset_postdata();?>
</aside>
<div class="break clearfix"></div>
<aside>
<div class="cat-title">विशेष</div>
<?php $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="post-list card clearfix">
    <div class="card-body">
        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
    </div>
    <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('medium');?>
    </a>
    <div class="card-body">
        <p><?php echo wp_trim_words(get_the_excerpt(),15,'');?></p>
    </div>
</div>
<?php endwhile;wp_reset_postdata();?>
</aside>