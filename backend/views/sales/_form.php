<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->dropDownlist($allCustomers,['prompt'=>'-- Chọn khách hàng --']) ?>

    <?= $form->field($model, 'bicycleNum_id')->dropDownlist($allbicycles,['prompt'=>'-- Chọn khách hàng --']) ?>

    <?= $form->field($model, 'bicycle_start')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product')->dropDownlist($allProduct,['prompt'=>'-- Chọn khách hàng --']) ?>


    <?= $form->field($model, 'quanlity')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_price')->textInput() ?>

    <?= $form->field($model, 'bicycle_end')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'employee')->textInput() ?>

    <?= $form->field($model, 'manager')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Hiện','0'=>'Ẩn']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
