<?php

namespace TGHP\CasaByGrace\PostType;

use TGHP\CasaByGrace\AbstractCasaByGrace;
use TGHP\CasaByGrace\CasaByGrace;

abstract class AbstractPostType extends AbstractCasaByGrace implements PostTypeDefinerInterface
{
    /**
     * Post type code
     *
     * @var null|string
     */
    protected $postTypeCode = null;

    /**
     * Disable gutenberg for this post type
     *
     * @var bool
     */
    protected $disableGutenberg = false;

    /**
     * AbstractPostType constructor.
     *
     * @param CasaByGrace $casaByGrace
     * @throws \Exception
     */
    public function __construct(CasaByGrace $casaByGrace)
    {
        parent::__construct($casaByGrace);

        // Ensure a post type code is set in child classes
        if (empty($this->postTypeCode)) {
            throw new \Exception(__('Must define post type code.', CasaByGrace::getTextDomain()));
        }
    }

    /**
     * Get post type code
     *
     * @return string
     */
    public function getPostTypeCode(): string
    {
        return $this->postTypeCode;
    }

}
