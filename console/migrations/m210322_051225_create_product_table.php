<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%branch}}`
 * - `{{%status}}`
 * - `{{%product_category}}`
 */
class m210322_051225_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'product_id' => $this->primaryKey(),
            'product_name' => $this->string(),
            'product_price' => $this->string(),
            'code' => $this->string(),
            'branch_id' => $this->integer()->notNull(),
            'status_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `branch_id`
        $this->createIndex(
            '{{%idx-product-branch_id}}',
            '{{%product}}',
            'branch_id'
        );

        // add foreign key for table `{{%branch}}`
        $this->addForeignKey(
            '{{%fk-product-branch_id}}',
            '{{%product}}',
            'branch_id',
            '{{%branch}}',
            'id',
            'CASCADE'
        );

        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-product-status_id}}',
            '{{%product}}',
            'status_id'
        );

        // add foreign key for table `{{%status}}`
        $this->addForeignKey(
            '{{%fk-product-status_id}}',
            '{{%product}}',
            'status_id',
            '{{%status}}',
            'id',
            'CASCADE'
        );

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-product-category_id}}',
            '{{%product}}',
            'category_id'
        );

        // add foreign key for table `{{%product_category}}`
        $this->addForeignKey(
            '{{%fk-product-category_id}}',
            '{{%product}}',
            'category_id',
            '{{%product_category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%branch}}`
        $this->dropForeignKey(
            '{{%fk-product-branch_id}}',
            '{{%product}}'
        );

        // drops index for column `branch_id`
        $this->dropIndex(
            '{{%idx-product-branch_id}}',
            '{{%product}}'
        );

        // drops foreign key for table `{{%status}}`
        $this->dropForeignKey(
            '{{%fk-product-status_id}}',
            '{{%product}}'
        );

        // drops index for column `status_id`
        $this->dropIndex(
            '{{%idx-product-status_id}}',
            '{{%product}}'
        );

        // drops foreign key for table `{{%product_category}}`
        $this->dropForeignKey(
            '{{%fk-product-category_id}}',
            '{{%product}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-product-category_id}}',
            '{{%product}}'
        );

        $this->dropTable('{{%product}}');
    }
}
