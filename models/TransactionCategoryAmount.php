<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction_category_amount".
 *
 * @property int $id
 * @property string $transactionUuid
 * @property string $categoryUuid
 * @property int $amount
 */
class TransactionCategoryAmount extends TransactionCategoryAmountBase
{
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'transactionUuid' => 'Transaction UUID',
            'categoryUuid' => 'Category UUID',
        ]);
    }
}
