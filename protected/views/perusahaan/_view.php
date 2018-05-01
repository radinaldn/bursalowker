<?php
/* @var $this PerusahaanController */
/* @var $data Perusahaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_perusahaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_perusahaan), array('view', 'id'=>$data->id_perusahaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kota')); ?>:</b>
	<?php echo CHtml::encode($data->id_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_daftar')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_daftar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_perusahaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telp')); ?>:</b>
	<?php echo CHtml::encode($data->no_telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('situs')); ?>:</b>
	<?php echo CHtml::encode($data->situs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kontak')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kontak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_hp')); ?>:</b>
	<?php echo CHtml::encode($data->no_hp); ?>
	<br />

	*/ ?>

</div>