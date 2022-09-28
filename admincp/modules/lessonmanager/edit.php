<?php
    $sql_edit = "SELECT * FROM lesson WHERE id_lesson='$_GET[id_lesson]' LIMIT 1";
    $query_edit = mysqli_query($mysqli,$sql_edit);
?>
<p>Sửa thông tin bài học</p>
<table border="1" width="100%" style="border-collapse: collapse";>
<?php
    while($row = mysqli_fetch_array($query_edit)){
?>
    <form method="POST" action="modules/lessonmanager/process.php?id_lesson=<?php echo $row['id_lesson']?>" enctype="multipart/form-data">
        <tr>
            <td>Tên bài học</td>
            <td><input type="text" value="<?php echo $row['name'] ?>" name="name"></td>
        </tr>
        <!-- <tr>
            <td>Nội dung bài học</td>
            <td><input type="int" name="lesson_number"></td>
        </tr> -->
        <tr>
            <td>Nội dung bài học</td>
            <td><textarea rows="10" name="content" style="resize: none"><?php echo $row['content'] ?></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="thumbnail">
                <img src="modules/lessonmanager/uploads/thumbnail/<?php echo $row['thumbnail'] ?>" width="150px">
            </td>

        </tr>
        <tr>
            <td>Video</td>
            <td>
                <input type="file" name="video">
                <video width="320"controls><source src="modules/lessonmanager/uploads/video/<?php echo $row['video'] ?>" type="video/mp4"></video>
            </td>
        </tr>
        <tr>
            <td>File</td>
            <td>
                <input type="file" name="file">
                <a href="modules/lessonmanager/uploads/file/<?php echo $row['file'] ?>"><?php echo $row['file'] ?></a>
            </td>
        </tr>
        <tr>
            <td>Thuộc khóa học</td>
            <td>
                <select name="course">
                    <?php
                        $sql_course = "SELECT * FROM course ORDER BY id DESC";
                        $query_course = mysqli_query($mysqli, $sql_course);
                        while($row_course = mysqli_fetch_array($query_course)){
                            if($row_course['id'] == $row['id_course']){
                    ?>
                    <option selected value = "<?php echo $row_course['id']?>"><?php echo $row_course['name_course']?></option>
                    <?php
                            }else{
                    ?>
                    <option value = "<?php echo $row_course['id']?>"><?php echo $row_course['name_course']?></option>
                    <?php
                            }
                    }?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="edit" value="Sửa bài học"></td>
        </tr>
    </form>
<?php } ?>
</table>