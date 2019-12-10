<?php

use app\models\AuthAssignment;
use app\models\UserJson;
use mdm\admin\models\User;
use yii\db\Migration;

/**
 * Class m191115_185602_insert_data_to_table_auth_assignment_and_user_form_json
 */
class m191115_185602_insert_data_to_table_auth_assignment_and_user_form_json extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $userJson = UserJson::JsonArray();
        foreach ($userJson as $userKey => $userValue) {
            $user = new User();
            $user->username = $userJson[$userKey]['Title and Name (format is first name followed by surname)'];
            $user->rank = ($userJson[$userKey]['JobTitle']);
            $user->user_email = ($userJson[$userKey]['E-mail address']);
            $user->password_hash = Yii::$app->security->generatePasswordHash('password');
            if ($user->save(false)) {
                $authAssignment = new  AuthAssignment;
                $authAssignment->item_name = 'stuff';
                $authAssignment->user_id = $user->id;
                $authAssignment->save(false);
            };
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191115_185602_insert_data_to_table_auth_assignment_and_user_form_json cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191115_185602_insert_data_to_table_auth_assignment_and_user_form_json cannot be reverted.\n";

        return false;
    }
    */
}
