<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\HttpException;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DefaultController extends Controller
{
	
	public function behaviors()
	{
		return array(
			'access' => array(
				'class' => \yii\web\AccessControl::className(),
				'rules' => array(
					// allow authenticated users
					array(
						'allow' => true,
						'roles' => array('@'),
					),
					// deny all
					array(
						'allow' => false,
					),
				),
			),
		);
	}


	public function actionIndex()
	{
		return $this->render('index', array(
		));
	}
}
