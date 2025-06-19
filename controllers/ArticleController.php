<?php 
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../functions.php';

$articleModel = new Article;
// var_dump($articleModel);
//  var_dump(value: $articles);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $article = $articleModel->findOneById($pdo, $id);
    $title = "Article : ".$article["title"];
    htmlDisplay("articles/article", ["title" => $title,"article" => $article]);
}else{
    $articles = $articleModel->findAll($pdo);
    $title = "Articles";
    htmlDisplay("articles/articles", ["title" => $title,"articles" => $articles]);
}

?>