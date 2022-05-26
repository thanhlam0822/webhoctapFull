<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=417207013742920&autoLogAppEvents=1" nonce="XHbIM9pM"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>../css/style3.css">
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="cLvi7cmQ"></script>
</head>
<body>

	<div class="single-detail">
		<div class="container">
		<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
		<h1> <?php the_title(); ?> </h1> 
	    <?php the_content(); ?>
		
		<?php previous_post_link(); ?>  ||  
		<?php next_post_link(); ?>
		<?php comments_template(); ?>
		<!-- Chatra {literal} -->
<script>
    (function(d, w, c) {
        w.ChatraID = 'KSXfQjQ6hjg6MpnLh';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->
		
<?php endwhile; ?>
<?php endif; ?>
		</div>
	</div>
</body>
</html>