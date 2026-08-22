    <footer class="site-footer">
        <div class="site-footer__contacts">
            <div class="site-footer__contact">
                <a href="mailto:kelly@casabygrace.com">kelly@casabygrace.com</a> <a href="tel:07737117584"> 07737 117584</a>
            </div>
            <div class="site-footer__contact">
                <a href="mailto:lisa@casabygrace.com">lisa@casabygrace.com</a> <a href="tel:07971981502">07971 981502</a>
            </div>
        </div>
        <nav class="site-footer__nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer-nav',
                'container' => false,
                'menu_class' => 'site-footer__nav-menu'
            ]);
            ?>
        </nav>
        <div class="site-footer__copyright">
            <?= sprintf('&copy; %s %s', date('Y'), get_bloginfo('name')) ?>
        </div>
    </footer>
<?php wp_footer() ?>
</body>
</html>
