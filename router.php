<?php 
require_once 'database.php';
require_once 'functions.php';

if (!isset($_GET['page']) || $_GET['page']=='home') {
    require_once 'home.php';
}elseif (isset($_GET['page']) && $_GET['page']== 'articles') {
    require_once 'articles.php';
}elseif (isset($_GET['page']) && $_GET['page']== 'article') {
    require_once 'article.php';
}
?>