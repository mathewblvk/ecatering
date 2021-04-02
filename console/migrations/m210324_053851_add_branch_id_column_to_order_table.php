<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%order}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%branch}}`
 */
class m210324_053851_add_branch_id_column_to_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'branch_id', $this->integer()->notNull());

        // creates index for column `branch_id`
        $this->createIndex(
            '{{%idx-order-branch_id}}',
            '{{%order}}',
            'branch_id'
        );

        // add foreign key for table `{{%branch}}`
        $this->addForeignKey(
            '{{%fk-order-branch_id}}',
            '{{%order}}',
            'branch_id',
            '{{%branch}}',
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
            '{{%fk-order-branch_id}}',
            '{{%order}}'
        );

        // drops index for column `branch_id`
        $this->dropIndex(
            '{{%idx-order-branch_id}}',
            '{{%order}}'
        );

        $this->dropColumn('{{%order}}', 'branch_id');
    }
}
