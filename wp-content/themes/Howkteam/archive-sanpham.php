<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_directory')?>../css/style2.css">
  <title></title>
</head>
<body>
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
    <div class="content">
      <div class="container">
        <div class="course-name"> <h1>Lập trình C++</h1> </div>
        <div class="course-point-to">
        <div class="learn-for"><h4>Ứng dụng của C++</h4></div>
        <div class="row">
          <div class="col-lg-6"> 
        <div class="check-point"><i class="bi bi-check-circle-fill"></i> Games. C++ là sự lựa chọn tốt để phát triển các nền tảng game 3D.</div>
        <div class="check-point"><i class="bi bi-check-circle-fill"></i> Ứng dụng có giao diện người dùng (GUI)</div>
        <div class="check-point"><i class="bi bi-check-circle-fill"></i> Trình duyệt web</div>
          </div>
          <div class="col-lg-6">
        <div class="check-point"><i class="bi bi-check-circle-fill"></i> Ứng dụng tính toán và đồ họa</div>
        <div class="check-point"><i class="bi bi-check-circle-fill"></i> Phần mềm quản trị cơ sở dữ liệu</div>
        <div class="check-point"><i class="bi bi-check-circle-fill"></i> Hệ điều hành</div>
          </div>
        </div>
        <div class="course-content">
          <div class="course-content-name"><h4>Nội dung bài học</h4></div>
          <div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
        <h6> Giới thiệu </h6>
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
      <div class="card-body">
      <?php 
  $args = array(
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'gioi-thieu-ve-c',
    'post_type'      => 'sanpham'
  );
  $the_query = new WP_Query( $args );
?>
<?php if( $the_query->have_posts() ): ?>
<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="course-link">
<a href="<?php the_permalink(); // lấy link của bài viết ?>">
			<?php the_title(); // lấy tiêu đề ?>
</a>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
       <h6>  Kiến thức cơ bản về C++ </h6>
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
      <?php 
  $args = array(
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'kien-thuc-co-ban-ve-c',
    'post_type'      => 'sanpham'
  );
  $the_query = new WP_Query( $args );
?>
<?php if( $the_query->have_posts() ): ?>
<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="course-link">
<a href="<?php the_permalink(); // lấy link của bài viết ?>">
			<?php the_title(); // lấy tiêu đề ?>
</a>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
      <h6> Tìm hiểu về hàm (Functions) và file </h6>
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
      <?php 
  $args = array(
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'function-c',
    'post_type'      => 'sanpham'
  );
  $the_query = new WP_Query( $args );
?>
<?php if( $the_query->have_posts() ): ?>
<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="course-link">
<a href="<?php the_permalink(); // lấy link của bài viết ?>">
			<?php the_title(); // lấy tiêu đề ?>
</a>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
  
</div>
        </div>
        </div>
      </div>
    </div>
</body>
</html>