<?php 

    include("config.php");

    // check is POST empty or not
    if(isset($_POST)){

        // get name's form value
        $id = $_POST['id'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        $status_member = $_POST['status'];

        //UPDATE query
        $sql = "UPDATE daftar_member SET nama_lengkap='$nama_lengkap', alamat='$alamat', hp='$hp', status_member='$status_member' WHERE id='$id'";
        $query = mysqli_query($getDB, $sql);

        // query check
        if($query){
            header('Location: list-member.php');
        }else{
            return "Failed save changed";
        }
    }else{
        return "Restricted access.";
    }

?>