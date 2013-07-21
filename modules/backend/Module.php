<?php

namespace app\modules\backend;

use Yii;
use yii\base\View;


class Module extends \yii\base\Module
{
	public $enabled;
	//public $layout = '@app/views/layouts/main';
	public $layout = 'main';

	public function init()
	{
		parent::init();
		if (!$this->enabled) {
			return;
		}
	}
}
