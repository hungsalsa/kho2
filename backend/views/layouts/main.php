<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\widgets\headerWidget;
use backend\widgets\sidebarWidget;

AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>
<!-- container section start -->
  <section id="container" class="">

    <header class="header dark-bg">
        <?= headerWidget::widget(['message' => 'Good morning']) ?>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <?= sidebarWidget::widget(['message' => 'Good morning']) ?>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
                
                    <?= $content ?>
                
        </section>
    </section>
    <!--main content end-->
  </section>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
