<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%customer}}`
 * - `{{%user}}`
 */
class m210322_045225_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'delivery_note' => $this->text(),
            'delivery_time' => $this->string(),
            'delivery_day' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `customer_id`
        $this->createIndex(
            '{{%idx-order-customer_id}}',
            '{{%order}}',
            'customer_id'
        );

        // add foreign key for table `{{%customer}}`
        $this->addForeignKey(
            '{{%fk-order-customer_id}}',
            '{{%order}}',
            'customer_id',
            '{{%customer}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-order-user_id}}',
            '{{%order}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-order-user_id}}',
            '{{%order}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%customer}}`
        $this->dropForeignKey(
            '{{%fk-order-customer_id}}',
            '{{%order}}'
        );

        // drops index for column `customer_id`
        $this->dropIndex(
            '{{%idx-order-customer_id}}',
            '{{%order}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-order-user_id}}',
            '{{%order}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-order-user_id}}',
            '{{%order}}'
        );

        $this->dropTable('{{%order}}');
    }
}
