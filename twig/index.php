<?php
require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(
  'src_assets' => '../src/assets',
  'src_css' => '../src/css',
  'menu' => array(
    'HOME',
    'SHOP',
    'STORY',
    'EXIBITIONS',
    'COMMISSIONS',
    'BLOG',
    'CONTACT'
  ),
  'bottom_nav' => array(
    'FAQ',
    'DELIVERY & RETURNS',
    'TERMS & CONDITIONS',
    'CONTACT US'
  ),
  'socials' => array(
    'twitter',
    'facebook-square',
    'instagram'
  ),
  'thumbnails' => array(
    array('src' => 'thomas-ae-602202-unsplash.jpg', 'title' => 'THE MAKING', 'subtitle' => 'Our yarn is 100% British.'),
    array('src' => 'beatriz-perez-moya-191993-unsplash.jpg', 'title' => 'OUR STORY', 'subtitle' => 'A family run business.'),
    array('src' => 'tom-the-photographer-651516-unsplash.jpg', 'title' => 'COMMISSIONS', 'subtitle' => 'Furnishing & upholstery'),
  ),
  'products' => array(
    array('src' => 'monika-grabkowska-664428-unsplash.jpg', 'title' => 'WEST CLIFF', 'price' => '250.00', 'last_price' => '290.00' ),
    array('src' => 'tanalee-youngblood-344759-unsplash.jpg', 'title' => 'ESK', 'price' => '110.00'),
    array('src' => 'alexandra-gorn-328026-unsplash.jpg', 'title' => 'SANDSEND', 'price' => '360.00'),
    array('src' => 'christie-kim-769380-unsplash.jpg', 'title' => 'WEST CLIFF CUSHION', 'price' => '250.00'),
  )
));