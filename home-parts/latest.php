<?php $confirm = get_field('confirm');?>

<?php $args = array('showposts' => 3, 'post_type' => 'member'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="media small-list col-md-4">
    <a href="<?php the_permalink();?>" class="mr-2"> <?php the_post_thumbnail('thumbnail');?></a>
    <div class="media-body">
        <a href="<?php the_permalink();?>">
            <h5><?php the_title();?></h5>
        </a>
        <div class="post-meta text-muted">
            <?php the_field('email');?><br>
            <a href=" <?php the_field('web');?>" target="_blank">Website</a><br>
            <i class="fa fa-clock-o"></i>
            <?php echo get_the_time();?> </div>
    </div>
</div>

<?php endwhile; wp_reset_postdata();?>