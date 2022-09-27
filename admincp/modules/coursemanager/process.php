<?php
    include('../../config/config.php');

    $name_course = $_POST['name_course'];
    $lesson_number = $_POST['lesson_number'];
    $description = $_POST['description'];

    $avatar = $_FILES['avatar']['name']; 
    $avatar_tmp = $_FILES['avatar']['tmp_name'];
    $avatar = time().'_'.$avatar;
    

    if(isset($_POST['create'])){
        $sql_create = "INSERT INTO course(name_course,lesson_number,description,avatar) VALUE('".$name_course."','".$lesson_number."','".$description."','".$avatar."')";
        mysqli_query($mysqli,$sql_create);
        move_uploaded_file($avatar_tmp,'uploads/'.$avatar);
        header('Location:../../index.php?action=coursemanager&query=create');
    }elseif(isset($_POST['edit'])){
        $sql_update = "UPDATE course SET name_course='".$name_course."' , lesson_number='".$lesson_number."' , description='".$description."' WHERE id = $_GET[id]";
        mysqli_query($mysqli,$sql_update);
        move_uploaded_file($avatar_tmp,'uploads/'.$avatar);
        header('Location:../../index.php?action=coursemanager&query=create');
    }else{
        $id = $_GET['id'];
        $sql_delete = "DELETE FROM course WHERE id='".$id."'";
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?action=coursemanager&query=create');
    }
?>