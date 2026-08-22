<?php get_header() ?>

    <main class="site-main">

        <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <div class="page-default">
            <h1><?php the_title(); ?></h1>

            <div class="page-default__body">
                <div class="page-default__content">
                    <?php the_content(); ?>
                    <div class="page-default__info">
                        <p><a href="mailto:kelly@casabygrace.com">kelly@casabygrace.com</a> <a href="tel:07737117584">&nbsp; 07737 117584</a></p>
                        <p><a href="mailto:lisa@casabygrace.com">lisa@casabygrace.com</a> <a href="tel:07971981502">&nbsp; 07971 981502</a></p>
                    </div>
                </div>
                <div class="page-default__meet">
                    <?php if (get_the_ID() === 32): ?>
                        <div class="page-default__image">
                            <?php $imageId = 40; ?>
                            <img src="<?= wp_get_attachment_url($imageId); ?>"
                                 srcset="<?= TGHPSite()->util->getAttachmentSizesSrcset($imageId, TGHPSite()->asset->getAttachmentSizes()) ?>"
                                 sizes="100vw, (min-width: 980px) 50w"
                                 alt="<?= get_post_meta($imageId, '_wp_attachment_image_alt', true) ?>" />
                        </div>
                    <?php endif ?>
                </div>
            </div>

        </div>

        <?php endwhile; endif; ?>

    </main>

<?php get_footer() ?>
