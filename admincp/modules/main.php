<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action'])) {
            $tam = $_GET['action'];
        } else {
            $tam = '';
        }

        if($tam == 'coursemanager') {
            include("modules/coursemanager/create.php");
            include("modules/coursemanager/read.php");
        } else {
            include("modules/dashboard.php");
        }
    ?>
</div>