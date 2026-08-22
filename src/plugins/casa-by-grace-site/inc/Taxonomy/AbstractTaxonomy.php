<?php

namespace TGHP\CasaByGrace\Taxonomy;

use TGHP\CasaByGrace\AbstractCasaByGrace;
use TGHP\CasaByGrace\CasaByGrace;

abstract class AbstractTaxonomy extends AbstractCasaByGrace implements TaxonomyDefinerInterface
{
    /**
     * Taxonomy code
     *
     * @var null|string
     */
    protected $taxonomyCode = null;

    /**
     * Disable gutenberg for this taxonomy
     *
     * @var bool
     */
    protected $disableGutenberg = false;

    /**
     * Post type for the taxonomy
     *
     * @var null|string
     */
    protected $postTypeCode = null;

    /**
     * AbstractTaxonomy constructor.
     *
     * @param CasaByGrace $casaByGrace
     * @throws \Exception
     */
    public function __construct(CasaByGrace $casaByGrace)
    {
        parent::__construct($casaByGrace);

        // Ensure a taxonomy code is set in child classes
        if (empty($this->getTaxonomyCode())) {
            throw new \Exception(__('Must define taxonomy code.', CasaByGrace::getTextDomain()));
        }
    }

    /**
     * Get taxonomy code
     *
     * @return string
     */
    public function getTaxonomyCode(): string
    {
        return $this->taxonomyCode;
    }

    /**
     * Get associated post type code
     *
     * @return string
     */
    public function getAssociatedPostTypeCode(): string
    {
        return $this->postTypeCode;
    }

}
