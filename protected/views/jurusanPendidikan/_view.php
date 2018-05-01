<?php
/* @var $this JurusanPendidikanController */
/* @var $data JurusanPendidikan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jurusan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jurusan), array('view', 'id'=>$data->id_jurusan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jurusan); ?>
	<br />


</div>