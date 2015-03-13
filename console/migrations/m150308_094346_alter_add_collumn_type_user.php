<?php

use yii\db\Schema;
use yii\db\Migration;

class m150308_094346_alter_add_collumn_type_user extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'type', 'int');
    }

    public function down()
    {
        echo "m150308_094346_alter_add_collumn_type_user cannot be reverted.\n";

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
