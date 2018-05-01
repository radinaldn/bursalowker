<?php
/* @var $this LamaranController */
/* @var $model Lamaran */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->request->baseUrl;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lamaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
  //tambahan izin menyimpan data
  'htmlOptions'=>array('enctype'=>'multipart/form-data','autocomplete'=>'off'),
)); ?>

	<!-- Form baru -->

	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-tasks"></i> Form Lamaran <small><!-- different form elements --></small></h2>
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

	<!-- <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">ID Pelamar *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'id_pelamar',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'id_pelamar'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">ID Lowongan *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'id_lowongan',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'id_lowongan'); ?>
	</div>
  <div class="clearfix"></div>
  <br> -->

  <!-- <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Lamar *</label>
    <div class="col-sm-9">
		<?php echo $form->dateField($model,'tgl_lamar',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'tgl_lamar'); ?>
	</div>
  <div class="clearfix"></div>
  <br> -->

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Lampiran *</label>
    <div class="col-sm-9">
		<?php echo $form->fileField($model,'lampiran',array('class'=>'form-control has-feedback-left', 'id'=>'lampiran','required'=>'required')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <!-- <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Status *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'status',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: proses')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'status'); ?>
	</div>
  <div class="clearfix"></div>
  <br> -->
	
	<div class="col-md-6 col-md-offset-4">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Data' : 'Save', array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/lamaran/admin'", 'class'=>'btn btn-default')); ?>
  </div>

<?php $this->endWidget(); ?>
</div><!-- form -->