<?php

use yii\db\Migration;

class m180705_063440_add_menu_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'name_en' => $this->string()->notNull(),
            'name_kz' => $this->string()->notNull(),
            'text' => $this->text(),
            'title' => $this->string(),
            'description' => $this->text(),
            'keywords' => $this->string(),
            'url' => $this->string()->notNull(),
            'parent_id' => $this->integer()->null(),
            'sort_top' => $this->integer()->null(),
            'sort_footer' => $this->integer()->null(),
            'footer' => $this->integer()->null(),
            'top' => $this->integer()->null(),
            'status' => $this->integer()->null(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%menu}}');
    }
}
