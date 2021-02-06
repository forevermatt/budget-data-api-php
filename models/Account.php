<?php

namespace app\models;

class Account extends AccountBase
{
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'uuid' => 'UUID',
        ]);
    }
}
