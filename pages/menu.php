<?php
    $sql_course = "SELECT * FROM course ORDER BY id DESC";
    $query_course = mysqli_query($mysqli, $sql_course);
?>
<div class="menu">
            <ul class="list_menu">
                <li><a href="index.php">Trang chủ</a></li>
                <?php
                    
                    while($row_course = mysqli_fetch_array($query_course)){
                ?>
                <li><a href="index.php?manager=listofcourse&id=<?php echo $row_course['id']?>"><?php echo $row_course['name_course']?></a></li>
                <?php
                    }
                ?>
                <!-- <li><a href="index.php?manager=addedcourse">KHÓA HỌC CỦA BẠN</a></li> -->
                <li><a href="index.php?manager=intro">Giới thiệu</a></li>
            </ul>
        </div>