<?php

use yii\db\Migration;

/**
 * Class m191114_023408_update_news_table_with_date
 */
class m191114_023408_update_news_table_with_date extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    // addColumn(table name, field name, type of data)
        $this->addColumn('news', 'created_at', $this->timestamp());
        $this->addColumn('news', 'updated_at', $this->string());
        $this->addColumn('news', 'created_by', $this->integer());
        $this->addColumn('news', 'updated_by', $this->integer());
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191114_023408_update_news_table_with_date cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191114_023408_update_news_table_with_date cannot be reverted.\n";

        return false;
    }
    */
}
