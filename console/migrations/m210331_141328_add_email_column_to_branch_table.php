<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%branch}}`.
 */
class m210331_141328_add_email_column_to_branch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('branch', 'email', $this->string());
        $this->addColumn('branch', 'phone_number', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('branch', 'email', $this->string());
        $this->dropColumn('branch', 'phone_number', $this->string());
    }
}
