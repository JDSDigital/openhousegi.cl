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

	  // Define if it's for sale or for rent
      $this->createTable('xproperties_contracts', [
        'id' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'createdAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updatedAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Define if it's an apartment, house or similar
      $this->createTable('xproperties_types', [
        'id' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'createdAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updatedAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Define properties
      $this->createTable('xproperties_properties', [
        'id' => Schema::TYPE_PK,
        'type_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'contract_id' => Schema::TYPE_INTEGER . ' NOT NULL',
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
		'taken' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',

        'status' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',
        'createdAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updatedAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Define the properties images
      $this->createTable('xproperties_images', [
        'id' => Schema::TYPE_PK,
        'property_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'file' => Schema::TYPE_STRING . ' NOT NULL',
        'cover' => Schema::TYPE_STRING . ' DEFAULT 0',
        'createdAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updatedAt' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

      $this->createIndex('idx-xproperties_properties-type_id', 'xproperties_properties', 'type_id');
      $this->createIndex('idx-xproperties_properties-contract_id', 'xproperties_properties', 'contract_id');
      $this->createIndex('idx-xproperties_images-property_id', 'xproperties_images', 'property_id');

      $this->addForeignKey('fk-xproperties_properties-xproperties_types', 'xproperties_properties', 'type_id', 'xproperties_types', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fk-xproperties_properties-xproperties_contracts', 'xproperties_properties', 'contract_id', 'xproperties_contracts', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fk-xproperties_images-xproperties_properties', 'xproperties_images', 'property_id', 'xproperties_properties', 'id', 'CASCADE', 'CASCADE');

    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-xproperties_properties-xproperties_types', 'xproperties_properties');
        $this->dropForeignKey('fk-xproperties_properties-xproperties_contracts', 'xproperties_properties');
        $this->dropForeignKey('fk-xproperties_images-xproperties_properties', 'xproperties_images');

        $this->dropIndex('idx-xproperties_properties-type_id', 'xproperties_properties');
        $this->dropIndex('idx-xproperties_properties-contract_id', 'xproperties_properties');
        $this->dropIndex('idx-xproperties_images-property_id', 'xproperties_images');

        $this->dropTable('xproperties_types');
        $this->dropTable('xproperties_contracts');
        $this->dropTable('xproperties_images');
        $this->dropTable('xproperties_properties');
    }
}
