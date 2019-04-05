<?php

/**
 * Contao Open Source CMS
 */

/**
 * @file config.php
 * @author Sascha Weidner
 * @version 3.0.0
 * @package sioweb.contao.extensions.glossar
 * @copyright Sascha Weidner, Sioweb
 */

if(VERSION <= 4.5) {
    $GLOBALS['TL_HOOKS']['initializeSystem'][] = array('Sioweb\MaintenanceFix\Polyfill\Contao44\Listener\Setup', 'initializeSystem');
}