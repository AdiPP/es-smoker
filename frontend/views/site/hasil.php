<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Hasil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-pertanyaan">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Berikut adalah hasil analisa:</p>

    <div class="row">
        <div class="col-lg-5">
            <div>
                <?php foreach ($results['answear'] as $result): ?>
                    <?= $result."</br>" ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
