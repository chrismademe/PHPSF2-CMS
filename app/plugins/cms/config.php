<?php

/**
 * User Login Page
 *
 * CMS uses the same session
 * as the rest of your site, so
 * if you want users to login
 * using your own login page,
 * simply change the path here.
 *
 * Bare in mind though, there is
 * certain data CMS needs from the
 * session...
 *
 * id = User ID
 * email = Email address
 * isactive = User status
 */
$sf_cms_config['login_path'] = 'admin/login';
$sf_cms_config['login_handler'] = 'admin/post/login';

#################################################
### No need to edit below this line           ###
#################################################

# Apply Filters
$sf_cms_config = apply_filters( 'sf_cms_config', $sf_cms_config );
