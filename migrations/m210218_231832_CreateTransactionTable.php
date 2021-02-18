<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m210218_231832_CreateTransactionTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string()->notNull(),
            'accountUuid' => $this->string()->notNull(),
            'amountTotal' => $this->bigInteger()->notNull(),
            'note' => $this->string()->notNull(),
            'timestamp' => $this->bigInteger()->notNull(),
            'who' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction}}');
    }
}
