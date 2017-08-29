<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use cybercog\yii\googleanalytics\widgets\GATracking;

/* @var $this \yii\web\View */
/* @var $content string */

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
    <?= GATracking::widget([
        'trackingId' => 'UA-105591252-1',
    ]) ?>
</head>
<body>

    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {

                $menuItems[]=[
                    'label'=>'  Main Gallery'  ,
                    'url'=>['/content/main-gallery']
                ];
                $menuItems[]=[
                    'label'=>'About Us'  ,
                    'url'=>['/content/about-us']
                ];
                $menuItems[]=[
                    'label'=>'Product Gallery'  ,
                    'url'=>['/content/index']
                ];
                $menuItems[]=[
                    'label'=>'Contact'  ,
                    'url'=>['/content/contact']
                ];
                $menuItems[]=[
                    'label'=>'Partners'  ,
                    'url'=>['/content/partner-index']
                ];
                $menuItems[]=[
                    'label'=>'History'  ,
                    'url'=>['/content/history']
                ];
                $menuItems[]=[
                    'label'=>'Servicing'  ,
                    'url'=>['/content/servicing']
                ];
                $menuItems[]=[
                  'label'=>'Translate',
                   'url'=>['/translations']
                ];
                $menuItems[]=[
                    'label'=>'Users',
                    'url'=>['/user/index']
                ];
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];

            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
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

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
