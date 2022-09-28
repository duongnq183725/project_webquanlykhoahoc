<?php
    $sql_read_lesson = "SELECT * FROM lesson, course WHERE lesson.id_course=course.id ORDER BY id_lesson DESC";
    $query_read_lesson = mysqli_query($mysqli,$sql_read_lesson);
?>
<p>Danh sách khóa học</p>
<table border="2" width="100%" style="border-collapse: collapse" style="width:100%">
    <tr>
        <th>STT</th>
        <th>Tên bài học</th>
        <th>Nội dung</th>
        <th>Hình ảnh</th>
        <th>Video</th>
        <th>File</th>
        <th>Thuộc khóa học</th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_read_lesson)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['content'] ?></td>
        <td><img src="modules/lessonmanager/uploads/thumbnail/<?php echo $row['thumbnail'] ?>" width="150px"></td>
        <td><video width="320"controls><source src="modules/lessonmanager/uploads/video/<?php echo $row['video'] ?>" type="video/mp4"></video></td>
        <td><a href="modules/lessonmanager/uploads/file/<?php echo $row['file'] ?>"><?php echo $row['file'] ?></a></td>
        <td><?php echo $row['name_course'] ?></td>
        <td>
            <a href="modules/lessonmanager/process.php?id_lesson=<?php echo $row['id_lesson']?>">Xóa</a> | <a href="?action=lessonmanager&query=edit&id_lesson=<?php echo $row['id_lesson']?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>