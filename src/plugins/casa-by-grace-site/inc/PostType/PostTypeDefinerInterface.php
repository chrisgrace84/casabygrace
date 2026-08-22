<?php

namespace TGHP\CasaByGrace\PostType;

use TGHP\CasaByGrace\DefinerInterface;

interface PostTypeDefinerInterface extends DefinerInterface
{

    /**
     * Return the post type code
     *
     * @return string
     */
    public function getPostTypeCode(): string;

}
