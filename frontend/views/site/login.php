<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'ĐĂNG NHẬP';

?>
<div class="col-md-8 col-md-offset-2">
    <br>
    <br>
    <br>
    <h1 style="color: white;text-align: center;"><?= Html::encode($this->title) ?></h1>
    
    <br>

    
            <?php $form = ActiveForm::begin(['id' => 'login-form','layout'=>'horizontal']); ?>
                <span style="color: white">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div style="margin-left: 215px">
                    <?= Html::submitButton('Đăng Nhập', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
            <br>
<br>
<br>
<br>
<br>
<br>
      
</div>
