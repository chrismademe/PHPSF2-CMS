<?php

/**
 * Path Handler
 */

$sf_paths = array(
    'admin',
    'admin/new',
    'admin/edit',
    'admin/delete',
    'admin/posts',
    'admin/install',
    'admin/post',
    'admin/post/edit',
    'admin/post/new',
    'admin/post/delete',
    $sf_cms_config['login_path']
);

# Route Requests to Admin
if ( in_array( $path, $sf_paths ) ) {

    # Change Controller Dir
    $controller->useController(__DIR__ . '/controller');

    # Change Active Theme
    $theme->useTheme('admin');

    # Override Theme Settings
    require_once __DIR__ . '/assets.php';

}
