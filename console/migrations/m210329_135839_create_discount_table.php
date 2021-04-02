<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%discount}}`.
 */
class m210329_135839_create_discount_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%discount}}', [
            'id' => $this->primaryKey(),
            'discount_type' => $this->string(),
            'discount_name' => $this->string(),
            'priority' => $this->string(),
            'start_date' => $this->timestamp(),
            'end_data' => $this->timestamp(),
            'description' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%discount}}');
    }
}
