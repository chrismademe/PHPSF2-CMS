<?php

# Check Path
if ( $path !== 'admin/install' ) {
    throw new Exception('CMS is enabled but not installed correctly. Go to <a href="/admin/install"><code>/admin/install</code></a> to complete installation. If you have installed CMS already, remove the <code>install</code> directory.');
}

# Write UI
$ui_files = array(
    'admin-install.twig',
    'admin-install-submit.twig',
    'admin-install-database.twig',
    'admin-install-database-submit.twig'
);

# Copy UI files
foreach ( $ui_files as $file ) {

    if ( !file_exists(APP_DIR . '/theme/' . SITE_THEME . '/' . $file) ) {
        $contents = file_get_contents(__DIR__ . '/ui/' . $file);

        if ( !file_put_contents(APP_DIR . '/theme/' . SITE_THEME .'/' . $file, $contents) ) {
            throw new Exception('Oops, we couldn\'t create the installation UI. Check your permissions or check the README for manual installation instructions.');
        }
    }

}

# Run Install Steps
switch ( $path ) {

    # Step 1
    case 'admin/install':
        require_once __DIR__ . '/inc/step-1.php';
    break;

}
