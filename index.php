<?php get_header();?>
<div class="container-fluid" style="background:2#23408e">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-0 pt-4">
                <?php get_template_part('home-parts/slide');?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row latest">
        <?php get_template_part('home-parts/latest');?>
    </div>
    <div class="seperator clearfix"></div>
    <div class="row">
        <div class="col-md-8">
            <?php get_template_part('home-parts/main');?>
        </div>
        <div class="col-md-4">
            <?php get_template_part('home-parts/popular');?>
        </div>
    </div>
    <div class="seperator clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <?php get_template_part('home-parts/politics');?>
        </div>
    </div>
    <div class="seperator clearfix"></div>
    <div class="row interview">
        <?php get_template_part('home-parts/interview');?>
    </div>
    <div class="seperator clearfix"></div>
    <div class="row">
        <?php get_template_part('home-parts/sports');?>
    </div>
</div>
<!-- .home -->
<?php get_footer();?>