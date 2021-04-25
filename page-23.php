<?php get_header();?>
<div class="row">
    <?php if( have_rows('member') ):
    while( have_rows('member') ) : the_row();
    $image = get_sub_field('photo');
    
    
    $sub_value = get_sub_field('name'); ?>
    <div class="card col-md-3">
        <img style="height:150px;object-fit:cover;object-position: 50% 50%;" src="<?php echo get_sub_field('photo');?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo get_sub_field('name');?></h5>

            <span class="text-muted"><?php echo get_sub_field('email');?></span>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php
    // End loop.
endwhile;

// No value.
else :
    echo '<h1>There is nothing...</h1>';
endif;?>
</div>
<?php get_footer();?>