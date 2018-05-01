<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->id_admin=>array('view','id'=>$model->id_admin),
	'Update',
);

$this->menu=array(
	// array('label'=>'List Admin', 'url'=>array('index')),
	// array('label'=>'Create Admin', 'url'=>array('create')),
	// array('label'=>'View Admin', 'url'=>array('view', 'id'=>$model->id_admin)),
	// array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<!-- <h1>Update Admin <?php echo $model->id_admin; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>