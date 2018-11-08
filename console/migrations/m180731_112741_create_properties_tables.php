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

	  // Defines regions as a category
      $this->createTable('xproperties_regions', [
        'id' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'created_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updated_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Defines the communes in the region
      $this->createTable('xproperties_communes', [
        'id' => Schema::TYPE_PK,
        'region_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'created_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updated_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Define if it's for sale or for rent
      $this->createTable('xproperties_contracts', [
        'id' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'created_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updated_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Define if it's an apartment, house or similar
      $this->createTable('xproperties_types', [
        'id' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'created_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updated_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Define properties
      $this->createTable('xproperties_properties', [
        'id' => Schema::TYPE_PK,
        'type_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'contract_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'title' => Schema::TYPE_STRING . ' NOT NULL',
        'summary' => Schema::TYPE_STRING . ' DEFAULT NULL',
        'description' => Schema::TYPE_TEXT . ' DEFAULT NULL',
        'price' => Schema::TYPE_FLOAT . ' DEFAULT 0',
        'uf' => Schema::TYPE_FLOAT . ' DEFAULT NULL',
        'featured' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',
        'area' => Schema::TYPE_FLOAT . ' DEFAULT NULL',
        'rooms' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'toilets' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'garage' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'address' => Schema::TYPE_STRING . ' DEFAULT NULL',
        'zone' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'long' => Schema::TYPE_FLOAT . ' DEFAULT 0',
        'lat' => Schema::TYPE_FLOAT . ' DEFAULT 0',
        'visits' => Schema::TYPE_INTEGER . ' DEFAULT 0',
		    'taken' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',

        'status' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',
        'created_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updated_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

	  // Define the properties images
      $this->createTable('xproperties_images', [
        'id' => Schema::TYPE_PK,
        'property_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'file' => Schema::TYPE_STRING . ' NOT NULL',
        'cover' => Schema::TYPE_BOOLEAN . ' DEFAULT 0',
        'created_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        'updated_at' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
      ], $tableOptions);

      $this->batchInsert('{{%xproperties_regions}}', ['name'], [
          ['Santiago'],
          ['V Región'],
      ]);

      $this->batchInsert('{{%xproperties_communes}}', ['region_id', 'name'], [
        [1, 'Cerrillos'],
        [1, 'Cerro Navia'],
        [1, 'Conchalí'],
        [1, 'El Bosque'],
        [1, 'Estación Central'],
        [1, 'Huechuraba'],
        [1, 'Independencia'],
        [1, 'La Cisterna'],
        [1, 'La Florida'],
        [1, 'La Granja'],
        [1, 'La Pintana'],
        [1, 'La Reina'],
        [1, 'Las Condes'],
        [1, 'Lo Barnechea'],
        [1, 'Lo Espejo'],
        [1, 'Lo Prado'],
        [1, 'Macul'],
        [1, 'Maipú'],
        [1, 'Ñuñoa'],
        [1, 'Pedro Aguirre Cerda'],
        [1, 'Peñalolén'],
        [1, 'Providencia'],
        [1, 'Pudahuel'],
        [1, 'Quilicura'],
        [1, 'Quinta Normal'],
        [1, 'Recoleta'],
        [1, 'Renca'],
        [1, 'San Joaquín'],
        [1, 'San Miguel'],
        [1, 'San Ramón'],
        [1, 'Santiago'],
        [1, 'Vitacura'],

        [2, 'Algarrobo'],
        [2, 'Cabildo'],
        [2, 'Calera'],
        [2, 'Calle Larga'],
        [2, 'Cartagena'],
        [2, 'Casa Blanca'],
        [2, 'Catemu'],
        [2, 'Con Con'],
        [2, 'El Quisco'],
        [2, 'El Tabo'],
        [2, 'Hijuelas'],
        [2, 'La Cruz'],
        [2, 'La Ligua'],
        [2, 'Limache'],
        [2, 'Llay Llay'],
        [2, 'Los Andes'],
        [2, 'Nogales'],
        [2, 'Olmué'],
        [2, 'Panquehue'],
        [2, 'Papudo'],
        [2, 'Petorca'],
        [2, 'Puchuncavi'],
        [2, 'Putaendo'],
        [2, 'Quillota'],
        [2, 'Quilpue'],
        [2, 'Quintero'],
        [2, 'Rinconada'],
        [2, 'San Esteban'],
        [2, 'San Felipe'],
        [2, 'Santa Maria'],
        [2, 'Santo Domingo'],
        [2, 'Valparaiso'],
        [2, 'Villa Alemana'],
        [2, 'Viña del Mar'],
        [2, 'Zapallar'],
      ]);

      $this->batchInsert('{{%xproperties_contracts}}', ['name'], [
          ['Arriendo'],
          ['Venta'],
      ]);

      $this->batchInsert('{{%xproperties_types}}', ['name'], [
          ['Departamento'],
          ['Casa'],
      ]);

      $this->createIndex('idx-xproperties_communes-region_id', 'xproperties_communes', 'region_id');
      $this->createIndex('idx-xproperties_properties-type_id', 'xproperties_properties', 'type_id');
      $this->createIndex('idx-xproperties_properties-contract_id', 'xproperties_properties', 'contract_id');
      $this->createIndex('idx-xproperties_properties-zone', 'xproperties_properties', 'zone');
      $this->createIndex('idx-xproperties_images-property_id', 'xproperties_images', 'property_id');

      $this->addForeignKey('fk-xproperties_communes-xproperties_regions', 'xproperties_communes', 'region_id', 'xproperties_regions', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fk-xproperties_properties-xproperties_types', 'xproperties_properties', 'type_id', 'xproperties_types', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fk-xproperties_properties-xproperties_contracts', 'xproperties_properties', 'contract_id', 'xproperties_contracts', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fk-xproperties_properties-xproperties_communes', 'xproperties_properties', 'zone', 'xproperties_communes', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fk-xproperties_images-xproperties_properties', 'xproperties_images', 'property_id', 'xproperties_properties', 'id', 'CASCADE', 'CASCADE');

    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-xproperties_communes-xproperties_regions', 'xproperties_communes');
        $this->dropForeignKey('fk-xproperties_properties-xproperties_types', 'xproperties_properties');
        $this->dropForeignKey('fk-xproperties_properties-xproperties_contracts', 'xproperties_properties');
        $this->dropForeignKey('fk-xproperties_properties-xproperties_communes', 'xproperties_properties');
        $this->dropForeignKey('fk-xproperties_images-xproperties_properties', 'xproperties_images');

        $this->dropIndex('idx-xproperties_communes-region_id', 'xproperties_communes');
        $this->dropIndex('idx-xproperties_properties-type_id', 'xproperties_properties');
        $this->dropIndex('idx-xproperties_properties-contract_id', 'xproperties_properties');
        $this->dropIndex('idx-xproperties_properties-zone', 'xproperties_properties');
        $this->dropIndex('idx-xproperties_images-property_id', 'xproperties_images');

        $this->dropTable('xproperties_communes');
        $this->dropTable('xproperties_regions');
        $this->dropTable('xproperties_types');
        $this->dropTable('xproperties_contracts');
        $this->dropTable('xproperties_images');
        $this->dropTable('xproperties_properties');
    }
}
