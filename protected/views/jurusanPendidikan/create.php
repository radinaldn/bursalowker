<?php
/* @var $this JurusanPendidikanController */
/* @var $model JurusanPendidikan */

$this->breadcrumbs=array(
	'Jurusan Pendidikans'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List JurusanPendidikan', 'url'=>array('index')),
	// array('label'=>'Manage JurusanPendidikan', 'url'=>array('admin')),
);
?>

<!-- <h1>Create JurusanPendidikan</h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>