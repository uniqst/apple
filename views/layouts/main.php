<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Roboto+Condensed:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container-fluid padding-lrg-2">
        <div class="pull-left">
            Need help? call us 1-22-3456789

        </div>

        <div class="pull-right">
            Register Login Delivery Checkout My Account
        </div>
    </div>

    <?php
    NavBar::begin([
        'options'=>[

        ],
        'innerContainerOptions' => ['class' => 'main-nav'],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
           '<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Поиск">
        </div>
        <button type="submit" class="btn btn-default">Искать</button>
      </form>'
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
