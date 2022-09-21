<?php
    include('../../config/config.php');

    $namecourse = $_POST['namecourse'];
    $lessionnumber = $_POST['lessionnumber'];
    $description = $_POST['description'];

    $avatar = $_FILE['avatar']['name']; 
    $avatar_tmp = $_FILE['avatar']['tmp_name'];
    

    if(isset($_POST['creatcourse'])){
        $sql_create = "INSERT INTO course(name,lesson_number,description,avatar) VALUE('".$namecourse."','".$lessionnumber."','".$description."','".$avatar."')";
        mysqli_query($mysqli,$sql_create);
        move_uploaded_file($avatar_tmp,'uploads/'.$avatar);
        header('Location:../../index.php?action=coursemanager');
    }elseif(isset($_POST['editcourse'])){

    }else{
        $id = $_GET['id'];
        $sql_delete = "DELETE FROM course WHERE id='".$id."'";
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?action=coursemanager');
    }
?>