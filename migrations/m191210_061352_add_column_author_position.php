<?php

use yii\db\Migration;
use yii\helpers\ArrayHelper;

/**
 * Class m191210_061352_add_column_author_position
 */
class m191210_061352_add_column_author_position extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $columns = $this->db->getTableSchema('author', true)->columnNames;
        if (!ArrayHelper::isIn('author_position', $columns )) {
            $this->addColumn('author', 'author_position', $this->integer());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191210_061352_add_column_author_position cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191210_061352_add_column_author_position cannot be reverted.\n";

        return false;
    }
    */
}
