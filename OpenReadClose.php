<?php

//    $ff = fopen("dictionary.txt", "r") or die("Unable to open file!");

//    echo fread($ff,filesize("dictionary.txt"));
//    fclose($ff);

    $fn = "dictionary1.txt";
    $fm = "w";
    $ff = fopen($fn,$fm) or die ("ไม่ลบข้อมูลในไฟล์ได้ หรือ ไม่สามารถสร้างไฟล์ได้");
    $txt = "FAISAN\n";
    fwrite ($ff,$txt);
    fclose($ff);

    /*
    r	Open a file for read only. File pointer starts at the beginning of the file
    w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x	Creates a new file for write only. Returns FALSE and an error if file already exists
    r+	Open a file for read/write. File pointer starts at the beginning of the file
    w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
    */
?>

