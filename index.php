<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">

    <?php wp_head(); ?>
     
</head>
<body <?php body_class(); ?>>
<?php 
   
   echo apply_filters('my_name', "<h1>Ashraf Uddin</h1>");
   
   echo apply_filters("my_desc","<p>I'm a seasoned WordPress expert with over 5 years of experience in web development.Worked on a diverse range of projects, from blogs to WooCommerce and Shopify websites, and have completed 3 Laravel projects.My passion for learning and my ability to blend technical expertise with a deep understanding of user experience make me a reliable and forward-thinking developer, consistently delivering exceptional results and making online dreams come to life. </p>"); 
   
  
  
  
   wp_footer();
  
  ?>


</body>
</html>
