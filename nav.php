<?php $items=wp_get_menu_array('main');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light my-nav py-3 col">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="main-menu">
    <ul class="navbar-nav mr-auto">
    <?php foreach($items as $item):?>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo $item['url'];?>"><?php echo $item['title'];?>
        <?php if($item['children']):?>
        <a data-toggle="dropdown"><i style="font-size:24px" class="fa">&#xf0d7;</i></a>
        <div class="dropdown-menu">
          <?php foreach($item['children'] as $sitem):?>
            <a class="dropdown-item" href="<?php echo $sitem['url'];?>"><?php echo $sitem['title'];?></a>
          <?php endforeach;?>
        </div>
        <?php endif;?>
        </a>
      </li>
      <?php endforeach;?>
    </ul>
  </div>
</nav>