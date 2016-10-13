<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>


        <!-- .loader -->
        <div class="loader"><img src="<?=Url::base()?>/images/loader.gif" alt="Loader"></div>

        <!-- .aqua -->
        <div class="aqua">
            <!-- .aqua-cont -->
            <div class="aqua-cont">

                <!-- .aqua-header -->
                <div class="aqua-header">
                    <img src="<?=Url::base()?>/images/live-aqua.png" alt="Live Aqua">
                </div>
                <!-- end - .aqua-header -->
                
                <!-- .flip-panel -->
                <div class="flip-panel">
                    
                    <?=$content?>
                
                <!-- .aqua-registros-close -->
                <div class="aqua-registros-close js-registros-close"><i class="ion ion-close-round"></i></div>

            </div>
            <!-- end - .aqua-cont -->

            <!-- .aqua-ver-resgistros -->
            <span href="" class="aqua-ver-resgistros js-ver-resgistros">Ver registros</span>
            <!-- .aqua-exportar -->
            <button class="btn aqua-exportar js-btn-exportar ladda-button" data-style="zoom-out"><span class="ladda-label">Exportar</span></button>

        </div>
        <!-- end - .aqua -->

        <!-- <footer class="footer">
            <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

            <p class="pull-right">Powered by 2 Geeks one Monkey</p>
            </div>
        </footer> -->

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
