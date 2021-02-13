<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%budget}}`.
 */
class m210206_212045_CreateBudgetTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%budget}}', [
            'id' => $this->primaryKey(),
            'categoryUuid' => $this->string()->notNull(),
            'budgeted' => $this->integer()->notNull(),
            'remaining' => $this->integer()->notNull(),
            'refilled' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%budget}}');
    }
}
