<?php
use \yii\widgets\DetailView;
/**
 * @var yii\base\View $this
 */
$this->title = 'Agenda - Card details';
?>
<h3>Card details</h3>
<?php 
echo DetailView::widget(array(
	'model' => $card,
	'attributes' => array(
		'id',
		'title:html',
		'name',
		array(
			'label' => 'Category',
			'value' => $card['category']['name'] . " | " . $card['category']['color'],
		),
	),
));
?>
 
