<?php

class PelamarController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
	//		'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','register','selectkabkota'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','validasi','laporan','cetak'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Pelamar;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelamar']))
		{
			$model->attributes=$_POST['Pelamar'];

			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['Pelamar']['password'],$acak);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_pelamar));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionRegister()
	{
		$model=new Pelamar;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelamar']))
		{
			$model->attributes=$_POST['Pelamar'];

			$model->level="";
			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['Pelamar']['password'],$acak);
			if($model->save())
				Yii::app()->user->setFlash('success', "Silahkan menunggu proses validasi akun anda");
				$this->redirect(Yii::app()->request->baseUrl."/index.php/site/loginpelamar");
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionValidasi($id){

		$token_bot = "bot579741209:AAHELNwUG-8hwTBnszEO4m5eMA_4AnJnnD8";

		$model_pelamar = Pelamar::model()->getNonValidByPk($id);
		$id_pelamar;
		$nama;
		$username;
		$id_telegram;

		foreach ($model_pelamar as $data) {
			$id_pelamar = $data['id_pelamar'];
			$nama = $data['nama_lengkap'];
			$username = $data['username'];
			$id_telegram = $data['id_telegram'];
		}

		$pesan = "Selamat ".$nama."! Akun anda berhasil divalidasi. Anda dapat login ke dalam sistem informasi bursa lowongan kerja : https://192.168.1.101/bursa-lowker/index.php/site/loginpelamar dengan username : ".$username.". Terimakasih";

		$model=$this->loadModel($id);
		$model->level = "pelamar";
		$model->save();

		//send to telegram pelamar
		$send_telegram = NotifikasiLamaran::model()->sendMessage($id_telegram, $pesan, $token_bot);

		Yii::app()->user->setFlash('success', "Data pelamar berhasil divalidasi!");
		$this->redirect(array('admin'));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelamar']))
		{
			$model->attributes=$_POST['Pelamar'];

			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['Pelamar']['password'],$acak);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_pelamar));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			Yii::app()->user->setFlash('success', "Data pelamar berhasil dihapus!");
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pelamar');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$db=new Pelamar('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Pelamar']))
			$db->attributes=$_GET['Pelamar'];

		$model = Pelamar::model()->getAllValid();
		$getAllNonValid = Pelamar::model()->getAllNonValid();
		$this->render('admin',array(
			'model'=>$model,
			'getAllNonValid'=>$getAllNonValid,
		));
	}

	public function actionLaporan()
	{
		$db=new Pelamar('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Pelamar']))
			$db->attributes=$_GET['Pelamar'];

		$model = Pelamar::model()->getAllValid();
		
		$this->render('laporan',array(
			'model'=>$model,
			
		));
	}

	public function actionCetak()
	{
		require_once Yii::app()->basePath . '/extensions/pdf/fpdf.php';

		$model = Pelamar::model()->getAllValid();

		$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(1.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image(Yii::app()->basePath . '/extensions/pdf/logo/pekanbaru_logo_100px.png',1,1);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'DINAS TENAGA KERJA DAN TRANSMIGRASI PROVINSI RIAU',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : (0761) 22285',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jl. Pepaya No. 57-59 · (0761) 22285',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : http://disnakertrans.riau.go.id/bursa-lowker/ email : dinaskertrans@riau.go.id',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Rekap Data Pelamar",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'NIK', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Kabupaten/Kota', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Jurusan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'ID Telegram', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;

		 foreach ($model as $data) {
		 	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $data['no_ktp'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $data['nama_lengkap'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $data['name'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $data['nama_jurusan'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $data['id_telegram'],1, 1, 'C');

	$no++;
	
	}

	$pdf->Output("laporan_surat.pdf","I");

	
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pelamar the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pelamar::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

    public function actionSelectkabkota()
    {
        $id_fak = $_POST['Pelamar']['id_provinsi'];
        $list = Kabkota::model()->findAll('id_provinsi = :id_fak', array(':id_fak'=>$id_fak));
        $list = CHtml::listData($list,'id_kabkota','name');
        echo CHtml::tag('option',array('value'=>''),'-- Pilih Kabupaten/Kota --', true);

        foreach($list as $value=>$nama){
            echo CHtml::tag('option',array('value'=>$value),CHtml::encode($nama), true);
        }
    }

	/**
	 * Performs the AJAX validation.
	 * @param Pelamar $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pelamar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
