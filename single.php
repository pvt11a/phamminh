<?php get_header(); ?>
<section id="content" role="main">
<div class="row" style="border-bottom: 2px solid;">
    <div class="pvt_wrapper">
        <h2 style="padding: 10px;"><?php is_en("DETAILS","CHI TIẾT") ?></h2>
    </div>
</div>
<div class="pvt_wrapper" id="single_product">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
        <div class="col-sm-4">
        <div class="easyzoom easyzoom--adjacent">
        <?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

?>
            <a href="<?php echo $thumb_url[0] ?>">
                <?php the_post_thumbnail() ?>
            </a>
        </div>
        </div>
        <div class="col-sm-8">
            <div>
                <h3><?php the_title() ?></h3>
                <h4><?php is_en("SKU","Mã sản phẩm") ?> : <?php echo get_post_meta($post -> ID,'Sku',true) ?></h4>
                <p>
                    <?php the_content() ?>
                </p>
            </div>
            <div>
                <h4>Hotline : 0903.782.220 – 0938.432.220</h4>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
</div><!--end single_product-->
</section>
<?php get_footer(); ?>