<?php

use CMS\Posts;

# Create Posts Object
$cms = new Posts();

# Get All Posts
$posts = $cms->get(array(
    'status' => array(0,1)
));

# If only 1, nest it so it works in the loop
if ( is_object($posts) ) {
    $the_posts[] = $posts;
} elseif ( is_array($posts) ) {
    $the_posts = $posts;
}

# Pass to theme
$variables->extend('cms', 'posts', $the_posts);

# Set Page Title
$variables->extend('page', 'meta', array(
    'title' => 'All Posts | ' . $variables->get('site|name')
));
