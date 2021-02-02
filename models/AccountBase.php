<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property int $id
 * @property string $name
 * @property string $uuid
 */
class AccountBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'uuid'], 'required'],
            [['name', 'uuid'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'uuid' => 'Uuid',
        ];
    }
}
