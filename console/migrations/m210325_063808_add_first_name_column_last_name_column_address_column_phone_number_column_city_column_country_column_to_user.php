<?php

use yii\db\Migration;

/**
 * Class m210325_063808_add_first_name_column_last_name_column_address_column_phone_number_column_city_column_country_column_to_user
 */
class m210325_063808_add_first_name_column_last_name_column_address_column_phone_number_column_city_column_country_column_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'first_name', $this->string());
        $this->addColumn('user', 'last_name', $this->string());
        $this->addColumn('user', 'address', $this->string());
        $this->addColumn('user', 'phone_number', $this->string());
        $this->addColumn('user', 'city', $this->string());
        $this->addColumn('user', 'country', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'first_name', $this->string());
        $this->dropColumn('user', 'last_name', $this->string());
        $this->dropColumn('user', 'address', $this->string());
        $this->dropColumn('user', 'phone_number', $this->string());
        $this->dropColumn('user', 'city', $this->string());
        $this->dropColumn('user', 'country', $this->string());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210325_063808_add_first_name_column_last_name_column_address_column_phone_number_column_city_column_country_column_to_user cannot be reverted.\n";

        return false;
    }
    */
}
