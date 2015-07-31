<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_105444_change_content_column extends Migration
{
    public function up()
    {
        $this->alterColumn('content','content','varchar(255) not null');

    }

    public function down()
    {
        echo "m150729_105444_change_content_column cannot be reverted.\n";

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
