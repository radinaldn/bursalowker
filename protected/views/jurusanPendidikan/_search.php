<?php
/* @var $this JurusanPendidikanController */
/* @var $model JurusanPendidikan */
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
		<?php //echo $form->label($model,'id_jurusan'); ?>
		<?php //echo $form->textField($model,'id_jurusan'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'nama_jurusan'); ?>
		<?php //echo $form->textField($model,'nama_jurusan',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton('Search'); ?>
	</div>

<?php //$this->endWidget(); ?>

</div><!-- search-form -->