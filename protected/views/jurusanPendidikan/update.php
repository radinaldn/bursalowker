<?php
/* @var $this JurusanPendidikanController */
/* @var $model JurusanPendidikan */

$this->breadcrumbs=array(
	'Jurusan Pendidikans'=>array('index'),
	$model->id_jurusan=>array('view','id'=>$model->id_jurusan),
	'Update',
);

$this->menu=array(
	// array('label'=>'List JurusanPendidikan', 'url'=>array('index')),
	// array('label'=>'Create JurusanPendidikan', 'url'=>array('create')),
	// array('label'=>'View JurusanPendidikan', 'url'=>array('view', 'id'=>$model->id_jurusan)),
	// array('label'=>'Manage JurusanPendidikan', 'url'=>array('admin')),
);
?>

<!-- <h1>Update JurusanPendidikan <?php echo $model->id_jurusan; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>