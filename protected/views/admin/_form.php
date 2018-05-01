<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->request->baseUrl;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- Form baru -->

	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-tasks"></i> Form Operator Dinas <small><!-- different form elements --></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />


	<!--  -->


	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-6 col-md-offset-3">
<p class="note">Form dengan tanda <span class="required">*</span> wajib diisi.</p>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Username *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'username',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: masrial96','size'=>40,'maxlength'=>40)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'username'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Password *</label>
    <div class="col-sm-9">
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control has-feedback-left', 'value'=>'','placeholder'=>'contoh: *****','size'=>255,'maxlength'=>255)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'password'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'nama',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Masrial','size'=>255,'maxlength'=>255)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'nama'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

	
	<div class="col-md-6 col-md-offset-4">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Data' : 'Save', array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/kota/admin'", 'class'=>'btn btn-default')); ?>
  </div>

<?php $this->endWidget(); ?>
</div><!-- form -->