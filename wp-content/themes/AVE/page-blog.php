<?php
/*
Template Name: Blog
*/
get_header();
?>

<div class="titlebar titlebar-sm scheme-light text-center"
     data-parallax="true"
     data-parallax-options='{ "parallaxBG": true }'
     style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/demo/bg/bg-31.jpg);">

    <div class="titlebar-inner">
        <div class="container titlebar-container">
            <div class="row titlebar-container">
                <div class="titlebar-col col-md-12">
                    <h1 data-fittext="true"
                        data-fittext-options='{ "maxFontSize":80,"minFontSize":32 }'>
                        BLOG
                    </h1>

                    <a class="titlebar-scroll-link" href="#content">
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="content" class="content mt-30">

    <section class="vc_row">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-12">

                    <div class="liquid-blog-posts">
                        <div class="liquid-blog-grid row" data-liquid-masonry="true">

                            <?php
                            $featured_id = 0;
                            $featured_query = new WP_Query(array(
                                'post_type'      => 'post',
                                'posts_per_page' => 1,
                            ));

                            if ($featured_query->have_posts()) :
                                while ($featured_query->have_posts()) :
                                    $featured_query->the_post();
                                    $featured_id = get_the_ID();
                            ?>

                                    <div class="lqd-column col-md-6 masonry-item">
                                        <article class="liquid-lp liquid-blog-item round h-450">

                                            <figure class="liquid-lp-media round">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('large'); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/demo/blog/blog-placeholder.jpg"
                                                             alt="<?php the_title(); ?>">
                                                    <?php endif; ?>
                                                </a>
                                            </figure>

                                            <div class="liquid-blog-item-inner round">
                                                <a href="<?php the_permalink(); ?>" class="liquid-overlay-link">
                                                    <?php the_title(); ?>
                                                </a>
                                                <h2 class="h3 font-weight-bold">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>
                                            </div>

                                        </article>
                                    </div>

                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>

                            <?php
                            $grid_query = new WP_Query(array(
                                'post_type'    => 'post',
                                'post__not_in' => array($featured_id),
                            ));

                            if ($grid_query->have_posts()) :
                                while ($grid_query->have_posts()) :
                                    $grid_query->the_post();
                            ?>

                                    <div class="lqd-column col-md-3 col-sm-6 masonry-item">
                                        <article class="liquid-lp liquid-blog-item round h-450">

                                            <figure class="liquid-lp-media round">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('medium'); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/demo/blog/blog-placeholder.jpg"
                                                             alt="<?php the_title(); ?>">
                                                    <?php endif; ?>
                                                </a>
                                            </figure>

                                            <div class="liquid-blog-item-inner round">
                                                <a href="<?php the_permalink(); ?>" class="liquid-overlay-link">
                                                    <?php the_title(); ?>
                                                </a>
                                                <h2 class="h5 font-weight-bold">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>
                                            </div>

                                        </article>
                                    </div>

                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>

                        </div><!-- /.liquid-blog-grid -->
                    </div><!-- /.liquid-blog-posts -->

                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
