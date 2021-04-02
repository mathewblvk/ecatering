<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billing}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%order}}`
 */
class m210331_152627_create_billing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billing}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'order_id' => $this->integer(),
            'address_one' => $this->string(),
            'address_two' => $this->string(),
            'special_instructions' => $this->text(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-billing-user_id}}',
            '{{%billing}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-billing-user_id}}',
            '{{%billing}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-billing-order_id}}',
            '{{%billing}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-billing-order_id}}',
            '{{%billing}}',
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
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-billing-user_id}}',
            '{{%billing}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-billing-user_id}}',
            '{{%billing}}'
        );

        // drops foreign key for table `{{%order}}`
        $this->dropForeignKey(
            '{{%fk-billing-order_id}}',
            '{{%billing}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-billing-order_id}}',
            '{{%billing}}'
        );

        $this->dropTable('{{%billing}}');
    }
}
