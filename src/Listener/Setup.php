<?php

/**
 * Contao Open Source CMS
 */

declare (strict_types = 1);

namespace Sioweb\MaintenanceFix\Listener;

use Sioweb\MaintenanceFix\Modules\Maintenance;
use Contao\CoreBundle\Framework\ContaoFramework;

/**
 * @file Setup.php
 * @class Setup
 * @author Sascha Weidner
 * @package sioweb.contao.extensions.maintenance
 * @copyright Sascha Weidner, Sioweb
 */

class Setup
{

    /**
     * ContaoFramework
     */
    protected $framework;

    public function __construct(ContaoFramework $framework) {
        $this->framework = $framework;
        $this->framework->initialize();
    }

    /* InitializeSystem */
    public function initializeSystem()
    {
        if (empty($GLOBALS['TL_MAINTENANCE_EXTENDED'])) {
            $GLOBALS['TL_MAINTENANCE_EXTENDED'] = [];
        }

        $GLOBALS['BE_MOD']['system']['maintenance']['callback'] = Maintenance::class;
    }
}
