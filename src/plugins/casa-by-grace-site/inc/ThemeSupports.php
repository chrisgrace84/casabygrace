<?php

namespace TGHP\CasaByGrace;

class ThemeSupports extends AbstractCasaByGrace
{

    /**
     * Asset constructor.
     *
     * @param $casaByGrace CasaByGrace
     */
    public function __construct(CasaByGrace $casaByGrace)
    {
        parent::__construct($casaByGrace);

        add_action('after_setup_theme', [$this, 'addThemeSupports']);
    }

    /**
     * Add WordPress menus
     *
     * @return void
     */
    public function addThemeSupports()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('responsive-embeds');
    }

}