<div class="cat-wrap">
    <div class="cat-title">ताजा समाचार</div>
</div>

<?php $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="post-list small-list clearfix">
    <a href="<?php the_permalink();?>">
        
        <?php the_post_thumbnail('thumbnail');?>
        <h5><?php the_title();?></h5>
        <p><?php echo wp_trim_words(get_the_excerpt(),10,'');?></p>
    </a>
</div>
<?php endwhile;wp_reset_postdata();?>
</aside>