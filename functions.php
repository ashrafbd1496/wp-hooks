<?php 
/**
 * add_action( string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1 ): true
 *
 * *add acton hooks
 * @return always true
 */


function about_me_action($para1, $para2){
    $html= '<h1>About Ashraf ' . $para1. '</h1>';
    echo $html; 
}
add_action('about-me','about_me_action', 6, 2);

function about_me_details(){
    $html= "<p>I'm a seasoned WordPress expert with over 5 years of experience in web development.Worked on a diverse range of projects, from blogs to WooCommerce and Shopify websites, and have completed 3 Laravel projects. With a portfolio showcasing 10+ custom WordPress themes, I'm now expanding my skills in WordPress plugin development, Gutenberg block development, Elementor addon development, React.js, and Headless WordPress. My passion for learning and my ability to blend technical expertise with a deep understanding of user experience make me a reliable and forward-thinking developer, consistently delivering exceptional results and making online dreams come to life.</p>";
    echo $html; 
}
add_action('about-me','about_me_details', 5);




function about_bd_action(){
    $html= '<h1>About Bangladesh</h1>';
    echo $html; 
}
add_action('about-bangladesh','about_bd_action', 4);

function bangladesh_details(){
    $html = '<p>Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its Padma (Ganges), Meghna and Jamuna rivers create fertile plains, and travel by boat is common. On the southern coast, the Sundarbans, an enormous mangrove forest</p>';

    echo $html;
}
add_action('about-bangladesh', 'bangladesh_details', 3);



function about_wp_action(){
    $html= '<h1>About WordPress</h1>';
    echo $html; 
}
add_action('about-wordpress','about_wp_action', 1);

function about_wp_details(){
    $html= '<p>WordPress is a web content management system. It was originally created as a tool to publish blogs but has evolved to support publishing other web content, including more traditional websites, mailing lists and Internet forum, media galleries, membership sites, learning management systems and online stores.</p>';
    echo $html; 
}
add_action('about-wordpress','about_wp_details', 2);



//remove action hooks
//remove_action('about-me', 'about_me_details');