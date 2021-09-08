<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m210908_071311_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employees}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(16)->notNull(),
            'surname' => $this->string(16)->notNull(),
            'phone' => $this->string(16)->notNull(),
            'position' => $this->string(16)->notNull(),
            'status' => $this->boolean()->notNull(),
            'salary' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employees}}');
    }
}
