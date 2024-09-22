<?php

include '../includes/connect.php';

if (isset($_POST['Submit'])) {


    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tipe = $_POST['tipe'];
    $durasi = $_POST['durasi'];
    $discount = $_POST['discount'];
    $total = $_POST['total'];

    $sql =
        "INSERT INTO pesanan
		VALUES('$nama','$nik','$jeniskelamin','$tipe','$durasi','$discount','$total')";

    // var_dump($sql);
    // die;

    $query = mysqli_query($db, $sql);



    header('Location: ../pages/index.php');
}
