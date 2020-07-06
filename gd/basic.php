<?php
    $width = 800;
    $height = 600;
    $canvas = imagecreatetruecolor($width,$height);

    $red = imagecolorallocate($canvas,255,0,0);
    $green = imagecolorallocate($canvas,0,255,0);
    $blue = imagecolorallocate($canvas,0,0,255);
    $black = imagecolorallocate($canvas,0,0,0);
    $white = imagecolorallocate($canvas,255,255,255);

    imagefill($canvas,0,0,$white);
    imageline($canvas,0,0,800,600,$red);
    imageline($canvas,0,600,800,0,$blue);
    imagestring($canvas,5,400,300,"hello",$red);

    header("content-type:image/png");
    imagepng($canvas);
    

    // header("content-type:image/png");
    // imagepng($canvas,"test.png");
    // header("content-type:image/gif");
    // imagegif($canvas,"test.gif");
    // header("content-type:image/jpeg");
    // imagejpeg($canvas,"test.jpeg");