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
                    
                    <!-- .front-side -->
                    <div class="front-side">
                        <!-- .aqua-body -->
                        <div class="aqua-body">
                            <?= $content ?>
                        </div>
                        <!-- end - .aqua-body -->
                        
                        <!-- .aqua-body-succes -->
                        <div class="aqua-body-succes">
                            <!-- .aqua-body-succes-cont -->
                            <div class="aqua-body-succes-cont">
                                <!-- .aqua-body-succes-cont -->
                                <div class="aqua-body-succes-cont-icon">
                                    <i class="ion ion-checkmark"></i>
                                </div>
                                <!-- end - .aqua-body-succes-cont -->
                                <p>Registro Exitoso</p>
                            </div>
                            <!-- end - .aqua-body-succes-cont -->
                            <!-- .aqua-body-succes-btn -->
                            <button class="btn btn-primary aqua-body-succes-btn js-btn-continuar">
                                Continuar
                            </button>
                            <!-- end - .aqua-body-succes-btn -->
                        </div>
                        <!-- end - .aqua-body-succes -->
                    </div>
                    <!-- end - .front-side -->
                    
                    <!-- .back-side  -->
                    <div class="back-side">
                        <!-- .aqua-registros-body -->
                        <div class="aqua-registros-body">
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Virginia Ferguson</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->

                            <!-- .aqua-registros-item -->
                            <div class="aqua-registros-item">
                                <p>Ultimo</p>
                                <p>823</p>
                            </div>
                            <!-- end - .aqua-registros-item -->
                        </div>
                        <!-- end - .aqua-registros-body -->
                    </div>
                </div>
                <!-- end - .flip-panel -->
                
                <!-- .aqua-registros-close -->
                <div class="aqua-registros-close js-registros-close"><i class="ion ion-close-round"></i></div>

            </div>
            <!-- end - .aqua-cont -->

            <!-- .aqua-ver-resgistros -->
            <span href="" class="aqua-ver-resgistros js-ver-resgistros">Ver registros</span>
            <!-- .aqua-exportar -->
            <button class="btn aqua-exportar">Exportar</button>

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
