<?php


namespace app\models;


use yii\base\Model;

class UserJson extends  Model
{
    public  static function JsonArray()
    {
        $file = file_get_contents(\Yii::getAlias('@app/models/file.json'));
        $file = json_decode($file , true);
        return ($file);
    }
}
