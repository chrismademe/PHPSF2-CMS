<?php

# Check Permissions
$variables->add('cms_theme_folder', is_writeable( APP_DIR .'/theme/' . SITE_THEME ));
$variables->add('cms_assets_folder', is_writeable( ROOT_DIR . '/public_html' ));
