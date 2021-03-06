<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
app\config\AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title><?php echo Html::encode($this->title); ?></title>
	<?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="container">
	<div class="masthead">
		<h3 class="muted">Agenda - Backend</h3>

		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<?php echo Menu::widget(array(
						'options' => array('class' => 'nav'),
						'items' => array(
							array('label' => 'Home', 'url' => array('/site/index')),
							array('label' => 'Backend', 'url' => array('/backend/default/index'), 'visible' => !Yii::$app->user->isGuest),
							Yii::$app->user->isGuest ?
								array('label' => 'Login', 'url' => array('/site/login')) :
								array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
						),
					)); ?>
				</div>
			</div>
		</div>
		<!-- /.navbar -->
	</div>

	<?php echo Breadcrumbs::widget(array(
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : array(),
	)); ?>
	<?php echo $content; ?>

	<hr>

	<div class="footer">
		<p>&copy; pressEnter <?php echo date('Y'); ?></p>
		<p>
			<?php echo Yii::powered(); ?>
			Template by <a href="http://twitter.github.io/bootstrap/">Twitter Bootstrap</a>
		</p>
	</div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
