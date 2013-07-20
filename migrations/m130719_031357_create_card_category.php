<?php

class m130719_031357_create_card_category extends \yii\db\Migration
{
	public function up()
	{
		$this->db->createCommand()->createTable('card_categories', array(
			'id' => 'pk',
			'name' => 'string(255) NOT NULL',
			'color' => 'string(255) NULL',
        ))->execute();
        //
        $this->db->createCommand()->addColumn('cards', 'category_id', 'integer NULL')->execute();
        $this->db->createCommand()->addForeignKey('cards_category_fk', 'cards', 'category_id', 'card_categories', 'id', 'RESTRICT', 'CASCADE')->execute();
	}

	public function down()
	{
		$this->db->createCommand()->dropTable('card_categories')->execute();
        $this->db->createCommand()->dropColumn('cards', 'category_id')->execute();
	}
}
