<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body class="hold-transition login-page">
        <?php echo $content; ?>
    </body>
    <?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
