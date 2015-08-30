<?php

use yii\db\Schema;
use yii\db\Migration;

class m150830_130135_change_fields extends Migration
{
    public function up()
    {
        $this->alterColumn('content', 'title', 'varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL');
        $this->alterColumn('content', 'excerpt', 'varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL');

    }

    public function down()
    {
        echo "m150830_130135_change_fields cannot be reverted.\n";

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
