<?php 

function my_des_filter_func($val){
    return $val;
}
add_filter('my_desc',"my_des_filter_func");