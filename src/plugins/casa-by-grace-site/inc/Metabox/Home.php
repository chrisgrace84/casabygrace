<?php

namespace TGHP\CasaByGrace\Metabox;

use TGHP\CasaByGrace\Metabox;

class Home extends AbstractMetabox implements MetaboxDefinerInterface
{
    /**
     * {@inheritDoc}
     */
    public function define(): array
    {

        $metaBoxes[] = [
            'id' => Metabox::generateKey('hero_slider'),
            'title' => 'Hero slider',
            'post_types' => ['page'],
            'include' => [
                'template' => ['template-home.php'],
            ],
            'revision' => true,
            'fields' => [
                [
                    'id' => Metabox::generateKey('hero_images'),
                    'name' => 'Images',
                    'type' => 'image_advanced',
                ],
            ],
        ];

        return $metaBoxes;
    }
}
