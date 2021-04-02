<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%department}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%branch}}`
 */
class m210314_094244_create_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%department}}', [
            'id' => $this->primaryKey(),
            'department_name' => $this->string(512),
            'branch_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `branch_id`
        $this->createIndex(
            '{{%idx-department-branch_id}}',
            '{{%department}}',
            'branch_id'
        );

        // add foreign key for table `{{%branch}}`
        $this->addForeignKey(
            '{{%fk-department-branch_id}}',
            '{{%department}}',
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
            '{{%fk-department-branch_id}}',
            '{{%department}}'
        );

        // drops index for column `branch_id`
        $this->dropIndex(
            '{{%idx-department-branch_id}}',
            '{{%department}}'
        );

        $this->dropTable('{{%department}}');
    }
}
