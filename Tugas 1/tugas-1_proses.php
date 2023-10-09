<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jenis_kelamin'];
    $ps = $_POST['program'];
    $tentang = $_POST['tentang'];

    echo "Nama : $nama <br>";
    echo "Nim  : $nim <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Keahlian : <br>";
    if(isset($_POST['web'])){
        echo "+ " . $_POST['web'] . "<br>";
    }
    if(isset($_POST['java'])){
        echo "+ " . $_POST['java'] . "<br>";
    }
    if(isset($_POST['mobile'])){
        echo "+ " . $_POST['mobile'] . "<br>";
    }
    echo "Program Studi : $ps <br>";
    echo "Tentang : <br>";
    echo "$tentang";
?>