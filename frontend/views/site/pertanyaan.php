<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Pertanyaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-pertanyaan">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Pilihlah gejala berikut:</p>

    <div class="row">
        <div class="col-lg-5">
            <div>
                <?= Html::beginForm(['site/pertanyaan'], 'post', ['enctype' => 'multipart/form-data']) ?>
                <?php 
                $i=0;
                foreach ($gejalas as $gejala): ?>
                    <div class="form-group">
                        <label><?= $gejala->nmgejala ?></label><br>
                        <label class="radio-inline"><input type="radio" name="answear[<?= $i ?>]" value="1">Ya</label>
                        <label class="radio-inline"><input type="radio" name="answear[<?= $i ?>]" value="0">Tidak</label>
                    </div>
                <?php 
                $i++;
                endforeach ?>
                <!-- <div class="checkbox">
                    <label><input type="checkbox" name="answear[]" value="1">Option 1</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="answear[]" value="2">Option 2</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="answear[]" value="3">Option 3</label>
                </div> -->
                <?= Html::submitButton('Submit', ['class' => 'submit']) ?>
                <?= Html::endForm() ?>
            </div>
        </div>
    </div>
</div>
