<?php
/* @var $this KabkotaController */
/* @var $model Kabkota */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->request->baseUrl;
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'kabkota-form',
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
                    <h2><i class="fa fa-tasks"></i> Form Kabupaten/Kota <small><!-- different form elements --></small></h2>
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
                            <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">ID Provinsi *</label>
                            <div class="col-sm-9">
                                <?php echo $form->textField($model,'id_provinsi',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 14','size'=>2,'maxlength'=>2)); ?>
                                <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <?php echo $form->error($model,'id_provinsi'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <br>

                        <div class="form-group">
                            <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">ID Kabupaten/Kota *</label>
                            <div class="col-sm-9">
                                <?php echo $form->textField($model,'id_kabkota',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: 1401','size'=>4,'maxlength'=>4)); ?>
                                <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <?php echo $form->error($model,'id_kabkota'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <br>

                        <div class="form-group">
                            <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Kabupaten/Kota *</label>
                            <div class="col-sm-9">
                                <?php echo $form->textField($model,'name',array('class'=>'form-control has-feedback-left', 'placeholder'=>'contoh: Pekanbaru','size'=>255,'maxlength'=>255)); ?>
                                <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <?php echo $form->error($model,'name'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <br>


                        <div class="col-md-6 col-md-offset-4">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Data' : 'Save', array('class'=>'btn btn-primary')); ?>
                            <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/kabkota/admin'", 'class'=>'btn btn-default')); ?>
                        </div>

                        <?php $this->endWidget(); ?>

                    </div><!-- form -->