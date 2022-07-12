<?php 

    include("config.php");


    // check is POST empty or not
    if(isset($_POST)){

        // get name's form value
        $nama_lengkap = $_POST['nama_lengkap'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        $status_member = $_POST['status'];

        // INSERT query
        $sql = "INSERT INTO daftar_member(nama_lengkap, hp, alamat, status_member) VALUE('$nama_lengkap', '$hp', '$alamat', '$status_member')";
        $query = mysqli_query($getDB, $sql);

        // query check
        if($query){
            header('Location: index.php?status=sukses');
        }else{
            header('Location: index.php?status=gagal');
        }
    }else{
        return "Restricted access.";
    }

?>