<?php 
    $conn = mysqli_connect("localhost", "root", "", "regresi");

    // cek koneksi
    if (mysqli_connect_errno()){
        echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
    };

    $sql = "SELECT * FROM promosi ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    $promosi = mysqli_fetch_assoc($result);
    var_dump($result);
    echo "<br>";
    var_dump($promosi);
?>