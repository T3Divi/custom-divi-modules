<?php

namespace Haydn\CustomDiviModules\Admin;

use Haydn\CustomDiviModules\Plugin;

/**
 * Defines the administration menus for this plugin.
 */
class AdminMenus
{
    private $plugin;

    public function __construct( Plugin $plugin )
    {
        $this->plugin = $plugin;
    }

    public function addTopMenu()
    {
        \add_menu_page(
            'Divi Modules',
            'Divi Modules',
            'switch_themes',
            'haydn_divi_modules',
            array($this, 'generatePageList'),
            'dashicons-grid-view',
            99
        );
    }

    public function addSubMenus()
    {
        add_submenu_page(
            'haydn_divi_modules',
            'All Modules',
            'All Modules',
            'switch_themes',
            'haydn_divi_modules',
            array($this, 'generatePageList')
        );

        add_submenu_page(
            'haydn_divi_modules',
            'Add New',
            'Add New',
            'switch_themes',
            'haydn_divi_modules_new',
            array($this, 'generatePageEdit')
        );
    }

    public function generatePageList()
    {
        ?>
        <div class="wrap">
            <h1><?= esc_html(get_admin_page_title()); ?></h1>
            <div id="haydn-custom-divi-modules-list">
            </div>
        </div>
        <?php
    }

    public function generatePageEdit()
    {
        ?>
        <div class="wrap">
            <h1><?= esc_html(get_admin_page_title()); ?></h1>
            <div id="haydn-custom-divi-modules-edit">
            </div>
        </div>
        <?php
    }
}
