<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */

$this->title = 'Update Gejala: ' . $model->idgejala;
$this->params['breadcrumbs'][] = ['label' => 'Gejalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgejala, 'url' => ['view', 'id' => $model->idgejala]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gejala-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
