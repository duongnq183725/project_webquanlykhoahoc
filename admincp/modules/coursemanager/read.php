<?php
    $sql_read_course = "SELECT * FROM course ORDER BY id ASC";
    $query_read_course = mysqli_query($mysqli,$sql_read_course);
?>
<p>Danh sách khóa học</p>
<table border="1" width="100%" style="border-collapse: collapse" style="width:100%">
    <tr>
        <th>STT</th>
        <th>Tên khóa học</th>
        <th>Số lượng bài học</th>
        <th>Mô tả</th>
        <th>Avatar</th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_read_course)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['lesson_number'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><img src="modules/coursemanager/uploads/<?php echo $row['avatar'] ?>" width="150px"></td>
        <td>
            <a href="modules/coursemanager/process.php?id=<?php echo $row['id']?>">Xóa</a> | <a href="?action=coursemanager&query=edit&id=<?php echo $row['id']?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>