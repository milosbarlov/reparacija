<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_111012_change_field extends Migration
{
    public function up()
    {
        $this->alterColumn('content', 'content', 'varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL');
    }

    public function down()
    {
        echo "m150729_111012_change_field cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
