<div class="page-header">
	<h1><?php echo $total ; ?> Articles</h1>
</div>
<table  class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Statut</th>
			<th>Titre</th>
			<th>Actions</th>
			<th>Category</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $k => $v) : ?>
			<tr>
				<td><?php echo $v->id ; ?></td>
				<td><span class="label<?php echo ($v->online==1)?' label-success':' label-warning';?>">
				<?php echo ($v->online==1)?'En ligne':'Hors ligne';?>
				</span></td>
				<td><?php echo $v->name ; ?></td>
				<td>
					<a href="<?php echo Router::url('admin/posts/edit/'.$v->id); ?>">Editer</a>
					<a onclick="return confirm('Voulez vous supprimer ce post ?') ;" href="<?php echo Router::url('admin/posts/delete/'.$v->id); ?>">Supprimer</a>
				</td>
				<td><?php echo $v->catname; ?></td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>
<hr>
<div class="hero-unit">
	 <a href="<?php echo Router::url('admin/posts/edit') ;?>"  class="btn btn-primary">Ajouter un article</a>
</div>
