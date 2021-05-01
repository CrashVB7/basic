<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%place}}`.
 */
class m210501_064135_create_place_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%place}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%place}}');
    }
}
