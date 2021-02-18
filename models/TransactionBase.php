<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property string $uuid
 * @property string $accountUuid
 * @property int $amountTotal
 * @property string $note
 * @property int $timestamp
 * @property string $who
 */
class TransactionBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uuid', 'accountUuid', 'amountTotal', 'note', 'timestamp', 'who'], 'required'],
            [['amountTotal', 'timestamp'], 'integer'],
            [['uuid', 'accountUuid', 'note', 'who'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uuid' => 'Uuid',
            'accountUuid' => 'Account Uuid',
            'amountTotal' => 'Amount Total',
            'note' => 'Note',
            'timestamp' => 'Timestamp',
            'who' => 'Who',
        ];
    }
}
