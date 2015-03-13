<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use frontend\assets\DWMainAsset;

/* @var $this \yii\web\View */
/* @var $content string */

$appBundle  = AppAsset::register($this);
$dwBundle   =  DWMainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" type="image/ico" href="<?= $dwBundle->baseUrl . '/images/favicon.ico' ?>"/>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

        <?php $this->beginContent('@app/views/layouts/header.php'); ?>

        <?php $this->endContent(); ?>

        <?= $content ?>

        <?php $this->beginContent('@app/views/layouts/footer.php'); ?>

        <?php $this->endContent(); ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
