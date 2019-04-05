<?php

/**
 * Contao Open Source CMS
 */

declare (strict_types = 1);

namespace Sioweb\MaintenanceFix\Extension;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension AS BaseExtension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * @file Extension.php
 * @class Extension
 * @author Sascha Weidner
 * @package sioweb.contao.extensions.maintenance
 * @copyright Sascha Weidner, Sioweb
 */

class Extension extends BaseExtension
{
	/**
	 * {@inheritdoc}
	 */
	public function getAlias()
	{
		return 'sioweb_maintenance_fix';
    }
    
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('listener.yml');
    }
}
