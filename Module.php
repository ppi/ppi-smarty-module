<?php
/**
 * This file is part of the PPI Framework.
 *
 * @category    PPI
 * @package     SmartyModule
 * @copyright   Copyright (c) 2011-2013 Paul Dragoonis <paul@ppi.io>
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        http://www.ppi.io
 */

namespace PPI\SmartyModule;

use PPI\Autoload;
use PPI\Module\AbstractModule;

/**
 * PPI Smarty Module.
 *
 * @author Vítor Brandão <vitor@ppi.io>
 */
class Module extends AbstractModule
{
    const VERSION = '0.0.1-DEV';

    /**
     * {@inheritDoc}
     */
    public function init($e)
    {
        Autoload::add(__NAMESPACE__, dirname(__DIR__));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'PPISmartyModule';
    }

    /**
     * {@inheritDoc}
     */
    public function getConfig()
    {
        // return array('smarty' => $this->loadConfig('smarty.php'));
        // or
        return array('smarty' => require_once __DIR__.'/resources/config/smarty.php');

    }

    /**
     * {@inheritDoc}
     */
    public function getServiceConfig2()
    {
            /*
         * Smarty Engine.
         *
        $serviceManager->setFactory('templating.engine.smarty', function($serviceManager) use ($appCacheDir) {
            $cacheDir = $appCacheDir . DIRECTORY_SEPARATOR . 'smarty';

            $smartyEngine = new \PPI\View\Smarty\SmartyEngine(
                new \Smarty(),
                $serviceManager->get('templating.locator'),
                $serviceManager->get('templating.name_parser'),
                $serviceManager->get('templating.loader'),
                array(
                    'cache_dir'     => $cacheDir . DIRECTORY_SEPARATOR . 'cache',
                    'compile_dir'   => $cacheDir . DIRECTORY_SEPARATOR . 'templates_c',
                ),
                $serviceManager->get('templating.globals'),
                $serviceManager->get('logger')
            );

            // Add some SmartyBundle extensions
            $smartyEngine->addExtension(new SmartyAssetsExtension($serviceManager->get('templating.helper.assets')));
            $smartyEngine->addExtension(new SmartyRouterExtension($serviceManager->get('router')));

            return $smartyEngine;
        });
        */
    }
}
