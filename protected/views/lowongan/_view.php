<?php
/* @var $this LowonganController */
/* @var $data Lowongan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lowongan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lowongan), array('view', 'id'=>$data->id_lowongan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->id_kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->id_perusahaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kota')); ?>:</b>
	<?php echo CHtml::encode($data->id_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->id_jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_buat')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_buat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->tipe_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persyaratan')); ?>:</b>
	<?php echo CHtml::encode($data->persyaratan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tawaran_gaji')); ?>:</b>
	<?php echo CHtml::encode($data->tawaran_gaji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usia_max')); ?>:</b>
	<?php echo CHtml::encode($data->usia_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batas_lamaran')); ?>:</b>
	<?php echo CHtml::encode($data->batas_lamaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>