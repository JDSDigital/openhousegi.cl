<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180731_112741_create_properties_tables
 */
class m180731_112741_create_properties_tables extends Migration
{
    public function safeUp()
    {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
        // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

      $this->createTable('xproperties_types', [
        'id' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'createdAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updatedAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

      $this->createTable('xproperties_properties', [
        'id' => Schema::TYPE_PK,
        'type_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'title' => Schema::TYPE_INTEGER . ' NOT NULL',
        'summary' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'description' => Schema::TYPE_TEXT . ' DEFAULT NULL',
        'price' => Schema::TYPE_FLOAT . ' DEFAULT 0',
        'featured' => Schema::TYPE_INTEGER . ' DEFAULT 0',
        'area' => Schema::TYPE_FLOAT . ' DEFAULT NULL',
        'rooms' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'toilets' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'garage' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'address' => Schema::TYPE_STRING . ' DEFAULT NULL',
        'city' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'long' => Schema::TYPE_FLOAT . ' DEFAULT 0',
        'lat' => Schema::TYPE_FLOAT . ' DEFAULT 0',
        'visits' => Schema::TYPE_INTEGER . ' DEFAULT 0',

        'status' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',
        'createdAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updatedAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

      $this->createIndex('idx-xproperties_properties-type_id', 'xproperties_properties', 'type_id');
      $this->addForeignKey('fk-xproperties_properties-xproperties_types', 'xproperties_properties', 'type_id', 'xproperties_types', 'id', 'CASCADE', 'CASCADE');

    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-xproperties_properties-xproperties_types', 'xproperties_properties');
        $this->dropIndex('idx-xproperties_properties-type_id', 'xproperties_properties');

        $this->dropTable('xproperties_types');
        $this->dropTable('xproperties_properties');
    }
}
