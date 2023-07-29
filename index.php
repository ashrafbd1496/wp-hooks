<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">

    <?php wp_head(); ?>
     
</head>
<body <?php body_class(); ?>>
<?php 
   
   echo apply_filters('my_name', "<h1>Ashraf Uddin</h1>");
   
   echo apply_filters("my_desc","<p>I'm a seasoned WordPress expert with over 5 years of experience in web development.Worked on a diverse range of projects, from blogs to WooCommerce and Shopify websites, and have completed 3 Laravel projects.</p>"); 
   
  
  
  
   wp_footer();
  
  ?>


</body>
</html>
