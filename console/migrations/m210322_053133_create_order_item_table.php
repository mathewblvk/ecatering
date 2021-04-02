<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_item}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product}}`
 * - `{{%order}}`
 */
class m210322_053133_create_order_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_item}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'order_id' => $this->integer()->notNull(),
            'quantity' => $this->string(),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-order_item-product_id}}',
            '{{%order_item}}',
            'product_id'
        );

        // add foreign key for table `{{%product}}`
        $this->addForeignKey(
            '{{%fk-order_item-product_id}}',
            '{{%order_item}}',
            'product_id',
            '{{%product}}',
            'product_id',
            'CASCADE'
        );

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-order_item-order_id}}',
            '{{%order_item}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-order_item-order_id}}',
            '{{%order_item}}',
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
        // drops foreign key for table `{{%product}}`
        $this->dropForeignKey(
            '{{%fk-order_item-product_id}}',
            '{{%order_item}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-order_item-product_id}}',
            '{{%order_item}}'
        );

        // drops foreign key for table `{{%order}}`
        $this->dropForeignKey(
            '{{%fk-order_item-order_id}}',
            '{{%order_item}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-order_item-order_id}}',
            '{{%order_item}}'
        );

        $this->dropTable('{{%order_item}}');
    }
}
