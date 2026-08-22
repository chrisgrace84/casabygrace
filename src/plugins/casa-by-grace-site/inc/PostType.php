<?php

namespace TGHP\CasaByGrace;

use TGHP\CasaByGrace\PostType\PostTypeDefinerInterface;

class PostType extends AbstractDefines
{

    /**
     * @var array
     */
    protected $postTypes;

    public function __construct(CasaByGrace $casaByGrace)
    {
        parent::__construct($casaByGrace);

        add_action('init', [$this, 'addPostTypes']);
    }

    protected function _getDefiners()
    {
        return [
            // Definer classes here
        ];
    }

    protected function _processDefiner(DefinerInterface $definer)
    {
        return $definer;
    }

    /**
     * Actually add post types that come from our definers
     *
     * @param $postTypes
     * @return array
     */
    public function addPostTypes($postTypes)
    {
        foreach ($this->definerResults as $definer) {
            if ($definer instanceof PostTypeDefinerInterface) {
                register_post_type($definer->getPostTypeCode(), $definer->define());
            }
        }
    }

}
