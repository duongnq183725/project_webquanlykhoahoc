<?php
    $sql_edit_course = "SELECT * FROM course WHERE id='$_GET[id]' LIMIT 1";
    $query_edit_course = mysqli_query($mysqli,$sql_edit_course);
?>
<p>Sửa thông tin khóa học</p>
<table border="1" width="100%" style="border-collapse: collapse";>
    <form method="POST" action="modules/coursemanager/process.php?id=<?php echo $_GET['id'] ?>">
        <?php
            while($line = mysqli_fetch_array($query_edit_course)) {
        ?>
        <tr>
            <td>Tên khóa học</td>
            <td><input type="text" value="<?php echo $line['name']?>" name="name"></td>
        </tr>
        <tr>
            <td>Số lượng bài học</td>
            <td><input type="int" value="<?php echo $line['lesson_number']?>" name="lesson_number"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea rows="10" name="description" style="resize: none"><?php echo $line['description']?></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="avatar"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="edit" value="Sửa thông tin khóa học"></td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>