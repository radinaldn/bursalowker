<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
  'Login',
);
?>
 

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'login-form',
  'enableClientValidation'=>true,
  'clientOptions'=>array(
    'validateOnSubmit'=>true,
  ),
)); ?>

  <!-- <p class="note">Fields with <span class="required">*</span> are required.</p> 

  <div class="row">
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->textField($model,'username'); ?>
    <?php echo $form->error($model,'username'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password'); ?>
    <?php echo $form->error($model,'password'); ?>
    <p class="hint">
      Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
    </p>
  </div>

  <div class="row rememberMe">
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Login'); ?>
  </div> -->

<div class="login-form">
  <div class="login_wrapper">

        <div class="animate form login_form">
          <section class="login_content">
            <form>
            <?php if(Yii::app()->user->hasFlash('success')):?>
<div class="info">
    
    <div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Pendaftaran berhasil!</strong> <?php echo Yii::app()->user->getFlash('success'); ?>
  </div>    
</div>
<?php endif; ?>
             <h1 onclick="window.open('<?= Yii::app()->request->baseUrl ?>/index.php','_self')">DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI RIAU</h1>
<img onclick="window.open('<?= Yii::app()->request->baseUrl ?>/index.php','_self')" src="<?= Yii::app()->request->baseUrl; ?>/images/login/pekanbaru_logo.png" height="200">
<p>Assalamualaikum, silahkan login pelamar:</p>
              <div class="col-sm-12">
                <?php echo $form->textField($model,'username',array('type'=>'email','class'=>'form-control has-feedback-left','placeholder'=>'Username', 'required'=>'')); ?>
<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    <?php echo $form->error($model,'username', array('class'=>'error')); ?>
              </div>
              <div class="clearfix"></div>
  <br>

              <div class="col-md-12">
                <?php echo $form->passwordField($model,'password', array('type'=>'password','class'=>'form-control has-feedback-left','placeholder'=>'Password', 'required'=>'')); ?>
                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
    <?php echo $form->error($model,'password', array('class'=>'error')); ?>
              </div>


              <div>
                <div class="row rememberMe">
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Masuk', array('type'=>'submit','class'=>'btn btn-primary submit')); ?>
  </div> 
             <!--    <a class="reset_pass" href="#">Lupa password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum punya akun?
                  <a href="<?= Yii::app()->request->baseUrl; ?>/index.php/pelamar/register" class="to_register"> Daftar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 onclick="window.open('<?= Yii::app()->request->baseUrl ?>/index.php','_self')"><i class="fa fa-paper-plane"></i> Bursa - Lowker</h1>
                  </div>
                  
                </div>
                <div><p>©Dinas Ketenagakerjaan. 2018</p></div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
