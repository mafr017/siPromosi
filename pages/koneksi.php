<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_test");

// cek koneksi
if (mysqli_connect_errno()){
    echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
};

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows   = [];
    while ( $rows = mysqli_fetch_assoc($result)){
        $rows[] = $rows;
    }
    return $rows;
}
?>