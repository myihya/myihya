<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'',"sertifikasi");
    
    // production
    $kon = mysqli_connect("localhost", "id7899373_akademik","12345","id7899373_myihya");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>