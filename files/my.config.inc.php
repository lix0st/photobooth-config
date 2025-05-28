<?php

return [
    'ui' => [
        'language' => 'fr',
        'show_fork' => false,
        'shutter_animation' => false,
    ],
    'adminpanel' => [
        'view' => 'expert',
    ],
    'start_screen' => [
        'title' => 'Photomaton',
    ],
    'logo' => [
        'enabled' => true,
        'path' => 'private/images/logo/logo_aim.png',
        'position' => 'top_right',
    ],
    'picture' => [
        'enabled' => false,
        'cntdwn_time' => 3,
        'cheese_time' => 2000,
        'take_frame' => false,
        'frame' => '/var/www/html/resources/img/frames/frame.png',
    ],
    'textonpicture' => [
        'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
    ],
    'delete' => [
        'no_request' => true,
    ],
    'event' => [
        'textRight' => 'Olivier',
        'textLeft' => 'Alexandra',
        'symbol' => 'fa-camera',
    ],
    'filters' => [
        'enabled' => false,
    ],
    'collage' => [
        'layout' => 'collage.json',
        'frame' => '/var/www/html/resources/img/frames/frame.png',
        'placeholderpath' => '/resources/img/background/01.jpg',
        'limit' => 3,
    ],
    'textoncollage' => [
        'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
    ],
    'login' => [
        'enabled' => true,
        'username' => 'photobooth',
        'password' => '$2y$10$Shgon8uhAHa1FCV9Vv6t8.8uKcICveSwZ8Mxz3PplXjyHRk8ffaje',
        'keypad' => true,
        'pin' => '7721',
    ],
    'colors' => [
        'countdown' => '#33d17a',
        'background_countdown' => '#dbffda',
        'primary' => '#26a269',
        'primary_light' => '#ffffff',
        'secondary' => '#b3cab9',
        'highlight' => '#b4dcb1',
        'panel' => '#26a269',
        'box' => '#dbffda',
    ],
    'background' => [
        'defaults' => 'url("/private/images/background/bg_aim.jpg")',
        'chroma' => 'url("/private/images/background/bg_aim.jpg")',
    ],
    'remotebuzzer' => [
        'serverip' => '192.168.110.50',
    ],
    'textonprint' => [
        'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
    ],
    'qr' => [
        'url' => 'https://lix0st.ch/piwigo-test/identification.php',
        'append_filename' => false,
    ],
    'print' => [
        'frame' => '/var/www/html/resources/img/frames/frame.png',
    ],
    'commands' => [
        'post_photo' => '/var/www/html/private/upload_picture.sh --url="https://lix0st.ch/piwigo-test/ws.php" --username=photobooth --password=invuettes12 --image_path="/var/www/html/data/images/%s" --album_id=1',
    ],
    'mail' => [
        'subject' => 'Here is your picture',
        'text' => 'Hey, your picture is attached.',
    ],
];
