<?php
    $sql_listofcourse = "SELECT * FROM lesson, course WHERE lesson.id_course=course.id ORDER BY lesson.id_lesson ASC LIMIT 5";
    $query_listofcourse = mysqli_query($mysqli, $sql_listofcourse);
    
?>
<h3>Bài học mới cập nhật</h3>
        <ul class="lesson_list">
            <?php
                    while($row = mysqli_fetch_array($query_listofcourse)){
            ?>
            <li>
                <a href="index.php?manager=lesson&id=<?php echo $row['id_lesson']?>">
                    <img src="admincp/modules/lessonmanager/uploads/thumbnail/<?php echo $row['thumbnail']?>">
                    <p class="title_lesson"><?php echo $row['name']?></p>
                    <p style="text-align:center; color:#5B5B5B">(<?php echo $row['name_course']?>)</p>
                </a>
            </li>
            <?php
            }
            ?>
            
        </ul>