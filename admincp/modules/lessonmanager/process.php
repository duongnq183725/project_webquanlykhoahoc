<?php
    include('../../config/config.php');

    $name = $_POST['name'];
    $content = $_POST['content'];

    $thumbnail = $_FILES['thumbnail']['name']; 
    $thumbnail_tmp = $_FILES['thumbnail']['tmp_name'];
    $thumbnail = time().'_'.$thumbnail;
    $video = $_FILES['video']['name']; 
    $video_tmp = $_FILES['video']['tmp_name'];
    $video = time().'_'.$video;
    $file = $_FILES['file']['name']; 
    $file_tmp = $_FILES['file']['tmp_name'];
    $file = time().'_'.$file;
    

    if(isset($_POST['create'])){
        $sql_create = "INSERT INTO lesson(name,content,thumbnail,video,file) VALUE('".$name."','".$content."','".$thumbnail."','".$video."','".$file."')";
        mysqli_query($mysqli,$sql_create);
        move_uploaded_file($thumbnail_tmp,'uploads/thumbnail/'.$thumbnail);
        move_uploaded_file($video_tmp,'uploads/video/'.$video);
        move_uploaded_file($file_tmp,'uploads/file/'.$file);
        header('Location:../../index.php?action=lessonmanager&query=create');
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