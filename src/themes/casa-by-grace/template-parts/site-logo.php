<?php $logoClass = $args['logo_class'] ?? false; ?>

<a href="<?= esc_url(home_url('/')) ?>" title="<?= esc_html(get_bloginfo('name')) ?>" rel="home" class="<?= $logoClass ?>">
    <?= TGHPSite()->asset->outputAsset('images/logo.svg') ?>
</a>