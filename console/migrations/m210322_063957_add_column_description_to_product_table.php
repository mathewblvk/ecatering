<?php

use yii\db\Migration;

/**
 * Class m210322_063957_add_column_description_to_product_table
 */
class m210322_063957_add_column_description_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}','description',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product}}','description');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210322_063957_add_column_description_to_product_table cannot be reverted.\n";

        return false;
    }
    */
}
