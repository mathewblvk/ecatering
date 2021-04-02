<?php

use yii\db\Migration;

/**
 * Class m210325_084134_add_branch_id_to_user_table
 */
class m210325_084134_add_branch_id_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'branch_id',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'branch_id',$this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210325_084134_add_branch_id_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
