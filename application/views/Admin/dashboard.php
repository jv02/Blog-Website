<?php include('header.php') ?>
<div class="container" style="margin-top: 50px">
<h2>welcome admin</h2>
<div class="table">
	
<table>
	<thead>
	<tr>
		<th>ID</th>
		<th>Article Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
</thead>
<tbody>

	<?php foreach ($articles as $art): ?>
	<tr>
		<td>1</td>
		<td><?php echo $art->article_title; ?></td>
		<td><a href="#" class="btn btn-primary">Edit</a></td>
		<td><a href="#" class="btn btn-danger">Delete</a></td>
	</tr>
	<?php endforeach; ?>
	
	</tbody>
</table>
</div>
</div>
<?php include('footer.php') ?>