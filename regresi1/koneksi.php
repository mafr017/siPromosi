<?php 
    $conn = mysqli_connect("localhost", "root", "", "regresi");

    // cek koneksi
    if (mysqli_connect_errno()){
        echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
    };
    
    // $sql = "SELECT * FROM promosi";
    // $result = mysqli_query($conn, $sql);

    // $json_array = array();

    // while ($row = mysqli_fetch_assoc($result)) {
    //     $json_array[] = $row;
    // }

    // // print_r($json_array);

    // echo json_encode($json_array);
    
?>