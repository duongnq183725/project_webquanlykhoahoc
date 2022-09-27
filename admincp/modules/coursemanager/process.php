<?php
    include('../../config/config.php');

    $name = $_POST['name'];
    $lesson_number = $_POST['lesson_number'];
    $description = $_POST['description'];

    $avatar = $_FILE['avatar']['name']; 
    $avatar_tmp = $_FILE['avatar']['tmp_name'];
    

    if(isset($_POST['create'])){
        $sql_create = "INSERT INTO course(name,lesson_number,description,avatar) VALUE('".$name."','".$lesson_number."','".$description."','".$avatar."')";
        mysqli_query($mysqli,$sql_create);
        move_uploaded_file($avatar_tmp,'uploads/'.$avatar);
        header('Location:../../index.php?action=coursemanager&query=create');
    }elseif(isset($_POST['edit'])){
        $sql_update = "UPDATE course SET name='".$name."' , lesson_number='".$lesson_number."' , description='".$description."' WHERE id = $_GET[id]";
        mysqli_query($mysqli,$sql_update);
        move_uploaded_file($avatar_tmp,'uploads/'.$avatar);
        header('Location:../../index.php?action=coursemanager&query=create');
    }else{
        $id = $_GET['id'];
        $sql_delete = "DELETE FROM course WHERE id='".$id."'";
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?action=coursemanager');
    }
?>