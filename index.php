<?php get_header(); ?>
<div id="pvt_slider">
    <ul id="slider">
    <?php 
        global $post;
        $args = array('numberposts'=>7, 'cat'=>98, 'orderby'=>'ASC');
        $random_posts = get_posts($args);
        foreach($random_posts as $post) : setup_postdata($post); ?>
        <li><?php the_post_thumbnail() ?></li>
    <?php endforeach; wp_reset_query();?>
    </ul>
</div><!--end pvt_slider-->
<div class="pvt_wrapper">
    <div class="row" id="new_col">
        <div class="col-sm-4" >
            <h2 style="padding: 10px 0px;text-transform: uppercase;"><?php is_en("MEN collection","SƯU TẬP CHO NAM") ?></h2>
        </div>
        <div class="col-sm-8" style="padding: 17px 0px;text-align: center;">
            <p><?php is_en("We always update our collections. Check it out here.","Chúng tôi luôn cập nhật những sản phẩm mới nhất cho bộ sưu tập của mình") ?></p>
            <a href="#"><button type="button" class="btn btn-primary"><?php is_en("READ MORE","Tham khảo thêm") ?></button></a>
        </div>
    </div><!--end new_col-->
</div><!--end  pvt_wrapper-->
<div class="lg_container" id="loaivai">
    <div class="pvt_wrapper inner" >
        <div class="text">
            <h2 style="text-transform: uppercase;"><?php is_en("Fabrics","LOẠI VẢI") ?></h2>
            <p><?php is_en("Fabrics play a very important role in creating exquisitely refined and comfortable to wear monk","Chất liệu vải giữ một vai trò rất quan trọng trong việc tạo nên tinh sắc sảo và sư thoải mái khi mặc") ?></p>
            <a href="<?php get_site_url(); ?><?php is_en("fabrics","chat-lieu-vai") ?>"><button type="button" class="btn btn-success"><?php is_en("READ MORE","Tham khảo thêm") ?></button></a>
        </div>
    </div>
</div><!--end  loaivai-->
<div class="pvt_wrapper">
    <div class="row" id="gioithieu">
        <div class="col-sm-4" >
            <h2 style="padding: 10px 0px;"><?php is_en("ABOUT US","GIỚI THIỆU") ?></h2>
        </div>
        <div class="col-sm-8" style="padding: 17px 0px;text-align: center;">
            <p><?php is_en(" Phạm Minh Tailor  132, Pasteur, Bến Nghé, District 1, Hồ Chí Minh "," Nhà may Phạm Minh  132, Pasteur, Phường Bến Nghé, Quận 1, Hồ Chí Minh ") ?></p>
            <a href="<?php get_site_url(); ?><?php is_en("about-us","gioi-thieu") ?>"><button type="button" class="btn btn-primary"><?php is_en("READ MORE","Tham khảo thêm") ?></button></a>
        </div>
    </div><!--end gioithieu-->
</div><!--end  pvt_wrapper-->
<div class="lg_container" id="xemkieu">
    <div class="pvt_wrapper inner" >
        <div class="text">
            <h2><?php is_en("STYLES","XEM KIỂU") ?></h2>
            <p>Bàn tay khéo léo của người thợ vải tạo nên</p>
            <a href="#"><button type="button" class="btn btn-success"><?php is_en("READ MORE","Tham khảo thêm") ?></button></a>
        </div>
    </div>
</div><!--end  xemkieu-->
<div class="lg_container" id="camnang">
    <div class="pvt_wrapper inner" >
        <div class="text">
            <h2><?php is_en("DRESS CODE","CẨM NANG") ?></h2>
            <p><?php is_en("The first rule of fashion: Suit yourself.","Quy luật đầu tiên của thời trang là phải ăn mặc làm sao cho hợp với bạn.") ?></p>
            <a href="#"><button type="button" class="btn btn-info"><?php is_en("READ MORE","Tham khảo thêm") ?></button></a>
        </div>
    </div>
</div><!--end  camnang-->
<div class="lg_container" id="suitman">
    <div class="pvt_wrapper inner" >
        <div class="text">
            <h2><?php is_en("MEASURING","CÁCH ĐO") ?></h2>
            <p><?php is_en("We will show you how to take measurement by yourself","Đây là hướng dẫn cách đo để Quý Khách có thể tự đo trang phục") ?></p>
            <a href="#"><button type="button" class="btn btn-info"><?php is_en("READ MORE","Tham khảo thêm") ?></button></a>
        </div>
    </div>
</div><!--end  suitman-->
<div class="pvt_wrapper" id="top_footer">
    <p><?php is_en("Telephone: Ho Chi Minh City: 08-0000 0000 <br/>Email: info@phamminh.com ","Điện thoại: Ho Chi Minh City: 08-0000 0000 <br/>Email: info@phamminh.com ") ?></p>
    <p><?php is_en("Opening time: Weekday from 9AM - 7PM, Sunday from 10AM - 7PM.","Giờ mở cửa : Trong tuần từ 9AM - 7PM, Chủ nhật từ 10AM - 7PM.") ?></p>   
     <?php $rand = rand(1,3); echo $rand ?>
     

  <?php if($rand == 1){ ?>
      <audio controls="true" autoplay="true">
        <source src="http://localhost/phamminh/wp-content/uploads/2015/05/Nhac%20Thien%20hay%20-%20nhac%20khong%20loi.mp3" type="audio/mpeg" />
     </audio> 
  
  <?php }else if($rand == 2) { ?>
    <audio controls="true" autoplay="true">
        <source src="http://localhost/phamminh/wp-content/uploads/2015/05/Thoi%20Gian%20Se%20Tra%20Loi%20Remix%20-%20Tien%20Cookie%20ft%20JustaTee%20ft%20BigDaddy.mp3" type="audio/mpeg" />
     </audio>
   
  <?php }else if($rand == 3) { ?> 
    <audio controls="true" autoplay="true">
        <source src="http://localhost/phamminh/wp-content/uploads/2015/05/Kh%C3%B4ng%20Ph%E1%BA%A3i%20D%E1%BA%A1ng%20V%E1%BB%ABa%20%C4%90%C3%A2u%20-%20B%C3%A0i%20H%C3%A1t%20HOT%20S%C6%A1n%20T%C3%B9ng%20MTP%20Nh%E1%BA%A1c%20320kbps.mp3" type="audio/mpeg" />
     </audio>
  <?php } ?>
  
</div>
<?php get_footer(); ?>