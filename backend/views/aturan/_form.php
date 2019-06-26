<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use app\models\Penyakit;
use app\models\Gejala;

/* @var $this yii\web\View */
/* @var $model app\models\Aturan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aturan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'penyakit')->dropDownList(
    	ArrayHelper::map(Penyakit::find()->all(), 'idpenyakit', 'nmpenyakit')
    ) ?>

    <?= $form->field($model, 'gejala')->dropDownList(
    	ArrayHelper::map(Gejala::find()->all(), 'idgejala', 'nmgejala')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
