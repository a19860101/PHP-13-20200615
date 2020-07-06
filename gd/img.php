<?php
    $img = "images/01.jpg";
    $canvas = imagecreatefromjpeg($img);

    $canvas_w = imagesx($canvas);
    $canvas_h = imagesy($canvas);
    // echo $canvas_w,$canvas_h;

    $new_w = $canvas_w / 3;
    $new_h = $canvas_h / 3;

    $new_canvas = imagecreatetruecolor($new_w,$new_h);
    imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);

    imagejpeg($new_canvas,"123.jpg");
    imagepng($new_canvas,"123.png");
    imagegif($new_canvas,"123.gif");

