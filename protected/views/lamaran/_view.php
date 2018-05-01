<?php
/* @var $this LamaranController */
/* @var $data Lamaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lamaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lamaran), array('view', 'id'=>$data->id_lamaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelamar')); ?>:</b>
	<?php echo CHtml::encode($data->id_pelamar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lowongan')); ?>:</b>
	<?php echo CHtml::encode($data->id_lowongan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lamar')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lamar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>