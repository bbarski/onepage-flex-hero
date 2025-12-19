<footer class="footer">
    <div class="footer__container">
        <div class="footer__up">
            <!-- Widgety stopki -->
            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="footer__item">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer__down">
            <span>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
