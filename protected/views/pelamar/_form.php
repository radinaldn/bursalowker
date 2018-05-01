<?php
/* @var $this PelamarController */
/* @var $model Pelamar */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->request->baseUrl;
date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pelamar-form',
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
                    <h2><i class="fa fa-tasks"></i> Registrasi Pelamar <small><!-- different form elements --></small></h2>
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
      <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Jurusan *</label>
      <div class="col-sm-9">
        <?php
        $opt = CHtml::listData(JurusanPendidikan::model()->findAll(),'id_jurusan','nama_jurusan');
        echo $form->dropDownList($model,'id_jurusan',$opt,array('class'=>'form-control has-feedback-left','required'=>'required'));
        ?>
        <span class="fa fa-tasks form-control-feedback left" aria-hidden="true"></span>
      </div>
      <?php echo $form->error($model,'id_jurusan'); ?>
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
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">NIK *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'no_ktp',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 11451121045','required'=>'required', 'size'=>16,'maxlength'=>16)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'noi_ktp'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Daftar *</label>
    <div class="col-sm-9">
		<?php echo $form->dateField($model,'tgl_daftar',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 2018-01-01','required'=>'required','value'=>$date,'readonly'=>'readonly')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'tgl_daftar'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Lengkap *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'nama_lengkap',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Masrial','required'=>'required', 'size'=>40,'maxlength'=>40)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'nama_lengkap'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

   <div class="form-group">
 <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Jenis Kelamin *</label>
 <div class="col-sm-9">
 <?php echo $form->dropDownList($model,'jenis_kelamin',
 array(
  'L'=>'Laki-Laki',
   'P'=>'Perempuan',
 ),array(
 'class'=>'form-control has-feedback-left',
 'required'=>'required',
 )
 ); ?> 
 <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
 <?php echo $form->error($model,'jenis_kelamin'); ?>
</div>
<div class="clearfix"></div>
<br>

 <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Lahir *</label>
    <div class="col-sm-9">
		<?php echo $form->dateField($model,'tgl_lahir',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 2018-01-01','required'=>'required')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'tgl_lahir'); ?>
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
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">No HP *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'no_hp',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 081234567890','required'=>'required', 'size'=>12,'maxlength'=>12)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Foto *</label>
    <div class="col-sm-9">
		<?php echo $form->fileField($model,'photo',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1','required'=>'required')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'photo'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">ID Telegram *</label>
    <div class="col-sm-9">
    <?php echo $form->textField($model,'id_telegram',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 347641895','required'=>'required', 'size'=>11,'maxlength'=>11)); ?>
    <br>
    <a target="_blank" href="<?= Yii::app()->request->baseUrl ?>/index.php/home/telegramhelp">*Bagaimana cara mendapatkan Id Telegram?</a>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
    <?php echo $form->error($model,'id_telegram'); ?>
  </div>
  <div class="clearfix"></div>
  <br>


	
	<div class="col-md-6 col-md-offset-4">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Save', array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/pelamar/admin'", 'class'=>'btn btn-default')); ?>
  </div>

<?php $this->endWidget(); ?>
</div><!-- form -->