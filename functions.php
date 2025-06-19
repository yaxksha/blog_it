<?php 
function htmlDisplay($path, $data){
    extract($data);
    ob_start();
    require_once 'views/'.$path.'.html.php';
    $content = ob_get_clean();
    require_once 'views/base.html.php';
}


?>