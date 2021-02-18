<?php

namespace app\models;

class Transaction extends TransactionBase
{
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'uuid' => 'UUID',
            'accountUuid' => 'Account UUID',
        ]);
    }
}
