<?php
use yii\widgets\LinkPager;
use yii\widgets\Menu;
use yii\widgets\GridView;
use yii\bootstrap\Nav;
use yii\helpers\Html;
/**
 * @var yii\base\View $this
 */
$this->title = 'Agenda';
?>
<h3>Provider: Default</h3>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Name</th>
			<th>Category</th>
			<th>Actions</th>
		</tr>	
	</thead>
	<tbody>
	<?php foreach($cards as $card): ?>
		<tr>
			<td><?php echo $card->id; ?></td>
			<td><?php echo $card->title; ?></td>
			<td><?php echo $card->name; ?></td>
			<td><?php echo $card->category->name . " | " . $card->category->color; ?></td>
			<td>
			<?php echo Nav::widget(array(
				'options' => array('class' => 'nav nav-list'),
				'encodeLabels' => false,
				'items' => array(
					array(
						'label' => '<i class="icon-zoom-in"></i> Details',
						'url' => array('/site/details', 'card_id' => $card->id),
					),
				),
			)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php 
echo LinkPager::widget(array(
	'pagination' => $pages,
));
?>
<h3>Provider: Array</h3>
<?php 
echo GridView::widget(array(
	'dataProvider' => $arrayProvider,
	'layout' => "{summary}\n{items}\n{pager}",
	'columns' => array(
		'id',
		'title',
		'name',
		array(
			'header' => 'Category',
		),
		array(
			'header' => 'Actions',
		),
	),
));
?>
<h3>Provider: Active</h3>
<?php 
echo GridView::widget(array(
	'dataProvider' => $activeProvider,
	'columns' => array(
		'id',
		'title',
		'name',
		array(
			'header' => 'Category',
		),
		array(
			'header' => 'Actions',
		),
	),
));
?>
<?php //endif; ?>
