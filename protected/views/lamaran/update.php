<?php
/* @var $this LamaranController */
/* @var $model Lamaran */

$this->breadcrumbs=array(
	'Lamarans'=>array('index'),
	$model->id_lamaran=>array('view','id'=>$model->id_lamaran),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lamaran', 'url'=>array('index')),
	array('label'=>'Create Lamaran', 'url'=>array('create')),
	array('label'=>'View Lamaran', 'url'=>array('view', 'id'=>$model->id_lamaran)),
	array('label'=>'Manage Lamaran', 'url'=>array('admin')),
);
?>

<h1>Update Lamaran <?php echo $model->id_lamaran; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>