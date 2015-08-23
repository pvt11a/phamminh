<?php get_header(); ?>
<div class="row" style="border-bottom: 2px solid;">
    <div class="pvt_wrapper">
        <h2 style="padding: 10px; text-transform: uppercase;"><?php single_cat_title(); ?></h2>
    </div>
</div>
<div class="pvt_wrapper" id="main_cat">
<section id="content" role="main">
    <div class="row">
        <ul>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink() ?>"><li>
                <?php the_post_thumbnail() ?>
                <h4><?php echo get_post_meta($post -> ID,'Sku',true) ?></h4>
                <p><?php the_title() ?></p>
            </li></a>
        <?php endwhile; endif; ?>
            
        </ul>
    </div>
</section>
</div><!--end main_content-->

<?php get_footer(); ?>