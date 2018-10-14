<?php

use yii\db\Migration;

class m180704_111954_add_column_user_role extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'role', $this->integer()->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'role');
    }
}
