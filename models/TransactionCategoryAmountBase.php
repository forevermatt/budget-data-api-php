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
class TransactionCategoryAmountBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction_category_amount';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transactionUuid', 'categoryUuid', 'amount'], 'required'],
            [['amount'], 'integer'],
            [['transactionUuid', 'categoryUuid'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transactionUuid' => 'Transaction Uuid',
            'categoryUuid' => 'Category Uuid',
            'amount' => 'Amount',
        ];
    }
}
