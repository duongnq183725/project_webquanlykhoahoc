<?php
    $sql_listofcourse = "SELECT * FROM lesson WHERE lesson.id_course='$_GET[id]' ORDER BY lesson.id_lesson ASC";
    $query_listofcourse = mysqli_query($mysqli, $sql_listofcourse);
    //get name_course
    $sql_cate = "SELECT * FROM course WHERE course.id='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);

    $row_title = mysqli_fetch_array($query_cate);
?>
<h3>Khóa học: <?php echo $row_title['name_course']?></h3>
        <ul class="lesson_list">
            <?php
                while($row_listofcourse = mysqli_fetch_array($query_listofcourse)){
            ?>
            <li>
                <a href="index.php?manager=lesson&id=<?php echo $row_listofcourse['id_lesson']?>">
                    <img src="admincp/modules/lessonmanager/uploads/thumbnail/<?php echo $row_listofcourse['thumbnail']?>">
                    <p class="title_lesson"><?php echo $row_listofcourse['name']?></p>
                </a>
            </li>
            <?php
                }
            ?>
        </ul>