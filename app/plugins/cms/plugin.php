<?php

/**
 * @package CMS
 *
 * Browser interface for
 * managing pre-defined
 * content types.
 */

# Run Installation if the install files are present.
if ( is_dir( __DIR__ . '/install' ) ) {

    # Run Installation
    require_once __DIR__ . '/install/install.php';

} else {

    # Check for Medoo
    if ( !plugin_is_active( '_medoo' ) ) {
        throw new Exception('CMS requires Medoo plugin to be active.');
    }

    # Get Config
    require_once __DIR__ . '/config.php';

    # Path Handler
    require_once __DIR__ . '/lib/paths.php';

    # Classes
    require_once __DIR__ . '/lib/classes.php';

    # Add CMS Variable to hold data
    $variables->add('cms', array());

}
