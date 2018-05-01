<?php
/* @var $this KotaController */
/* @var $model Kota */
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
		<?php// echo $form->label($model,'id_kota'); ?>
		<?php// echo $form->textField($model,'id_kota'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'nama_kota'); ?>
		<?php //echo $form->textField($model,'nama_kota',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton('Search'); ?>
	</div>

<?php //$this->endWidget(); ?>

</div><!-- search-form -->