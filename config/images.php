<?php

return [
    'driver' => env('IMAGE_DRIVER', 'gd'),
    'upload_path' => env('IMAGE_UPLOAD_PATH', '/uploads'),
    'access_path' => env('IMG_PATH', 'http://127.0.0.1:8000/uploads'),

    1 => ['width' => 35, 'height' => 35],
    2 => ['width' => 480, 'heigth' => 635],
    3 => ['width' => 1920, 'heigth' => 700],
    4 => ['width' => 960, 'heigth' => 960],
    5 => ['width' => 105, 'heigth' => 140],
];
