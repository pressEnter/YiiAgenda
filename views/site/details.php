<?php
/**
 * @var yii\base\View $this
 */
$this->title = 'Agenda - Card details';
?>
<h3>Card details</h3>
<table class="table table-bordered table-hover">
	<tbody>
		<tr>
			<th>ID</th>
			<td><?php echo $card->id; ?></td>
		</tr>
		<tr>
			<th>Title</th>
			<td><?php echo $card->title; ?></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo $card->name; ?></td>
		</tr>
		<tr>
			<th>Category</th>
			<td><?php echo $card->category->name . " | " . $card->category->color; ?></td>
		</tr>
	</tbody>
</table>
