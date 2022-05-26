<?php
/* Template Name: Register */
?>
<div class="function-register">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
(function($){  
	$(document).ready(function(){
		var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
		$('#hk-registerform').submit(function (e) { 
			e.preventDefault();
			var data = {};
			var ArrayForm = $(this).serializeArray();
			$.each(ArrayForm, function() {
				data[this.name] = this.value;
			});
			
			$.ajax({
				type: "POST",
				url: ajaxUrl,
				data: {
					'action': 'RegisterAction',
					'userData': data
				},
				dataType: "html",
				beforeSend: function () {
				},
				success: function (response) {
					$('#hk-message').html(response);
					if (response == 'success' ) {
						$("#hk-registerform")[0].reset();
						$('#hk-message').hide();
						$('#hk-success').show();
					}
				}
			});
		});
	});
})(jQuery);
</script>
</div>

<main id="site-content">
    <div class="section-inner">

        <?php
        $home_url = get_home_url();
        if ( is_user_logged_in() ) {

            echo 'Bạn đã đăng nhập rồi. <a href="'.wp_logout_url($home_url).'">Đăng xuất</a> ?';

        } else {
        ?>
            <h1>Đăng ký</h1>
            <hr>
            <form id="hk-registerform" action="<?php echo get_home_url() . '/dang-ky'; ?>">
                <?php wp_nonce_field( 'form_register' ); ?>
                <div id="hk-message"></div>
                <p style="display:none" id="hk-success">
                    Đăng ký người dùng thành công. Nhấp vào <a href="/dang-nhap">đây</a> để đăng nhập.
                </p>
                <p>
                    <input type="text" name="username" id="username" placeholder="Tên đăng nhập">
                </p>
                <p>
                    <input type="email" name="email" id="email" placeholder="Email">
                </p>
                <p>
                    <input type="password" name="password" id="password" placeholder="Mật khẩu">
                </p>
                <p>
                    <input type="password" name="repassword" id="repassword" placeholder="Xác nhận mật khẩu">
                </p>
                <p class="text-center mb-0">
                    <button class="form-submit" type="submit">Đăng ký</button>
                </p>
            </form>

        <?php } ?>

    </div>
</main>


