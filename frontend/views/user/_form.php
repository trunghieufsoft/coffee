<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng ký thành viên';
?>
<div class="col-md-8 col-md-offset-2">
    <br>
    <h1 style="color: white;text-align: center;"><?= Html::encode($this->title) ?></h1>
    <br>


    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>
<span style="color: white">
    <?= $form->field($model, 'username')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
</span>

    <div style="margin-left: 215px">
        <?= Html::submitButton($model->isNewRecord ? 'Cập Nhật' : 'Cập Nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-danger']) ?>
    </div>

<br>
<br>
<br>
<br>
<br>


    <?php ActiveForm::end(); ?>

</div>




        


