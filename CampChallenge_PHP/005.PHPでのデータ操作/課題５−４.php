<?php
    var_dump($_FILES);
    echo '<br>';

    $file_name = 'upload.txt';
    // var_dump(move_uploaded_file($_FILES['userfile']['tmp_name'],"$file_name"));
    move_uploaded_file($_FILES['userfile']['tmp_name'],"$file_name");

    if (move_uploaded_file($_FILES['userfile']['tmp_name'],"$file_name")==false){
        echo $file_name."をアップロードしました。<br>";
        // var_dump(move_uploaded_file($_FILES['userfile']['tmp_name'],"$file_name"));
    } else {
        echo "ファイルをアップロードできません。<br>";
        // var_dump(move_uploaded_file($_FILES['userfile']['tmp_name'],"$file_name"));
    }

    $file_txt = file_get_contents('upload.txt');
    echo $file_txt;
?>
