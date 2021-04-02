<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%discount_association}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%discount}}`
 */
class m210329_140224_create_discount_association_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%discount_association}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'discount_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-discount_association-user_id}}',
            '{{%discount_association}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-discount_association-user_id}}',
            '{{%discount_association}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `discount_id`
        $this->createIndex(
            '{{%idx-discount_association-discount_id}}',
            '{{%discount_association}}',
            'discount_id'
        );

        // add foreign key for table `{{%discount}}`
        $this->addForeignKey(
            '{{%fk-discount_association-discount_id}}',
            '{{%discount_association}}',
            'discount_id',
            '{{%discount}}',
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
            '{{%fk-discount_association-user_id}}',
            '{{%discount_association}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-discount_association-user_id}}',
            '{{%discount_association}}'
        );

        // drops foreign key for table `{{%discount}}`
        $this->dropForeignKey(
            '{{%fk-discount_association-discount_id}}',
            '{{%discount_association}}'
        );

        // drops index for column `discount_id`
        $this->dropIndex(
            '{{%idx-discount_association-discount_id}}',
            '{{%discount_association}}'
        );

        $this->dropTable('{{%discount_association}}');
    }
}
