<?php
/* @var $this LowonganController */
/* @var $model Lowongan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php
//  $form=$this->beginWidget('CActiveForm', array(
// 	'action'=>Yii::app()->createUrl($this->route),
// 	'method'=>'get',
// ));
 ?>

	<div class="row">
		<?php // echo $form->label($model,'id_lowongan'); ?>
		<?php // echo $form->textField($model,'id_lowongan'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'id_kategori'); ?>
		<?php // echo $form->textField($model,'id_kategori'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'id_perusahaan'); ?>
		<?php // echo $form->textField($model,'id_perusahaan'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'id_kota'); ?>
		<?php // echo $form->textField($model,'id_kota'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'id_jurusan'); ?>
		<?php // echo $form->textField($model,'id_jurusan'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tgl_buat'); ?>
		<?php // echo $form->textField($model,'tgl_buat'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'pekerjaan'); ?>
		<?php // echo $form->textField($model,'pekerjaan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tipe_pekerjaan'); ?>
		<?php // echo $form->textField($model,'tipe_pekerjaan',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'deskripsi'); ?>
		<?php // echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'persyaratan'); ?>
		<?php // echo $form->textArea($model,'persyaratan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tawaran_gaji'); ?>
		<?php // echo $form->textField($model,'tawaran_gaji',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'usia_max'); ?>
		<?php // echo $form->textField($model,'usia_max',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'jenis_kelamin'); ?>
		<?php // echo $form->textField($model,'jenis_kelamin',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'batas_lamaran'); ?>
		<?php // echo $form->textField($model,'batas_lamaran'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'status'); ?>
		<?php // echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php // echo CHtml::submitButton('Search'); ?>
	</div>

<?php //$this->endWidget(); ?>

</div><!-- search-form -->