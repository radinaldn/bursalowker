<?php
/* @var $this AdminController */
/* @var $model Admin */
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
		<?php // echo $form->label($model,'id_admin'); ?>
		<?php // echo $form->textField($model,'id_admin'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'username'); ?>
		<?php // echo $form->textField($model,'username',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'nama'); ?>
		<?php // echo $form->textField($model,'nama',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'tgl_daftar'); ?>
		<?php // echo $form->textField($model,'tgl_daftar'); ?>
	</div>

	<div class="row buttons">
		<?php // echo CHtml::submitButton('Search'); ?>
	</div>

<?php // $this->endWidget(); ?>

</div><!-- search-form -->