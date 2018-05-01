<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	$model->id_pelamar=>array('view','id'=>$model->id_pelamar),
	'Update',
);

$this->menu=array(
	// array('label'=>'List Pelamar', 'url'=>array('index')),
	// array('label'=>'Create Pelamar', 'url'=>array('create')),
	// array('label'=>'View Pelamar', 'url'=>array('view', 'id'=>$model->id_pelamar)),
	// array('label'=>'Manage Pelamar', 'url'=>array('admin')),
);
?>

<!-- <h1>Update Pelamar <?php echo $model->id_pelamar; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>