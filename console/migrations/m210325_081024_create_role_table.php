<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%role}}`.
 */
class m210325_081024_create_role_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%role}}', [
            'id' => $this->primaryKey(),
            'role_name' => $this->string(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%role}}');
    }
}
