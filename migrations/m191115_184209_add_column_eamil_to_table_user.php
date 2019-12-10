<?php

use yii\db\Migration;

/**
 * Class m191115_184209_add_column_eamil_to_table_user
 */
class m191115_184209_add_column_eamil_to_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $columns  = $this->db->getTableSchema('user')->columns;
        if(!isset($columns['user_email'])){
            $this->addColumn('user' , 'user_email' , $this->string());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191115_184209_add_column_eamil_to_table_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191115_184209_add_column_eamil_to_table_user cannot be reverted.\n";

        return false;
    }
    */
}
