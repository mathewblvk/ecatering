<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210322_044205_create_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%customer}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'address' => $this->string(),
            'region' => $this->string(),
            'post_code' => $this->string(),
            'city' => $this->string(),
            'country' => $this->string(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-customer-user_id}}',
            '{{%customer}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-customer-user_id}}',
            '{{%customer}}',
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
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-customer-user_id}}',
            '{{%customer}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-customer-user_id}}',
            '{{%customer}}'
        );

        $this->dropTable('{{%customer}}');
    }
}
