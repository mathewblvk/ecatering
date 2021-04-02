<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%order}}`
 */
class m210322_060900_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string(),
            'total' => $this->string(),
            'status' => $this->string(),
            'order_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-transaction-order_id}}',
            '{{%transaction}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-transaction-order_id}}',
            '{{%transaction}}',
            'order_id',
            '{{%order}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%order}}`
        $this->dropForeignKey(
            '{{%fk-transaction-order_id}}',
            '{{%transaction}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-transaction-order_id}}',
            '{{%transaction}}'
        );

        $this->dropTable('{{%transaction}}');
    }
}
