<?php get_header(); ?>

<main class="content <?php echo is_front_page() ? '' : 'content--active'; ?>">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="content__head" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <div class="head__container">
                <div class="head__info">
                    <div class="head__description">
                        <span><?php the_excerpt(); ?></span>
                    </div>
                    <div class="head__button">
                        <a href="<?php the_permalink(); ?>"><span>Czytaj więcej</span></a>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>

    <!-- Sekcja Reviews -->
    <section class="content__reviews">
        <div class="reviews__container">
            <div class="reviews__header">
                <div class="reviews__title">
                    <h1>Opinie</h1>
                </div>
                <div class="reviews__navigation">
                    <span><i class="fas fa-chevron-left"></i></span>
                    <span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="reviews__underline">
                <span></span>
                <span></span>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Tutaj dynamicznie dodawaj opinie z WordPress -->
                </div>
            </div>
        </div>
    </section>

    <!-- Sekcja Related -->
    <section class="content__related">
        <div class="related__container">
            <div class="related__header">
                <div class="related__title">
                    <h1>Powiązane</h1>
                </div>
                <div class="related__navigation">
                    <span><i class="fas fa-chevron-left"></i></span>
                    <span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="related__underline">
                <span></span>
                <span></span>
            </div>
            <div class="swiper-container-related">
                <div class="swiper-wrapper">
                    <!-- Tutaj dynamicznie dodawaj powiązane posty z WordPress -->
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
