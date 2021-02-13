<?php

namespace app\models;

class Category extends CategoryBase
{
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'uuid' => 'UUID',
        ]);
    }
}
