<?php
$config = array (
  'ui' => 
  array (
    'language' => 'fr',
    'folders_lang' => '/photobooth_v4/resources/lang',
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
    'frame' => '/var/www/html/photobooth_v4/resources/img/frames/frame.png',
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
    'path' => 'private/logo_small.png',
  ),
  'event' => 
  array (
    'textLeft' => 'Alexandra',
    'textRight' => 'Olivier',
  ),
  'textonpicture' => 
  array (
    'font' => '/var/www/html/photobooth_v4/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'collage' => 
  array (
    'frame' => '/var/www/html/photobooth_v4/resources/img/frames/frame.png',
    'placeholderpath' => '/var/www/html/photobooth_v4/resources/img/background/01.jpg',
    'limit' => 4,
  ),
  'textoncollage' => 
  array (
    'font' => '/var/www/html/photobooth_v4/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'print' => 
  array (
    'frame' => '/var/www/html/photobooth_v4/resources/img/frames/frame.png',
  ),
  'textonprint' => 
  array (
    'font' => '/var/www/html/photobooth_v4/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'qr' => 
  array (
    'url' => 'http://192.168.10.71/photobooth_v4/api/download.php?image=',
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
    'defaults' => 'url(/photobooth_v4/private/bg_aim.jpg)',
    'admin' => 'url(/photobooth_v4/private/bg_aim.jpg)',
    'chroma' => 'url(/photobooth_v4/private/bg_aim.jpg)',
  ),
);