<?php

namespace TGHP\CasaByGrace;

use TGHP\CasaByGrace\Blocks\BlockDefinerInterface;
//use TGHP\CasaByGrace\Blocks\CaseStudySingle;

class Blocks extends AbstractDefinesMetabox
{

    /**
     * Blocks constructor.
     *
     * @param CasaByGrace $casaByGrace
     */
    public function __construct(CasaByGrace $casaByGrace)
    {
        parent::__construct($casaByGrace);
        add_filter('block_categories_all', [$this, 'addGutenbergBlockCategories'], 10, 2);
        add_filter('allowed_block_types_all', [$this, 'setAllowedBlockTypes'], 10, 2);
    }

    protected function _getDefiners()
    {
        return [];
    }

    /**
     * Add additional gutenberg block categories
     *
     * @param $categories
     * @param $post
     * @return array
     */
    public function addGutenbergBlockCategories($categories, $post): array
    {
        return array_merge(
            [
                [
                    'slug' => 'casa-by-grace-blocks',
                    'title' => __('CasaByGrace Blocks', CasaByGrace::getTextDomain()),
                ],
            ],
            $categories
        );
    }

    /**
     * Control the allowed block types
     *
     * @param bool|string[] $allowedBlockTypes
     * @param \WP_Block_Editor_Context $context
     * @return string[]
     */
    public function setAllowedBlockTypes($allowedBlockTypes, $context): array
    {
        $definedBlocks = array_map(function ($block) {
            return "meta-box/{$block->getId()}";
        }, $this->_getDefiners());

        return [
            ...$definedBlocks,
            'core/paragraph',
            'core/heading',
            'core/list',
        ];
    }

}
