<p>Thêm bài học</p>
<table border="1" width="100%" style="border-collapse: collapse";>
    <form method="POST" action="modules/lessonmanager/process.php" enctype="multipart/form-data">
        <tr>
            <td>Tên bài học</td>
            <td><input type="text" name="name"></td>
        </tr>
        <!-- <tr>
            <td>Nội dung bài học</td>
            <td><input type="int" name="lesson_number"></td>
        </tr> -->
        <tr>
            <td>Nội dung bài học</td>
            <td><textarea rows="10" name="content" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="thumbnail"></td>
        </tr>
        <tr>
            <td>Video</td>
            <td><input type="file" name="video"></td>
        </tr>
        <tr>
            <td>File</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td>Thuộc khóa học</td>
            <td>
                <select name="course">
                    <?php
                        $sql_course = "SELECT * FROM course ORDER BY id DESC";
                        $query_course = mysqli_query($mysqli, $sql_course);
                        while($row_course = mysqli_fetch_array($query_course)){
                    ?>
                    <option value = "<?php echo $row_course['id']?>"><?php echo $row_course['name_course']?></option>
                    <?php
                    }?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="create" value="Thêm bài học"></td>
        </tr>
    </form>
</table>