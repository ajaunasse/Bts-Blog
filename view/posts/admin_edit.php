<div class="page-header">
	<h1>Editer un article</h1>
</div>

<form action="<?php echo Router::url('admin/posts/edit/'.$id); ?>" method="post">
	<?php echo $this->Form->input('name','Titre'); ?>
  <?php echo $this->Form->input('slug','Url'); ?>
  <?php echo $this->Form->input('category_id','Catégorie',array('options' => $categories)); ?>
  <?php echo $this->Form->input('id','hidden'); ?>
	<?php echo $this->Form->input('content','Contenu',array('type'=>'textarea','class'=>'xxlarge wysiwyg','rows'=>5)); ?>
	<?php echo $this->Form->input('online','En ligne',array('type'=>'checkbox')); ?>
	<div class="actions">
		<input type="submit" class="btn primary" value="Envoyer">
	</div>
</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo Router::url('/js/Trumbowyg/trumbowyg.js'); ?>"></script>
<script type="text/javascript">
$('#inputcontent').trumbowyg();
</script>