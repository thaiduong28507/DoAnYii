<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Perfume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'details')->textarea(['id' => 'details']) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'image')->hiddenInput(['id'=>'image']) ?>
            <img src="" id="show-img" style="width:250px;height:300px; display:none;">
            <a href='#' title="Chọn hình ảnh" id='select-img' class='btn btn-info btn-sm'>Chọn ảnh </a>
            <a href='#' title="Chọn hình ảnh" id='remove-img' class='btn btn-danger btn-sm'>Xóa ảnh </a>   
        </div>
        <div class="col-md-9">
        </div>
    </div>
    <br>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saleoff')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
