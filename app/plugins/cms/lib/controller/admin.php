<?php

# Login check
if ( !is_loggedin() ) {
    header('location: /admin/login');
}
