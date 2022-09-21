<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action'])) {
            $tam = $_GET['action'];
        } else {
            $tam = '';
        }

        if($tam == 'coursemanager') {
            include("modules/coursemanager/creat.php");
            include("modules/coursemanager/read.php");
        // } elseif ($tam == 'studentmanager') {
        //     include("main/studentmanager.php");
        } else {
            include("modules/dashboard.php");
        }
    ?>
</div>