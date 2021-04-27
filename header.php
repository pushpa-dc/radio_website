<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?=wp_title('&laquo;',true,'right')?>
    <?= bloginfo('name')?>
  </title>
  <?php wp_head();?>
</head>

<body>
  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=401514826619301";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class="container-fluid py-2" style="background:#23408e">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="nav align-items-center h-100">
            <li class="nav-item justify-content-start">
              <a class="nav-link radio-heading" href="#"><i class="bi bi-volume-up text-white"></i> रेडियो नारायणी १०३.८
                मेगाहर्ज</a>
            </li>

          </ul>
        </div>
        <div class="col-md-6 justify-content-end position-relative">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-justify fa-2x  text-white"></i></a>
            </li>
            <li class="nav-item" id="search">
              <a class="nav-link" href="#"> <i class="bi bi-search fa-2x text-white"></i>
              </a>

            </li>
            <form class="form-inline search-form my-2 my-lg-0" id="sform">
            <input class="form-control mr-2" name="s" type="search" value="<?php the_search_query(); ?>" placeholder="Search" aria-label="Search">

              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="container-fluid" style="background:#294cab">
    <div class="container">
      <div class="row py-4">
        <div class="col-sm-4">
        <a href="/">
          <?php the_custom_logo();?>
          <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="Logo">
        </a>
        </div>
        <div class="col-sm-8">
          <?php dynamic_sidebar( 'logo-right' );?>
        </div>
      </div>
      <div class="row">
        <?php get_template_part('nav');?>
      </div>
    </div>
  </div>
  <?php //the_field('show_banner', 'option'); ?>