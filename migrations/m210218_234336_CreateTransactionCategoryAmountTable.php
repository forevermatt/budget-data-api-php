<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction_category_amount}}`.
 */
class m210218_234336_CreateTransactionCategoryAmountTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction_category_amount}}', [
            'id' => $this->primaryKey(),
            'transactionUuid' => $this->string()->notNull(),
            'categoryUuid' => $this->string()->notNull(),
            'amount' => $this->bigInteger()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction_category_amount}}');
    }
}
