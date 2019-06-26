<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PenyakitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penyakit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idpenyakit') ?>

    <?= $form->field($model, 'nmpenyakit') ?>

    <?= $form->field($model, 'definisi') ?>

    <?= $form->field($model, 'penyebab') ?>

    <?= $form->field($model, 'solusi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
