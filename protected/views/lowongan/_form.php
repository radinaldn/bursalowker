<?php
/* @var $this LowonganController */
/* @var $model Lowongan */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->request->baseUrl;
date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lowongan-form',
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
                    <h2><i class="fa fa-tasks"></i> Form Lowongan <small><!-- different form elements --></small></h2>
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
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">ID Perusahaan *</label>
    <div class="col-sm-9">
    <?php echo $form->textField($model,'id_lowongan',array('class'=>'form-control has-feedback-left', 'readonly'=>'readonly','placeholder'=>Yii::app()->session->get('id_perusahaan'))); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
    <?php echo $form->error($model,'id_perusahaan'); ?>
  </div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Buat *</label>
    <div class="col-sm-9">
    <?php echo $form->dateField($model,'tgl_buat',array('readonly'=>'readonly','class'=>'form-control has-feedback-left', 'value'=>$date)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
    <?php echo $form->error($model,'tgl_buat'); ?>
  </div>
  <div class="clearfix"></div>
  <br> -->

	<div class="form-group">
      <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Kategori *</label>
      <div class="col-sm-9">
        <?php
        $opt = CHtml::listData(Kategori::model()->findAll(),'id_kategori','nama_kategori');
        echo $form->dropDownList($model,'id_kategori',$opt,array('class'=>'form-control has-feedback-left','required'=>'required'));
        ?>
        <span class="fa fa-tasks form-control-feedback left" aria-hidden="true"></span>
      </div>
      <?php echo $form->error($model,'id_kategori'); ?>
    </div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
 <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Provinsi *</label>
 <div class="col-sm-9">
 <?php
 echo $form->DropDownList($model,'id_provinsi',
 CHtml::listData(Provinsi::model()->findAll(),'id_provinsi','name'),
 array(
  'required'=>'required',
  'class'=>'form-control has-feedback-left',
   'prompt'=>'-- Pilih Provinsi --',
   'ajax' => array(
     'type'=>'POST',
     'url'=>CController::createUrl('lowongan/selectkabkota'), //selectjur adalah actionSelectkec di SaksiController.
     'update'=>'#'.CHtml::activeId($model,'id_kabkota'), //jurusan_id = field jurusan_id
     'beforeSend'=>'function() { //Penting!! agar setiap ganti pilihan kabkota, maka kec dan keldesa akan ikut terupdate, jadi kosong.
       $("#Saksi_prodi_id").find("option").remove();
     }', //Bila tidak menggunakan ini, maka yg terupdate hanya jurusan (bawaan 'update').
   )
 )
 );
 ?>
 <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
 <?php echo $form->error($model,'id_provinsi'); ?>
</div>
<div class="clearfix"></div>
<br>

  <div class="form-group">
 <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Kabupaten/Kota *</label>
 <div class="col-sm-9">
 <?php echo $form->dropDownList($model,'id_kabkota',
 (!$model->isNewRecord) ? $model->kabkotaList() :array(),
 array(
  'required'=>'required',
  'class'=>'form-control has-feedback-left',
   'prompt'=>'-- Pilihan --',
 )
 ); ?> 
 <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
 <?php echo $form->error($model,'id_kabkota'); ?>
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
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Pekerjaan *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'pekerjaan',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Programmer')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'pekerjaan'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tipe Pekerjaan *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'tipe_pekerjaan',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Kontrak')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'tipe_pekerjaan'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Deskripsi *</label>
    <div class="col-sm-9">
		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Dibuka lowongan untuk pekerja keras yang berkriteria sesuai dengan persyaratan...','required'=>'required','cols'=>60,'rows'=>5)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Persyaratan *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'persyaratan',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Minimal sarjana, pengalaman 1 tahun')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'persyaratan'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tawaran Gaji *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'tawaran_gaji',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1.000.000 - 10.000.000')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'tawaran gaji'); ?>
	</div>
  <div class="clearfix"></div>
  <br>


  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Usia Max *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'usia_max',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 30 tahun')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'usia_max'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Jenis Kelamin *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'jenis_kelamin',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: L/P')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

   <div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Batas Lamaran *</label>
    <div class="col-sm-9">
		<?php echo $form->dateField($model,'batas_lamaran',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'batas_lamaran'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

  <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Panggilan *</label>
    <div class="col-sm-9">
    <?php echo $form->dateField($model,'tgl_panggilan',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
    <?php echo $form->error($model,'tgl_panggilan'); ?>
  </div>
  <div class="clearfix"></div>
  <br>

   <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Status *</label>
    <div class="col-sm-9">
    <?php echo $form->textField($model,'status',array('class'=>'form-control has-feedback-left', 'value'=>'Publik','placeholder'=>'contoh: Publik')); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
    <?php echo $form->error($model,'status'); ?>
  </div>
  <div class="clearfix"></div>
  <br>
	
	<div class="col-md-6 col-md-offset-4">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Data' : 'Save', array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/lamaran/admin'", 'class'=>'btn btn-default')); ?>
  </div>

<?php $this->endWidget(); ?>
</div><!-- form -->