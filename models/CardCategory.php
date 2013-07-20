<?php

namespace app\models;

/**
 * Class CardCategory
 * @package app\models
 * 
 */
class CardCategory extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'card_categories';
    }
    
    public function getCards()
    {
		return $this->hasMany('Card', array('category_id' => 'id'));
	}
}
