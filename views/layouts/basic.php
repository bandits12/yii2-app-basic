<?php
/**
 * Created by PhpStorm.
 * User: Leader
 * Date: 28.11.2015
 * Time: 13:54
 */

/* @var content string */
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Yii::$app->name ?></title>
</head>
<body>
<p>Верхня частина сайту</p>

<?= $content ?>

<p>Нижня частина сайту</p>
</body>
</html>
