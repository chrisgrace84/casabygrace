<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<?= TGHPSite()->asset->outputCriticalCss() ?>
<?= TGHPSite()->asset->outputDeferedNonCriticalCss() ?>
<?= TGHPSite()->dev->outputHmrLoad() ?>
</head>
<body <?php body_class() ?>>
    <nav class="site-navigation">
        <div class="site-navigation__header">
            <div class="site-navigation__logo">
                <?php get_template_part('template-parts/site-logo', null, [
                    'logo_class' => 'site-navigation__logo'
                ]) ?>
            </div>
            <div class="site-navigation__toggle">
                <?= TGHPSite()->asset->outputAsset('images/icon-menu-close.svg') ?>
            </div>
        </div>

        <?php
        wp_nav_menu([
            'theme_location' => 'header-nav',
            'container' => false,
            'menu_class' => 'site-navigation__menu',
            'depth' => 1,
        ]);
        ?>
    </nav>

    <header class="site-header" data-gw-main-init='{ "site-header": {} }'>
        <?php get_template_part('template-parts/site-logo', null, [
            'logo_class' => 'site-header__logo'
        ]) ?>

        <nav class="site-header__nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'header-nav',
                'container' => false,
                'menu_class' => 'site-header__nav-menu',
                'depth' => 1,
            ]);
            ?>
        </nav>

        <div class="site-header__toggle">
            <?= TGHPSite()->asset->outputAsset('images/icon-menu-open.svg') ?>
        </div>
    </header>
