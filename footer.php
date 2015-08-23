<footer class="row">
<div class="pvt_wrapper">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li><a href="#">Người sáng lập</a></li>
                    <li><a href="#">Vì sao nên chọn </a></li>
                    <li><a href="#">Phương châm</a></li>
                    <li><a href="#">Địa chỉ</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li><a href="#">Kiểu mới</a></li>
                    <li><a href="#">Loại vải </a></li>
                    <li><a href="#">Bộ vét</a></li>
                    <li><a href="#">Áo vét</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li><a href="#">Các đo</a></li>
                    <li><a href="#">Hỏi đáp</a></li>
                    <li><a href="#">Giá cả</a></li>
                    <li><a href="#">Trò chuyện</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        
    </div>
</div>
</footer>
<div class="row" id="bot_ft">
    <h4>&copy;Phamminh 2015</h4>
</div>
<script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/style.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/easyzoom.js"></script>
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Get an instance API
		var api = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		// Setup thumbnails example
		$(".thumbnails").on("click", "a", function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api.swap($this.data("standard"), $this.attr("href"));
		});
	</script>
<script src="<?php echo bloginfo('template_directory'); ?>/plugin/skdslider.js"></script>

<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#slider').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'autoSlide':true,'animationType':'fading'});
			
			jQuery('#responsive').change(function(){
			  $('#pvt_slider').width(jQuery(this).val());
			});
			
		});
</script>
</body>
</html>