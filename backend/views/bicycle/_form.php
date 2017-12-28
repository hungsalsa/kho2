<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bicycle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bicycle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bicycle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bicycle_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_id')->dropDownList($allCustomers,['prompt'=>'-- Chọn khách hàng --']) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Hiện','0'=>'Ẩn']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
