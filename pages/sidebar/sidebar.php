<div class="sidebar">
            <ul class="list_sidebar">
                <?php
                    $sql_course = "SELECT * FROM course ORDER BY id DESC";
                    $query_course = mysqli_query($mysqli, $sql_course);
                    while($row = mysqli_fetch_array($query_course)){
                ?>
                <li><a href="index.php?manager=listofcourse&id=<?php echo $row['id'] ?>"><?php echo $row['name_course'] ?></a></li>
                <?php
                }
                ?>
            </ul>
            </div>