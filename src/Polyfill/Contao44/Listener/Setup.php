<?php

namespace Sioweb\MaintenanceFix\Polyfill\Contao44\Listener;

use Contao\System;

class Setup extends \Sioweb\MaintenanceFix\Listener\Setup
{
    public function __construct()
    {
        parent::__construct(
            System::getContainer()->get('contao.framework')
        );
    }
}
