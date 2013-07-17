<?php

namespace app\models;

/**
 * Class Card
 * @package app\models
 * 
 */
class Card extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'cards';
    }

}
