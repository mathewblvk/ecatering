<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment_method}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210331_144215_create_payment_method_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%payment_method}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'card_number' => $this->string(),
            'code' => $this->string(),
            'date_form' => $this->timestamp(),
            'date_to' => $this->timestamp(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-payment_method-user_id}}',
            '{{%payment_method}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-payment_method-user_id}}',
            '{{%payment_method}}',
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
            '{{%fk-payment_method-user_id}}',
            '{{%payment_method}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-payment_method-user_id}}',
            '{{%payment_method}}'
        );

        $this->dropTable('{{%payment_method}}');
    }
}
