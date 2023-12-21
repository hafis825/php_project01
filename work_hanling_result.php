<?php

    $filename = $_POST['filename'];
    $mode = $_POST['mode'];
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];
    $text3 = $_POST['text3'];
    
    $ff = fopen($filename,$mode) or die("Unable to open file!");

    switch ($mode) {
        case 'r':
            echo fread($ff,filesize($filename));
            break;

        case 'w':
            fwrite ($ff,$text1/n);
            fwrite ($ff,$text2/n);
            fwrite ($ff,$text3/n);
            fclose($ff);
            header('location: work_filehanling.html');
            break;
        
        case 'a':
            fwrite ($ff,$text1/n);
            fwrite ($ff,$text2/n);
            fwrite ($ff,$text3/n);
            fclose($ff);
            header('location: work_filehanling.html');
            break;
    }


?>