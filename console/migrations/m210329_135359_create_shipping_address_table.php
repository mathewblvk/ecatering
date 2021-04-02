<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shipping_address}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210329_135359_create_shipping_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shipping_address}}', [
            'id' => $this->primaryKey(),
            'street1' => $this->string(),
            'street2' => $this->string(),
            'city' => $this->string(),
            'country' => $this->string(),
            'address' => $this->string(),
            'postal_code' => $this->string(),
            'user_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-shipping_address-user_id}}',
            '{{%shipping_address}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-shipping_address-user_id}}',
            '{{%shipping_address}}',
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
            '{{%fk-shipping_address-user_id}}',
            '{{%shipping_address}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-shipping_address-user_id}}',
            '{{%shipping_address}}'
        );

        $this->dropTable('{{%shipping_address}}');
    }
}
