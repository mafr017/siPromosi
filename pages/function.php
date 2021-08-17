<?php 
require 'koneksi.php';
session_start();
// Cek Session
function ceksesi(){
    if (isset($_SESSION['log'])) {
        # code...
    } else {
        echo "
            <script>
              alert('Anda belum login ke sistem!');
              document.location.href = 'login.php';
            </script>
            ";
    }
}

// Tambah data mitra
function tmbhMitra($datamitra){
    global $conn;
        $nama_mitra = $datamitra['nama_mitra'];
        $jenis_mitra = $datamitra['jenis_mitra'];
        $alamat = $datamitra['alamat'];
        $kota = $datamitra['kota'];
        $provinsi = $datamitra['provinsi'];
        $notelp = $datamitra['notelp'];
        $email_mitra = $datamitra['email_mitra'];

        $tmbhdata = "INSER INTO mitra (jenis_mitra, nama_mitra, alamat, kota, provinsi, notelp, email_mitra)
                                            VALUES('$jenis_mitra', '$nama_mitra', '$alamat', '$kota', '$provinsi', '$notelp', '$email_mitra')";
        mysqli_query($conn, $tmbhdata);
        return mysqli_affected_rows($conn);
}
?>