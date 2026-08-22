<?php

namespace TGHP\CasaByGrace;

abstract class AbstractCasaByGrace
{
    /**
     * @var CasaByGrace
     */
    protected $casaByGrace;

    /**
     * AbstractCasaByGrace constructor.
     *
     * @param CasaByGrace $casaByGrace
     */
    public function __construct(
        CasaByGrace $casaByGrace
    ) {
        $this->casaByGrace = $casaByGrace;
    }
}
