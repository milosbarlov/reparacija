<?php
/**
 * Created by PhpStorm.
 * User: Milos Barlov <mbarlov> milosbarlov@gmail.com
 * Date: 16.7.15. \
 * Time: 12.02
 */

namespace common\models;


class History extends Content
{
    public static function find()
    {
        return parent::find()->where('type = 8');
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->type = 8;
            $this->updated_by = \Yii::$app->user->identity->id;
            return true;
        } else {
            return false;
        }
    }

}