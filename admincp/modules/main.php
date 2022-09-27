<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tam = '';
            $query = '';
        }

        if($tam == 'coursemanager' && $query == 'create') {
            include("modules/coursemanager/create.php");
            include("modules/coursemanager/read.php");
        }else if($tam == 'coursemanager' && $query == 'edit'){
            include("modules/coursemanager/edit.php");
        }else if($tam == 'lessonmanager' && $query == 'create'){
            include("modules/lessonmanager/create.php");
            include("modules/lessonmanager/read.php");
        }else if($tam == 'lessonmanager' && $query == 'edit'){
            include("modules/lessonmanager/edit.php");
        }else {
            include("modules/dashboard.php");
        }
    ?>
</div>