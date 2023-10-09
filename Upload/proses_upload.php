<?php
    $dir_upload = "files/";
    $uploadfile = $dir_upload . $_FILES['file']['name'];

    if(is_uploaded_file($_FILES['file']['tmp_name'])){
        $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
        if($kirim){
            echo "File berhasil diupload ke server pada folder <b>$uploadfile</b>";
        }else{
            echo "File gagal diupload";
            echo "Error : ", $_FILES['file']['error'];
        }
    }else{
        echo "File tidak diupload dengan benar";
    }
?>