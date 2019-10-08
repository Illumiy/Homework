<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php $form = ActiveForm::begin() ?>
<?= $form->field($form_model, 'descr')->textArea() ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>
</div>
