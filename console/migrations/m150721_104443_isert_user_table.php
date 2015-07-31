<?php

use yii\db\Schema;
use yii\db\Migration;

class m150721_104443_isert_user_table extends Migration
{
    public function up()
    {
        $this->dropTable('menu');
        $this->insert('user',[
            'username' => 'milos',
            'auth_key' => 'phikOHuFwRO33YwBDjvp3nhkfFlWn3UZ',
            'password_hash' => '$2y$13$d.P4SJh/Oz.i6uUCPawSWeEyEAz3OSD6Ew5Pro5dLPLrfxTYKqg.i',
            'password_reset_token' => '',
            'email' => 'milosbarlov@gmail.com',
            'status' => '10',
        ]);

    }

    public function down()
    {
        echo "m150721_104443_isert_user_table cannot be reverted.\n";

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
