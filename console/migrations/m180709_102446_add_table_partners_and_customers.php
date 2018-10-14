<?php

use yii\db\Migration;

class m180709_102446_add_table_partners_and_customers extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%partners_and_customers}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->null(),
            'title_en' => $this->string()->null(),
            'title_kz' => $this->string()->null(),
            'text' => $this->text()->null(),
            'text_en' => $this->text()->null(),
            'text_kz' => $this->text()->null(),
            'doc' => $this->string()->null(),
            'doc_en' => $this->string()->null(),
            'doc_kz' => $this->string()->null(),
            'keywords' => $this->string()->null(),
            'description' => $this->string()->null(),
            'url' => $this->string()->null(),
            'status' => $this->integer()->null(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%partners_and_customers}}');
    }
}
