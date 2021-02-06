<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property int $id
 * @property string $categoryUuid
 * @property int $budgeted
 * @property int $remaining
 * @property string $refilled
 */
class BudgetBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryUuid', 'budgeted', 'remaining', 'refilled'], 'required'],
            [['budgeted', 'remaining'], 'integer'],
            [['categoryUuid', 'refilled'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoryUuid' => 'Category Uuid',
            'budgeted' => 'Budgeted',
            'remaining' => 'Remaining',
            'refilled' => 'Refilled',
        ];
    }
}
