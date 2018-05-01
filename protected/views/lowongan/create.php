<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List Lowongan', 'url'=>array('index')),
	// array('label'=>'Manage Lowongan', 'url'=>array('admin')),
);
?>

<!-- <h1>Create Lowongan</h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>