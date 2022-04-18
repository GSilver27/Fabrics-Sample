 <?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <a href="../site/catalog.php">Catalog</a>
    <a href="">Services</a>
    <a href="">About</a>
    <a href="">Delivery</a>
    <a href="">Reviews</a>
    <a href="">Education</a>
    <a href="">Contacts</a>
    <a href="">Wholesale</a>
<!--    --><?php
//    NavBar::begin([
//////        'brandLabel' => Yii::$app->name,
////        'brandUrl' => Yii::$app->homeUrl,
////        'options' => [
////            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
////        ],
////    ]);
//    $menuItems = [
//        ['label' => 'Catalog', 'url' => ['/site/catalog']],
//        ['label' => 'Services', 'url' => ['/site/services']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Delivery', 'url' => ['/site/delivery']],
//        ['label' => 'Reviews', 'url' => ['/site/reviews']],
//        ['label' => 'Education', 'url' => ['/site/education']],
//        ['label' => 'Contacts', 'url' => ['/site/contacts']],
//        ['label' => 'Wholesale', 'url' => ['/site/wholesale']],
//    ];
////    if (Yii::$app->user->isGuest) {
////        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
////        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
////    } else {
////        $menuItems[] = '<li>'
////            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
////            . Html::submitButton(
////                'Logout (' . Yii::$app->user->identity->username . ')',
////                ['class' => 'btn btn-link logout']
////            )
////            . Html::endForm()
////            . '</li>';
////    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav ml-auto'],
//        'items' => $menuItems,
//    ]);
////    NavBar::end();
//    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
