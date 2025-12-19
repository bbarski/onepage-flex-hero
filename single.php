<?php get_header(); ?>

<main class="content content--active">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="content__head" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <div class="head__container">
                <div class="head__info">
                    <div class="head__description">
                        <span><?php the_excerpt(); ?></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="content__description">
            <div class="description__container">
                <div class="description__header">
                    <div class="description__title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="description__underline">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="description__footer">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
