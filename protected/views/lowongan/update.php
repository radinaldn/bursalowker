<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	$model->id_lowongan=>array('view','id'=>$model->id_lowongan),
	'Update',
);

$this->menu=array(
	// array('label'=>'List Lowongan', 'url'=>array('index')),
	// array('label'=>'Create Lowongan', 'url'=>array('create')),
	// array('label'=>'View Lowongan', 'url'=>array('view', 'id'=>$model->id_lowongan)),
	// array('label'=>'Manage Lowongan', 'url'=>array('admin')),
);
?>

<!-- <h1>Update Lowongan <?php echo $model->id_lowongan; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>