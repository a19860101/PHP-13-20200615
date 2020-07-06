<?php
    $img = "images/01.jpg";
    $canvas = imagecreatefromjpeg($img);

    $canvas_w = imagesx($canvas);
    $canvas_h = imagesy($canvas);
    // echo $canvas_w,$canvas_h;

    $new_w = $canvas_w / 2;
    $new_h = $canvas_h / 2;

    $new_canvas = imagecreatetruecolor($new_w,$new_h);

