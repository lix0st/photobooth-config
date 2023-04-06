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
  'start_screen' =>
  array (
    'title' => 'Photomaton',
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
    'url' => 'https://drive.google.com/drive/folders/1sjGJATLed6rUPslmTLkTYbc-U5GjV3qm?usp=sharing',
    'append_filename' => false,
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
  'post_photo' =>
  array (
    'cmd' => '/usr/bin/gupload /var/www/html/data/images/%s -c photobooth/ -d',
  ),
);
