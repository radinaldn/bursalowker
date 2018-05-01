<?php
/* @var $this JurusanPendidikanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jurusan Pendidikans',
);

$this->menu=array(
	array('label'=>'Create JurusanPendidikan', 'url'=>array('create')),
	array('label'=>'Manage JurusanPendidikan', 'url'=>array('admin')),
);
?>

<h1>Jurusan Pendidikans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
