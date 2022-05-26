<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>../css/style.css">
    
</head>
<body>
<div>
 <div class="user-log-and-signin">
 <div class="log-and-sin">
       <a href="http://localhost/webhoctap/login/" class="btn btn-primary">Login</a>
       <a href=" http://localhost/webhoctap/sign-in/" class="btn btn-danger">Sign in</a>
  </div>
 </div>
   <div id="header">
      <div class="search-post">
      <form class="search-form" action="<?php bloginfo('url'); ?>/" method="GET" role="form">
	     <div class="form-group">
       <input type="text" name="s" class="form-control search-bar" id="" placeholder="Từ khóa">
       
      
	</div>
	
     </form>
      </div>
        <div class="container-fluid main-nav">
            <div class="row ">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
    <div class="container-fluid ">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <a class="navbar-brand" href="<?php bloginfo('url') ?>"><i class="bi bi-house-door"></i></a>
       <?php
        wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'bs-example-navbar-collapse-1',
          'menu_class'      => 'navbar-nav mr-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
       ) );
        ?>
        </div>
           </nav>            
           </div>
        </div>
    </div> 
 <div class="container slide-carousel  ">   
 <div class="slide">
       <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner carousel-inner1 ">
  <div class="carousel-item active">
    <img src="https://f7-zpcloud.zdn.vn/4981051863948849371/4c8bc3b111f2d1ac88e3.jpg"  class="img-slider">
  </div>
  <div class="carousel-item">
    <img src="https://f6-zpcloud.zdn.vn/8937206753492418838/9f58b0626221a27ffb30.jpg"  class="img-slider">
  </div>
  <div class="carousel-item">
    <img src="https://f7-zpcloud.zdn.vn/8292830066895328447/3a8a3fb5edf62da874e7.jpg"  class="img-slider">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon back-button"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon next-button"></span>
</button>
</div>
    </div>
 </div>
  

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
         <div class="courses">
         <img class="courses-img " src="https://f6-zpcloud.zdn.vn/3777257158829563774/e8dcfef780bd40e319ac.jpg" >
         <div class="courses-name">
         <a href="<?php echo get_post_type_archive_link('sanpham' ); ?>">C++</a>
           </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="courses">
         <img class="courses-img " src="https://f6-zpcloud.zdn.vn/3777257158829563774/e8dcfef780bd40e319ac.jpg" >
         <div class="courses-name">
         <a href="<?php echo get_post_type_archive_link('sanpham' ); ?>">C++</a>
         </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="courses">
         <img class="courses-img " src="https://f6-zpcloud.zdn.vn/3777257158829563774/e8dcfef780bd40e319ac.jpg" >
         <div class="courses-name">
         <a href="<?php echo get_post_type_archive_link('sanpham' ); ?>">C++</a>
         </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="courses">
         <img class="courses-img " src="https://f6-zpcloud.zdn.vn/3777257158829563774/e8dcfef780bd40e319ac.jpg" >
         <div class="courses-name">
         <a href="<?php echo get_post_type_archive_link('sanpham' ); ?>">C++</a>
         </div>
         </div>
      </div>
    </div>
  </div>
</div>
<div>
  <a href="<?php echo get_post_type_archive_link('sanpham' ); ?>">sss</a>

</div>
</body>
</html>
