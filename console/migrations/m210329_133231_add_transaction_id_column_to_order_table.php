<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%order}}`.
 */
class m210329_133231_add_transaction_id_column_to_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('order', 'transaction_id', $this->string());
        $this->addColumn('order', 'status', $this->string());
        $this->addColumn('order', 'shipping_method', $this->string());
        $this->addColumn('order', 'shipping_amount', $this->string());
        $this->addColumn('order', 'grand_amount', $this->string());
        $this->addColumn('order', 'currency_type', $this->string());
        $this->addColumn('order', 'company', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('order', 'transaction_id', $this->string());
        $this->dropColumn('order', 'status', $this->string());
        $this->dropColumn('order', 'shipping_method', $this->string());
        $this->dropColumn('order', 'shipping_amount', $this->string());
        $this->dropColumn('order', 'grand_amount', $this->string());
        $this->dropColumn('order', 'currency_type', $this->string());
        $this->dropColumn('order', 'company', $this->string());
    }
}
