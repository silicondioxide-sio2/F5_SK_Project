<?php
require 'connect.php';
//terima maklumat daripada file signup.php
if(isset($_POST['username'])){
        $idPengguna = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $nomhp = $_POST['nomhp'];
    $daftar1="INSERT INTO pengguna VALUES
    ('$idPengguna',''$password','$nama','$nomhp','PENGGUNA')";
}