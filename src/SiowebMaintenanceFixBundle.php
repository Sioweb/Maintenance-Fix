<?php

namespace Sioweb\MaintenanceFix;

use Sioweb\MaintenanceFix\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Configures the Contao MaintenanceFix bundle.
 *
 * @author Sascha Weidner <https://www.sioweb.de>
 */
class SiowebMaintenanceFixBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new Extension();
    }
}
