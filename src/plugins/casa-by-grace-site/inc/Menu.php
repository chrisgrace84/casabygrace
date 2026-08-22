<?php

namespace TGHP\CasaByGrace;

class Menu extends AbstractCasaByGrace
{

    /**
     * Asset constructor.
     *
     * @param $casaByGrace CasaByGrace
     */
    public function __construct(CasaByGrace $casaByGrace)
    {
        parent::__construct($casaByGrace);

        add_action('after_setup_theme', [$this, 'addMenus']);
    }

    /**
     * Add WordPress menus
     *
     * @return void
     */
    public function addMenus()
    {
        register_nav_menus([
            'header-nav' => esc_html__('Main navigation', CasaByGrace::getTextDomain()),
            'footer-nav' => esc_html__('Footer navigation', CasaByGrace::getTextDomain()),
        ]);
    }

}