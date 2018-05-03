<?php
/* @var $this KabkotaController */
/* @var $data Kabkota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kabkota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kabkota), array('view', 'id'=>$data->id_kabkota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_provinsi')); ?>:</b>
	<?php echo CHtml::encode($data->id_provinsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>