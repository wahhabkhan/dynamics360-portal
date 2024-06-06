<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Customerservice $model */

$this->title = 'Update Customer Service: ' . $model->serialNumber;
//$this->params['breadcrumbs'][] = ['label' => 'Customerservice', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="Customerservice-update">

 <h4 class="text-success" style="margin-left: 240px;"><?= Html::encode($this->title) ?></h4>
    
    <?= $this->render('add-customerservice', [
        'model' => $model,
    ]) ?>

</div>