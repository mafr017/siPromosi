<?php
require "koneksi.php";

function krmPesan($pesan) {
    global $conn;

    $nama_pgrm = $pesan["nama_pengirim"];
    $notlp_pgrm = $pesan["notelp_pengirim"];
    $email_pgrm = $pesan["email_pengirim"];
    $jenis_pesan = $pesan["jenis_pesan"];
    $isi_pesan = $pesan["isi_pesan"];

    // query insert data
    $query = "INSERT INTO pesan (nama_pengirim, notelp_pengirim, email_pengirim, jenis_pesan, isi_pesan) 
                VALUES
                ('$nama_pgrm', '$notlp_pgrm', '$email_pgrm', '$jenis_pesan', '$isi_pesan')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>