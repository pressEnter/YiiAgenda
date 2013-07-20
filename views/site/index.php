<?php
use yii\widgets\LinkPager;
/**
 * @var yii\base\View $this
 */
$this->title = 'Agenda';
?>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Name</th>
			<th>Category</th>
		</tr>	
	</thead>
	<tbody>
	<?php foreach($cards as $card): ?>
		<tr>
			<td><?php echo $card->id; ?></td>
			<td><?php echo $card->title; ?></td>
			<td><?php echo $card->name; ?></td>
			<td><?php echo $card->category->name . " | " . $card->category->color; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php 
echo LinkPager::widget(array(
	'pagination' => $pages,
));
?>
<!--

<div class="jumbotron">
	<h1>Welcome!</h1>

	<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus
		commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<a class="btn btn-large btn-success" href="http://www.yiiframework.com">Get started with Yii</a>
</div>

<hr>
-->
<!-- Example row of columns -->
<!--
<div class="row-fluid">
	<div class="span4">
		<h2>Heading</h2>

		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
			condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
			Donec sed odio dui. </p>

		<p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
	<div class="span4">
		<h2>Heading</h2>

		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
			condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
			Donec sed odio dui. </p>

		<p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
	<div class="span4">
		<h2>Heading</h2>

		<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
			felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
			massa.</p>

		<p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
</div>
-->
