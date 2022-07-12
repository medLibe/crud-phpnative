<?php 

    include("config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // DELETE query
        $sql = "DELETE FROM daftar_member WHERE id=$id";
        $query = mysqli_query($getDB, $sql);

        // if query success
        if($query){
            header('Location: list-member.php');
        }else{
            return 'Delete failed.';
        }
    }else{
        return 'Restricted access.';
    }
?>