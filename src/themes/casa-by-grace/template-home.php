<?php
/**
 * Template Name: Home
 */
?>
<?php get_header() ?>

    <main class="site-main">

        <?php if (have_posts()): while (have_posts()): the_post(); ?>

            <section class="intro">
                <div class="intro__logo">
                    <?= TGHPSite()->asset->outputAsset('images/logo-sunrise.svg') ?>
                </div>
                <h1 class="intro__title">
                    <?= __('Welcome to The Windsor Tapestries'); ?>
                </h1>
                <h3 class="intro__subtitle">
                    <?= __('A Luxury 4 bedroom Holiday Home in Royal Windsor, Berkshire'); ?>
                </h3>
                <?php
                get_template_part('template-parts/cta-button', null, [
                    'button_class' => 'intro__button'
                ])
                ?>
            </section>

            <section class="text-with-image text-with-image--image-left text-with-image--bg-grey" id="about-us">
                <div class="text-with-image__text">
                    <h2>ALL ABOUT THE WINDSOR TAPESTRIES</h2>
                    <p>Immerse yourself in history and style by staying at The Windsor Tapestries, a stunning Grade II listed property in the heart of Old Windsor.</p>
                    <p>This unique home boasts a rich history dating back to 1876 when it served as part of the Old Windsor Tapestries factory, where Queen Victoria had her tapestries repaired. Conveniently located three miles from Legoland Windsor and eight miles from Lapland UK, The Windsor Tapestries provides an excellent holiday home for up to nine guests.</p>
                    <p>The property has undergone a full renovation, carefully designed to preserve the original character and historical significance of the building while also incorporating modern styles and amenities. The result is a perfect blend of old-world charm and contemporary comfort. You'll find beautifully restored period features such as high ceilings, intricate woodwork, sleek and stylish furnishings, state-of-the-art appliances, and modern conveniences such as Wi-Fi and a flat-screen TV.</p>
                    <p>The attention to detail throughout the property is evident in every room, with thoughtfully chosen decor and luxurious finishes creating a truly exceptional living space. From the comfortable bedrooms to the spacious living areas and well-equipped kitchen, every aspect of Windsor Tapestries has been designed to provide the ultimate comfort and convenience.</p>
                </div>
                <div class="text-with-image__image">
                    <?php $imageId = 12; ?>
                    <img src="<?= wp_get_attachment_url($imageId); ?>"
                         srcset="<?= TGHPSite()->util->getAttachmentSizesSrcset($imageId, TGHPSite()->asset->getAttachmentSizes()) ?>"
                         sizes="100vw, (min-width: 980px) 50w"
                         alt="<?= get_post_meta($imageId, '_wp_attachment_image_alt', true) ?>" />
                </div>
            </section>

            <section class="text-with-image">
                <div class="text-with-image__text">
                    <h2>What our guests love...</h2>
                    <ul>
                        <li>The property boasts a rich history dating back to 1876 when it was part of the Old Windsor Tapestries factory, where Queen Victoria had her tapestries repaired!</li>
                        <li>Fabulous location, just a 5-minute drive from Windsor town centre where you can find a variety of excellent amenities and visit Windsor Castle. Runnymede is a 5-minute drive in the opposite direction, where you can explore the history around the signing of The Magna Carta and enjoy beautiful river walks and boat rides.</li>
                        <li>The house has been carefully renovated to preserve its original character while incorporating modern amenities and stylish furnishings.</li>
                        <li>The property's Grade II listed status is a testament to its unique heritage and historical significance.</li>
                        <li>Self check-in service for ease and convenience.</li>
                        <li>The sofa bed in the living room can accommodate an additional two guests.</li>
                        <li>There is private parking for 2 cars.</li>
                        <li>On the door step of world renowned attractions such as Legoland, Windsor Castle, Ascot Racecourse, Guards Polo Club, Wentworth Golf Club, Michelin Star restaurants, 5* Spa’s, Country Walks, Riverside Walks, Cycle Routes…</li>
                    </ul>
                </div>
                <div class="text-with-image__image">
                    <?php $imageId = 27; ?>
                    <img src="<?= wp_get_attachment_url($imageId); ?>"
                         srcset="<?= TGHPSite()->util->getAttachmentSizesSrcset($imageId, TGHPSite()->asset->getAttachmentSizes()) ?>"
                         sizes="100vw, (min-width: 980px) 50w"
                         alt="<?= get_post_meta($imageId, '_wp_attachment_image_alt', true) ?>" />
                </div>
            </section>

            <section class="text-with-image text-with-image--image-left text-with-image--bg-grey" id="facilities">
                <div class="text-with-image__text">
                    <h2>Facilities</h2>
                    <p>Step into the spacious living room where you'll find ample space for lounging and relaxing. Enjoy the flat-screen Smart TV with a range of apps offering a selection of movies and channels for your entertainment. Or you may wish to unplug, grab a blanket and curl up with a book on the cosy chesterfield sofa.</p>
                    <p>There are 2 stylishly decadent bathrooms for you to soak and unwind, with a built-in water softening system so you can enjoy the benefits of softened water on your skin. Indulge in the luxurious freestanding bathtub or large walk-in showers with complimentary Neal’s Yard products and fluffy towels.</p>
                    <p>All the bedrooms have opulent velvet beds with luxury mattresses and plump pillows to ensure for the most wonderful nights sleep!</p>
                    <p>The private courtyard garden features outdoor furniture for al-fresco dining and a freestanding coal BBQ for those summer evenings.</p>
                </div>
                <div class="text-with-image__image">
                    <?php $imageId = 28; ?>
                    <img src="<?= wp_get_attachment_url($imageId); ?>"
                         srcset="<?= TGHPSite()->util->getAttachmentSizesSrcset($imageId, TGHPSite()->asset->getAttachmentSizes()) ?>"
                         sizes="100vw, (min-width: 980px) 50w"
                         alt="<?= get_post_meta($imageId, '_wp_attachment_image_alt', true) ?>" />
                </div>
            </section>

            <section class="text-with-image" id="location">
                <div class="text-with-image__text">
                    <h2>Location</h2>
                    <p>The Windsor Tapestries is located in the charming village of Old Windsor, just a short distance from the historic town of Windsor. Situated in the heart of the picturesque Thames Valley, this location is perfect for exploring the beauty and history of the region.</p>
                    <p>Old Windsor is a quaint and peaceful village steeped in history and surrounded by stunning countryside. From the property, you can take a leisurely stroll along the banks of the River Thames, which winds its way through the village and offers spectacular views of the surrounding landscape.</p>
                    <p>Just a few miles away is the bustling town of Windsor, which is famous for its magnificent castle, which has been the residence of the British Royal Family for over 900 years. Visitors can take a tour of the castle and explore its fascinating history or simply wander through the charming streets of the town, which are lined with boutique shops, cafes, and restaurants.</p>
                </div>
                <div class="text-with-image__image">
                    <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJI95iYFh7dkgRPMD4toK8e0o&key=AIzaSyDOepOVzqiUNR9xcIQBjtxLTPmhCqAEv-0"></iframe>
                </div>
            </section>

            <section class="text-with-image text-with-image--image-left text-with-image--bg-grey" id="things-to-do">
                <div class="text-with-image__text">
                    <h2>Things To Do</h2>
                    <p>Other nearby attractions include Legoland Windsor, a popular theme park that is perfect for families with young children, and Lapland UK, a magical winter wonderland that offers a range of festive activities and experiences.</p>
                    <p>For those who enjoy outdoor pursuits, the Windsor Great Park is just a short walking distance away, offering acres of stunning woodland, gardens, and lakes to explore. The park is also home to the famous Savill Garden, which boasts a stunning collection of rare plants and flowers from all over the world.</p>
                    <p>The location of the house is ideal for those who want to explore the beauty and history of the Thames Valley region while also enjoying the comfort and luxury of a beautifully renovated holiday home. Whether you're looking for a peaceful retreat or a fun-filled family adventure, this property offers the perfect base for your next holiday.</p>
                    <p>This scenic location is just a stone’s throw from historic Windsor Castle and Runnymede where the signing of The Magna Carta took place. It’s ideally placed for all the cultural landmarks, amenities, and open spaces the local area has to offer.</p>
                </div>
                <div class="text-with-image__image">
                    <?php $imageId = 29; ?>
                    <img src="<?= wp_get_attachment_url($imageId); ?>"
                         srcset="<?= TGHPSite()->util->getAttachmentSizesSrcset($imageId, TGHPSite()->asset->getAttachmentSizes()) ?>"
                         sizes="100vw, (min-width: 980px) 50w"
                         alt="<?= get_post_meta($imageId, '_wp_attachment_image_alt', true) ?>" />
                </div>
            </section>

            <section class="text-with-image" id="getting-around">
                <div class="text-with-image__text">
                    <h2>Getting around</h2>
                    <p>5 minute drive to central Windsor (3km) where you will find an array of buzzing shops, pubs, cafes and restaurants.</p>
                    <p>5 minute drive or 15 minute walk to the Great Windsor Park, Runnymede Pleasure Ground and the River Thames with a wide range of beautiful open spaces to explore as well as excellent transport links for journeys further afield. You can walk along the Thames Path all the way into Windsor town centre (3km), the Windsor Great Park or to Runnymede.</p>
                    <p>There are three local train stations nearby: Datchet (2.6km), Windsor & Eton Central, Windsor & Eton Riverside. A short taxi ride would be recommended.</p>
                    <p>The M25, M4 and M3 are near by for journeys into London, the south and west. Heathrow Airport (11km) is just ten minutes away giving you easy access to travel almost anywhere.</p>
                </div>
                <div class="text-with-image__image">
                    <?php $imageId = 30; ?>
                    <img src="<?= wp_get_attachment_url($imageId); ?>"
                         srcset="<?= TGHPSite()->util->getAttachmentSizesSrcset($imageId, TGHPSite()->asset->getAttachmentSizes()) ?>"
                         sizes="100vw, (min-width: 980px) 50w"
                         alt="<?= get_post_meta($imageId, '_wp_attachment_image_alt', true) ?>" />
                </div>
            </section>

            <?php if ($images = TGHPSite()->metabox->getSingleMetafieldValue('hero_images')): ?>
                <section class="hero-slider">
                    <div class="hero-slider__images" data-gw-main-init='{ "hero-slider": {} }'>
                        <div class="swiper-wrapper">
                            <?php foreach ($images as $image) : ?>
                                <div class="hero-slider__images-item swiper-slide">
                                    <img src="<?= $image['full_url'] ?>"
                                         srcset="<?= TGHPSite()->util->getAttachmentSizesSrcset($image['ID'], ['xxs-uncropped', 'xs-uncropped', 's-uncropped', 'm-uncropped', 'l-uncropped', 'xl-uncropped', 'xxl-uncropped', 'xxxl-uncropped', 'xxxxl-uncropped']) ?>"
                                         sizes="100vw, (max-width: 980px) 80vw"
                                         alt="<?= $image['alt'] ?>">
                                </div>
                            <?php endforeach ?>
                        </div>
                        <div class="hero-slider__images-pagination"></div>
                    </div>
                </section>
            <?php endif ?>

        <?php endwhile; endif; ?>

    </main>

<?php get_footer() ?>
