<?php

namespace TGHP\CasaByGrace\Form;

interface FormDefinerInterface
{

    /**
     * @return string
     */
    public function getName();

    /**
     * @return array
     */
    public function define();

}