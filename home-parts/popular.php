<div class="cat-title">लोकप्रिय</div>
<ul class="list-unstyled custom-list popular">
<?php $args = array('showposts' => 5, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
    <li class="custom-list-item">
    <a href="<?php the_permalink();?>"><h5><?php the_title();?></h5></a>
    </li>
<?php endwhile; wp_reset_postdata();?>
</ul>