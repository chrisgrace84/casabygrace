<?php

namespace TGHP\CasaByGrace\Metabox;

use TGHP\CasaByGrace\AbstractCasaByGrace;

abstract class AbstractMetabox extends AbstractCasaByGrace
{

    public function getStrippedTinymceConfig($extra = [])
    {
        return [
            'toolbar1' => 'bold,italic,link,' . $extra['toolbar1'] ?? '',
            'toolbar2' => $extra['toolbar2'] ?? '',
            'toolbar3' => $extra['toolbar3'] ?? '',
        ];
    }

}
