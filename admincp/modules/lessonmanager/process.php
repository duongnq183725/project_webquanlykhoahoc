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
    $course = $_POST['course'];
    

    if(isset($_POST['create'])){
        $sql_create = "INSERT INTO lesson(name,content,thumbnail,video,file,id_course) VALUE('".$name."','".$content."','".$thumbnail."','".$video."','".$file."','".$course."')";
        mysqli_query($mysqli,$sql_create);
        move_uploaded_file($thumbnail_tmp,'uploads/thumbnail/'.$thumbnail);
        move_uploaded_file($video_tmp,'uploads/video/'.$video);
        move_uploaded_file($file_tmp,'uploads/file/'.$file);
        header('Location:../../index.php?action=lessonmanager&query=create');
    }elseif(isset($_POST['edit'])){
        $sql_update = "UPDATE lesson SET name = '".$name."', content = '".$content."', thumbnail = '".$thumbnail."', video = '".$video."', file = '".$file."', id_course = '".$course."' WHERE id_lesson = '$_GET[id_lesson]'";
        mysqli_query($mysqli,$sql_update);
        move_uploaded_file($thumbnail_tmp,'uploads/thumbnail/'.$thumbnail);
        move_uploaded_file($video_tmp,'uploads/video/'.$video);
        move_uploaded_file($file_tmp,'uploads/file/'.$file);
        header('Location:../../index.php?action=lessonmanager&query=create');

    }else{
        $id = $_GET['id_lesson'];
        $sql = "SELECT * FROM lesson WHERE id_lesson = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        // while($row = $mysqli_fetch_array($query)){
        //     unlink('uploads/thumbnail/'.$row['thumbnail']);
        //     unlink('uploads/video/'.$row['video']);
        //     unlink('uploads/file/'.$row['file']);
        // }
        
        $sql_delete = "DELETE FROM lesson WHERE id_lesson='".$id."'";
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?action=lessonmanager&query=create');
    }
?>