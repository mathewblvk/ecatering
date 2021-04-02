<?php

use yii\db\Migration;

/**
 * Class m210325_084303_add_department_id_to_user_table
 */
class m210325_084303_add_department_id_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','department',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user','department',$this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210325_084303_add_department_id_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
