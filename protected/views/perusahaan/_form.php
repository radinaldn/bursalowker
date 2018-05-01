<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->request->baseUrl;
date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d");

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perusahaan-form',
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
                    <h2><i class="fa fa-tasks"></i> Registrasi Perusahaan <small><!-- different form elements --></small></h2>
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
      <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Kota *</label>
      <div class="col-sm-9">
        <?php
        $opt = CHtml::listData(Kota::model()->findAll(),'id_kota','nama_kota');
        echo $form->dropDownList($model,'id_kota',$opt,array('class'=>'form-control has-feedback-left','required'=>'required'));
        ?>
        <span class="fa fa-tasks form-control-feedback left" aria-hidden="true"></span>
      </div>
      <?php echo $form->error($model,'id_kota'); ?>
    </div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">username *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'username',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: john@mail.com','required'=>'required', 'size'=>40,'maxlength'=>40)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'username'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Password *</label>
    <div class="col-sm-9">
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: ******','required'=>'required', 'size'=>40,'maxlength'=>40)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'password'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Daftar *</label>
    <div class="col-sm-9">
    <?php echo $form->textField($model,'tgl_daftar',array('class'=>'form-control has-feedback-left','value'=>$date, 'placeholder'=>'tanggal post','required'=>'required','readonly'=>'readonly','size'=>50,'maxlength'=>50)); ?>
    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
   </div>
    <?php echo $form->error($model,'tgl_daftar'); ?>
  </div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Perusahaan *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'nama_perusahaan',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: PT Pertamina','required'=>'required', 'size'=>40,'maxlength'=>40)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'nama_perusahaan'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Alamat *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'alamat',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: JL. Garuda Sakti KM 1','required'=>'required', 'rows'=>6, 'cols'=>50)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'alamat'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">No Telpon *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'no_telp',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 081234567890','required'=>'required', 'size'=>12,'maxlength'=>12)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'no_telp'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Situs *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'situs',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: www.pertamina.co.id','required'=>'required', 'size'=>40,'maxlength'=>40)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'situs'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Kontak *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'nama_kontak',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Masrial','required'=>'required', 'size'=>15,'maxlength'=>15)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'nama_kontak'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">No HP *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'no_hp',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 081234567890','required'=>'required', 'size'=>12,'maxlength'=>12)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>
  <div class="clearfix"></div>
  <br>
<!-- 
  <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Level *</label>
    <div class="col-sm-9">
    <?php echo $form->textField($model,'level',array('readonly'=>'readonly','required'=>'required','class'=>'form-control has-feedback-left', 'value'=>'perusahaan','required'=>'required', 'size'=>12,'maxlength'=>12)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
    <?php echo $form->error($model,'level'); ?>
  </div>
  <div class="clearfix"></div>
  <br> -->
	
	<div class="col-md-6 col-md-offset-4">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Save', array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/site/loginperusahaan'", 'class'=>'btn btn-default')); ?>
  </div>

<?php $this->endWidget(); ?>
</div><!-- form -->