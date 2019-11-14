<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m191112_065020_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title'=> $this->string()->unique()->notNull(),
            'date_time'=>$this->timestamp(),
            'place'=>$this->string(),
            'detail'=>$this->text(),
            'category_id'=>$this->integer(),
            'photo'=>$this->string(128),
            'video'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
