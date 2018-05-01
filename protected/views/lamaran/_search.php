<?php
/* @var $this LamaranController */
/* @var $model Lamaran */
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
		<?php// echo $form->label($model,'id_lamaran'); ?>
		<?php // echo $form->textField($model,'id_lamaran'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'id_pelamar'); ?>
		<?php // echo $form->textField($model,'id_pelamar'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'id_lowongan'); ?>
		<?php // echo $form->textField($model,'id_lowongan'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tgl_lamar'); ?>
		<?php // echo $form->textField($model,'tgl_lamar'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'lampiran'); ?>
		<?php // echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'status'); ?>
		<?php // echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php // echo CHtml::submitButton('Search'); ?>
	</div>

<?php// $this->endWidget(); ?>

</div><!-- search-form -->