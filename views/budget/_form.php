<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Budget */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="budget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoryUuid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budgeted')->textInput() ?>

    <?= $form->field($model, 'remaining')->textInput() ?>

    <?= $form->field($model, 'refilled')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
