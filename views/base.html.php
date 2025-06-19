<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title><?= $title ?></title>
</head>
<body>
    <?php require_once 'components/nav.html.php' ?> 
    <?= $content ?>
    <?php require_once 'components/footer.html.php' ?> 
</body>
</html>