<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransactionCategoryAmount */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-category-amount-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'transactionUuid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoryUuid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
