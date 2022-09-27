<?php
    $sql_read = "SELECT * FROM lesson ORDER BY id ASC";
    $query_read = mysqli_query($mysqli,$sql_read);
?>
<p>Danh sách khóa học</p>
<table border="1" width="100%" style="border-collapse: collapse" style="width:100%">
    <tr>
        <th>STT</th>
        <th>Tên bài học</th>
        <th>Nội dung</th>
        <th>Hình ảnh</th>
        <th>Video</th>
        <th>File</th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_read)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['lesson_number'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td>
            <a href="modules/coursemanager/process.php?id=<?php echo $row['id']?>">Xóa</a> | <a href="?action=coursemanager&query=edit&id=<?php echo $row['id']?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>