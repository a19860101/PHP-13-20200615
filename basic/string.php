<?php
    # substr(),mb_substr() 擷取子字串
    $text = "台灣近年來學生棒球「投球失憶」時有所聞，數量比起過去增加不少，投球失憶至今在全世界還找不到答案，台灣中華職棒（CPBL）富邦悍將總教練洪一中17日新莊球場賽前受訪，他不知道確切原因，他推測可能與重量訓練流行有關係。";
    $text_en = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis arcu porttitor urna commodo blandit sed vitae urna. Nullam in mauris purus. Quisque in luctus neque, lacinia iaculis mi. Praesent sit amet lacus quis diam accumsan ullamcorper ut et ex. In tortor purus, auctor sit amet dapibus in, facilisis at quam. Pellentesque tellus diam, tincidunt id nisi a, tempor condimentum nunc. Integer ultrices augue mauris, et malesuada metus dignissim ut. Cras pellentesque vehicula euismod. Sed aliquet rhoncus augue, vitae suscipit mauris. Suspendisse potenti. Vivamus non enim non nulla pulvinar bibendum non et massa.";
    // echo substr($text_en,0,10);
    // echo substr($text,0,10);
    // echo mb_substr($text,0,15,"utf8");
    echo mb_substr($text_en,0,15,"utf8");