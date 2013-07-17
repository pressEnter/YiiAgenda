<?php

class m130717_044220_create_cards_table extends \yii\db\Migration
{
	public function up()
	{
		$this->db->createCommand()->createTable('cards', array(
            'id' => 'pk',
            'name' => 'string(255) NOT NULL',
            'title' => 'string(255) NULL',
            'company' => 'string(255) NULL',
            'birthday' => 'datetime NULL',
            'alias' => 'string(255) NULL',
            'personal_adress_line1' => 'string(255) NULL',
            'personal_adress_line2' => 'string(255) NULL',
            'personal_adress_line3' => 'string(255) NULL',
            'personal_city' => 'string(255) NULL',
            'personal_state' => 'string(255) NULL',
            'personal_zip_code' => 'string(255) NULL',
            'personal_country' => 'string(255) NULL',
            'personal_fax' => 'string(255) NULL',
            'personal_phone_1' => 'string(255) NULL',
            'personal_phone_2' => 'string(255) NULL',
            'personal_phone_3' => 'string(255) NULL',
            'personal_phone_4' => 'string(255) NULL',
            'personal_phone_5' => 'string(255) NULL',
            'personal_phone_6' => 'string(255) NULL',
            'personal_email_1' => 'string(255) NULL',
            'personal_email_2' => 'string(255) NULL',
            'personal_email_3' => 'string(255) NULL',
            'personal_web' => 'string(255) NULL',
            'bussines_adress_line1' => 'string(255) NULL',
            'bussines_adress_line2' => 'string(255) NULL',
            'bussines_adress_line3' => 'string(255) NULL',
            'bussines_city' => 'string(255) NULL',
            'bussines_state' => 'string(255) NULL',
            'bussines_zip_code' => 'string(255) NULL',
            'bussines_country' => 'string(255) NULL',
            'bussines_fax' => 'string(255) NULL',
            'bussines_phone_1' => 'string(255) NULL',
            'bussines_phone_2' => 'string(255) NULL',
            'bussines_phone_3' => 'string(255) NULL',
            'bussines_phone_4' => 'string(255) NULL',
            'bussines_phone_5' => 'string(255) NULL',
            'bussines_phone_6' => 'string(255) NULL',
            'bussines_email_1' => 'string(255) NULL',
            'bussines_email_2' => 'string(255) NULL',
            'bussines_email_3' => 'string(255) NULL',
            'assistant' => 'string(255) NULL',
            'notes' => 'string(255) NULL',
            'verified' => 'boolean NULL',
            'created_at' => 'timestamp NULL',
            'created_by' => 'integer NULL',
            'updated_at' => 'timestamp NULL',
            'updated_by' => 'integer NULL',
        ))->execute();
	}

	public function down()
	{
		$this->db->createCommand()->dropTable('cards')->execute();
	}
}
