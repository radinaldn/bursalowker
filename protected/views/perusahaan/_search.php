<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php 
// $form=$this->beginWidget('CActiveForm', array(
// 	'action'=>Yii::app()->createUrl($this->route),
// 	'method'=>'get',
// )); 
?>

	<div class="row">
		<?php // echo $form->label($model,'id_perusahaan'); ?>
		<?php // echo $form->textField($model,'id_perusahaan'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'id_kota'); ?>
		<?php // echo $form->textField($model,'id_kota'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'username'); ?>
		<?php // echo $form->textField($model,'username',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tgl_daftar'); ?>
		<?php // echo $form->textField($model,'tgl_daftar'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'nama_perusahaan'); ?>
		<?php // echo $form->textField($model,'nama_perusahaan',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'alamat'); ?>
		<?php // echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'no_telp'); ?>
		<?php // echo $form->textField($model,'no_telp',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'situs'); ?>
		<?php // echo $form->textField($model,'situs',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'nama_kontak'); ?>
		<?php // echo $form->textField($model,'nama_kontak',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'no_hp'); ?>
		<?php // echo $form->textField($model,'no_hp',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php // echo CHtml::submitButton('Search'); ?>
	</div>

<?php //$this->endWidget(); ?>

</div><!-- search-form -->