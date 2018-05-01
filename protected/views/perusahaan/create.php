<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List Perusahaan', 'url'=>array('index')),
	// array('label'=>'Manage Perusahaan', 'url'=>array('admin')),
);
?>

<!-- <h1>Create Perusahaan</h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>