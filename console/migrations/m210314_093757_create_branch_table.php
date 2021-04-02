<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%branch}}`.
 */
class m210314_093757_create_branch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%branch}}', [
            'id' => $this->primaryKey(),
            'company_name' => $this->string(512),
            'branch_name' => $this->string(512),
            'branch_address' => $this->string(512),
            'created_at' => $this->integer(),
            'branch_status' => $this->string(512),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%branch}}');
    }
}
