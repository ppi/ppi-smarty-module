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

/**
 * Smarty options.
 *
 * The whole list can be seen here: {@link http://www.smarty.net/docs/en/api.variables.tpl}
 */
return array(
    'options'   => array(
        'cache_dir'             => '%app.cache_dir%/smarty/cache',
        'compile_dir'           => '%app.cache_dir%/smarty/templates_c',
        'config_dir'            => '%app.root_dir%/config/smarty',
        'default_resource_type' => 'file',
        'template_dir'          => '%app.root_dir%/resources/views',
        'use_include_path'      => false,
        'use_sub_dirs'          => true
    )
);

?>