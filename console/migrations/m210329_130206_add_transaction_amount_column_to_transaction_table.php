<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%transaction}}`.
 */
class m210329_130206_add_transaction_amount_column_to_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('transaction', 'transaction_amount', $this->string());
        $this->addColumn('transaction', 'transaction_status', $this->string());
        $this->addColumn('transaction', 'transaction_currency', $this->string());
        $this->addColumn('transaction', 'transaction_description', $this->string());
        $this->addColumn('transaction', 'company', $this->string());
        $this->addColumn('transaction', 'branch_id', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('transaction', 'transaction_amount', $this->string());
        $this->dropColumn('transaction', 'transaction_amount', $this->string());
        $this->dropColumn('transaction', 'transaction_status', $this->string());
        $this->dropColumn('transaction', 'transaction_currency', $this->string());
        $this->dropColumn('transaction', 'transaction_description', $this->string());
        $this->dropColumn('transaction', 'company', $this->string());
        $this->dropColumn('transaction', 'branch_id', $this->string());
    }
}
