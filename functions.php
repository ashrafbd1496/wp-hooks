<?php 


function my_des_filter_func($val){

    $wordnumber = str_word_count($val);

    return $val . '
    <hr>
    <input name="review" type="radio" id="g"><label for="g"> Good </label>
    <input name="review" type="radio" id="b"><label for="b"> Bad </label> 
    <hr>
    <hr>
  Total Word Number: ' . $wordnumber ;
   
}
add_filter('my_desc',"my_des_filter_func");

