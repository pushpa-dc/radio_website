<?php $cats=array( array(1,"Rajniti"), array(1,"Two"), array(1,"Three"));
foreach($cats as $cat):?>
<div class="col-md-4">
<div class="cat-title"><?php echo $cat[1];?></div>
<?php $cat=array('id'=>1,'name'=>'One','design'=>'d1'); include( locate_template( 'templates/d1.php') ); ?>
</div>
<?php endforeach;?>