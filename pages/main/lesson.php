<!-- <p>Nội dung bài học</p> -->
<?php
    $sql_study = "SELECT * FROM lesson, course WHERE lesson.id_course=course.id  AND lesson.id_lesson='$_GET[id]' LIMIT 1";
    $query_study = mysqli_query($mysqli, $sql_study);

    while($row_study = mysqli_fetch_array($query_study)){
?>
<div>
    <p class="title_course">Khoá học: <?php echo $row_study['name_course']?></p>
    <p class="title_in_lesson"><?php echo $row_study['name']?></p>

    <p class="content"><?php echo $row_study['content']?></p>
</div>
<div class="add_video">
    <video controls><source src="admincp/modules/lessonmanager/uploads/video/<?php echo $row_study['video']?>" type="video/mp4">Trình duyệt của bạn không hỗ trợ thẻ video.</video>
</div>
<div class="file">Tài liệu tham khảo: <a href="admincp/modules/lessonmanager/uploads/file/<?php echo $row_study['file'] ?>">Bấm vào để tải</a></div>
<?php
    }
?>
                                      