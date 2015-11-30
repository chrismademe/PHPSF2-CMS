<?php

#################################################
### @NOTE Instead of changing values in this  ###
### file, you should use the 'sf_config'      ###
### filter to change values.                  ###
#################################################

/**
 * User Login Page
 *
 * CMS uses the same session
 * as the rest of your site, so
 * if you want users to login
 * using your own login page,
 * simply change the path using
 * the sf_config filter.
 *
 * Bare in mind though, there is
 * certain data CMS needs from the
 * session...
 *
 * id = User ID
 * email = Email address
 * isactive = User status
 */
$sf_config['login_path'] = 'admin/login';
$sf_config['login_handler'] = 'admin/post/login';

/**
 * User Registration Page
 *
 * As above, this can be overridden
 * with your own, just bare in mind
 * that the data required must be
 * present.
 */
$sf_config['register_path'] = 'admin/register';
$sf_config['register_handler'] = 'admin/post/register';

#################################################
### No need to edit below this line           ###
#################################################

# Apply Filters
$sf_config = apply_filters( 'sf_config', $sf_config );
