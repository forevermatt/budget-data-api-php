<?php

namespace app\models;

class Budget extends BudgetBase
{
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'categoryUuid' => 'Category UUID',
        ]);
    }
}
