<?php
/* @var $this PelamarController */
/* @var $model Pelamar */
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
		<?php // echo $form->label($model,'id_pelamar'); ?>
		<?php // echo $form->textField($model,'id_pelamar'); ?>
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
		<?php // echo $form->label($model,'username'); ?>
		<?php // echo $form->textField($model,'username',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'no_ktp'); ?>
		<?php // echo $form->textField($model,'no_ktp',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tgl_daftar'); ?>
		<?php // echo $form->textField($model,'tgl_daftar'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'nama_lengkap'); ?>
		<?php // echo $form->textField($model,'nama_lengkap',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'jenis_kelamin'); ?>
		<?php // echo $form->textField($model,'jenis_kelamin',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tgl_lahir'); ?>
		<?php // echo $form->textField($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'alamat'); ?>
		<?php // echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'no_hp'); ?>
		<?php // echo $form->textField($model,'no_hp',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'photo'); ?>
		<?php // echo $form->textField($model,'photo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php // echo CHtml::submitButton('Search'); ?>
	</div>

<?php// $this->endWidget(); ?>

</div><!-- search-form -->