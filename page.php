<?php get_header(); ?>
<div class="pvt_wrapper" id="main_content">
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-3" id="sidebar_left">
            <h3><?php the_title() ?></h3>
        </div><!--end sidebar_left-->
        <div id="primary" class="col-md-9" style="border-left: 1px solid;">
            <section id="content" role="main">
                    <p>
                       <?php the_content() ?>
                    </p>
            </section>
        </div><!--end primary-->
    <?php endwhile; endif; ?>
    </div>
</div><!--end main_content-->
<?php get_footer(); ?>