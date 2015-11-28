<?php

# Create Posts Object
$cms = new SF_Posts();

# Get All Posts
$posts = $cms->get();

# If only 1, nest it so it works in the loop
if ( count($posts) === 1 ) {
    $the_posts[] = $posts;
} else {
    $the_posts = $posts;
}

# Pass to theme
$variables->extend('cms', 'posts', $the_posts);

# Set Page Title
$variables->extend('page', 'meta', array(
    'title' => 'All Posts | ' . $variables->get('site|name')
));
