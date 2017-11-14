<?php

use yii\db\Migration;

/**
 * Class m171114_054225_NuocHoa
 */
class m171114_054225_NuocHoa extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%perfume}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'details' => $this->text()->notNull(),
            'price' => $this->string()->notNull(),
            'image' => $this->string(),
            'quantity' => $this->string()->notNull(),

            'saleoff' => $this->smallInteger()->notNull()->defaultValue(false),
            'status'    =>$this->boolean()->defaultValue(true),
            'brand' =>$this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%perfume}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171114_054225_NuocHoa cannot be reverted.\n";

        return false;
    }
    */
}
