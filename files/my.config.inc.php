<?php
$config = array (
  'ui' => 
  array (
    'language' => 'fr',
    'folders_lang' => '/resources/lang',
    'show_fork' => false,
    'shutter_cheese_img' => '',
    'font_size' => '20px',
  ),
  'adminpanel' => 
  array (
    'view' => 'expert',
  ),
  'picture' => 
  array (
    'cntdwn_offset' => '1',
    'no_cheese' => true,
    'cheese_time' => '2000',
    'frame' => '/var/www/html/resources/img/frames/frame.png',
  ),
  'webserver' => 
  array (
    'ip' => '192.168.10.71',
  ),
  'delete' => 
  array (
    'no_request' => true,
  ),
  'logo' => 
  array (
    'enabled' => true,
    'path' => 'private/logo.png',
  ),
  'start_screen' =>
  array (
    'title' => 'Photomaton',
  ),
  'event' => 
  array (
    'textLeft' => 'Alexandra',
    'textRight' => 'Olivier',
  ),
  'textonpicture' => 
  array (
    'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'collage' => 
  array (
    'frame' => '/var/www/html/resources/img/frames/frame.png',
    'placeholderpath' => '/var/www/html/resources/img/background/01.jpg',
    'limit' => 4,
  ),
  'textoncollage' => 
  array (
    'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'print' => 
  array (
    'frame' => '/var/www/html/resources/img/frames/frame.png',
  ),
  'textonprint' => 
  array (
    'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'qr' => 
  array (
    'url' => 'http://192.168.10.71/api/download.php?image=',
  ),
  'mail' => 
  array (
    'subject' => 'Here is your picture',
    'text' => 'Hey, your picture is attached.',
  ),
  'colors' => 
  array (
    'highlight' => '#c0c0c0',
    'start_font' => '#3d3846',
  ),
  'background' => 
  array (
    'defaults' => 'url("/private/background.png")',
    'admin' => 'url(/private/background.png)',
    'chroma' => 'url(/private/background.png)',
  ),
);
