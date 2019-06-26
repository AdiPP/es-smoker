<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aturan */

$this->title = 'Update Aturan: ' . $model->idaturan;
$this->params['breadcrumbs'][] = ['label' => 'Aturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idaturan, 'url' => ['view', 'id' => $model->idaturan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aturan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
