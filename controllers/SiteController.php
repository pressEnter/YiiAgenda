<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Card;
use app\models\CardCategory;
use yii\data\Pagination;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
	public function actions()
	{
		return array(
			'captcha' => array(
				'class' => 'yii\web\CaptchaAction',
				'fixedVerifyCode' => YII_ENV === 'test' ? 'testme' : null,
			),
		);
	}

	public function actionIndex($provider = 'default')
	{
		$query = Card::find();
		$countQuery = clone $query;
		$pages = new Pagination(array('totalCount' => $countQuery->count(), 'pageSize' => 5));
		$cards = $query->offset($pages->offset)
			->limit($pages->limit)
			->with('category')
			->all();
		$provider = in_array($provider, array('default', 'array', 'active-record')) ? $provider : 'default';
		return $this->render('index', array(
			'cards' => $cards,
			'pages' => $pages,
			'provider' => $provider,
			'arrayProvider' => new ArrayDataProvider(array('allItems' => $cards, 'pagination' => array('pageSize' => 1),)),
			'activeProvider' => new ActiveDataProvider(array('query' => $query, 'pagination' => array('pageSize' => 1),)),
		));
	}
	
	
	/**
	 * Card details page
	 * 
	 */ 
	public function actionDetails($card_id){
		//$card = Card::find(array('id' => $card_id))->with('category');
		$card = Card::find()
			->where(array('cards.id' => $card_id))
			->join('INNER JOIN', 'card_categories', 'cards.category_id = card_categories.id')
			->with('category')
			->asArray()
			->one();
			
		return $this->render('details', array(
			'card' => $card,
		));
	}

	public function actionLogin()
	{
		$model = new LoginForm();
		if ($model->load($_POST) && $model->login()) {
			return $this->redirect(array('site/index'));
		} else {
			return $this->render('login', array(
				'model' => $model,
			));
		}
	}

	public function actionLogout()
	{
		Yii::$app->user->logout();
		return $this->redirect(array('site/index'));
	}

	public function actionContact()
	{
		$model = new ContactForm;
		if ($model->load($_POST) && $model->contact(Yii::$app->params['adminEmail'])) {
			Yii::$app->session->setFlash('contactFormSubmitted');
			return $this->refresh();
		} else {
			return $this->render('contact', array(
				'model' => $model,
			));
		}
	}

	public function actionAbout()
	{
		return $this->render('about');
	}
}
