<div id="main">
    <?php
        include("sidebar/sidebar.php");
    ?>       

    <div class="maincontent">
        <?php
            if(isset($_GET['manager'])) {
                $tam = $_GET['manager'];
            } else {
                $tam = '';
            }

            if($tam == 'listofcourse') {
                include("main/listofcourse.php");
            }elseif ($tam == 'lesson') {
                include("main/lesson.php");
            } elseif ($tam == 'addedcourse') {
                include("main/addedcourse.php");
            } elseif ($tam == 'intro') {
                include("main/intro.php");
            } else {
                include("main/index.php");
            }
            
        ?>
        
    </div>
</div>