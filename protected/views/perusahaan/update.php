<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	$model->id_perusahaan=>array('view','id'=>$model->id_perusahaan),
	'Update',
);

$this->menu=array(
	// array('label'=>'List Perusahaan', 'url'=>array('index')),
	// array('label'=>'Create Perusahaan', 'url'=>array('create')),
	// array('label'=>'View Perusahaan', 'url'=>array('view', 'id'=>$model->id_perusahaan)),
	// array('label'=>'Manage Perusahaan', 'url'=>array('admin')),
);
?>

<!-- <h1>Update Perusahaan <?php echo $model->id_perusahaan; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>