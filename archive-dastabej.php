<?php 
$rows = get_field('all_member');
if( $rows ) {
    echo '<ul class="slides">';
    foreach( $rows as $row ) {
        $image = $row['name'];
        echo '<li>';
            echo $image;
          
        echo '</li>';
    }
    echo '</ul>';
}?>