<?php 

function about_me_action(){
    $html= '<h1>About Ashraf</h1>';
    echo $html; 
}
add_action('about-me','about_me_action');

function about_bd_action(){
    $html= '<h1>About Bangladesh</h1>';
    echo $html; 
}
add_action('about-bangladesh','about_bd_action');

function about_wp_action(){
    $html= '<h1>About WordPress</h1>';
    echo $html; 
}
add_action('about-wordpress','about_wp_action');
