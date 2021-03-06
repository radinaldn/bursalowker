<?php

class PerusahaanController extends Controller
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
				'actions'=>array('register','view','selectkabkota'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','update','validasi','laporan','cetak'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','admin','delete'),
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
		$model=new Perusahaan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perusahaan']))
		{
			$model->attributes=$_POST['Perusahaan'];

			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['Perusahaan']['password'],$acak);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_perusahaan));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionRegister()
	{
		$model=new Perusahaan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perusahaan']))
		{
			$model->attributes=$_POST['Perusahaan'];

			$model->level="";
			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['Perusahaan']['password'],$acak);

			$rnd = rand(0,9999);
			$model->attributes=$_POST['Perusahaan'];
			$model->berkas='tes.zip';

			if($model->save())
			{
					if(CUploadedFile::getInstance($model,'berkas'))
					{
						$newfilename='berkas/'.$model->id_perusahaan.'.zip';
						$model->berkas=CUploadedFile::getInstance($model,'berkas');
						$model->berkas->saveAs(Yii::getPathOfAlias('webroot').'/files/'.$newfilename);
						$model->berkas=$newfilename;
						$model->save();
					}
					if(CUploadedFile::getInstance($model,'berkas'))  // check if uploaded file is set or not
					{
						//todo
					}
				
				}
				if(!empty ($uploadedFile))
					{
						$fileName = "{$rnd}-{$uploadedFile}";
						$var = '';
						$model->berkas = $var.'/files/fl'.$fileName;
						$model->save();
						
						$name=Yii::app()->basePath.'/../files/fl'.$fileName;
						$uploadedFile->saveAs($name);
					}
				Yii::app()->user->setFlash('success', "Silahkan menunggu proses validasi akun anda");
				$this->redirect(array("../index.php/site/loginperusahaan"));
			}
			
		

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionValidasi($id){
		$model=$this->loadModel($id);
		$model->level = "perusahaan";
		$model->save();
		Yii::app()->user->setFlash('success', "Data perusahaan berhasil divalidasi!");
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

		if(isset($_POST['Perusahaan']))
		{
			$model->attributes=$_POST['Perusahaan'];

			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['Perusahaan']['password'],$acak);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_perusahaan));
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
			Yii::app()->user->setFlash('success', "Data perusahaan berhasil dihapus!");
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Perusahaan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$db=new Perusahaan('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Perusahaan']))
			$db->attributes=$_GET['Perusahaan'];

		$model = Perusahaan::model()->getAllValid();
		$getAllNonValid = Perusahaan::model()->getAllNonValid();
		$this->render('admin',array(
			'model'=>$model,
			'getAllNonValid'=>$getAllNonValid,
		));
	}

	public function actionLaporan()
	{
		$db=new Perusahaan('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Perusahaan']))
			$db->attributes=$_GET['Perusahaan'];

		$model = Perusahaan::model()->getAllValid();

		$this->render('laporan',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Perusahaan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Perusahaan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionCetak()
	{
		require_once Yii::app()->basePath . '/extensions/pdf/fpdf.php';

		$model = Perusahaan::model()->getAllValid();

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
$pdf->Cell(25.5,0.7,"Rekap Data Perusahaan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Perusahaan', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Kabupaten/Kota', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Alamat', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'No Telp', 1, 1, 'C');

$pdf->SetFont('Arial','',10);
$no=1;

		 foreach ($model as $data) {
		 	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $data['nama_perusahaan'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $data['name'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $data['alamat'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $data['no_telp'],1, 1, 'C');


	$no++;
	
	}

	$pdf->Output("laporan_surat.pdf","I");

	
	}

    public function actionSelectkabkota()
    {
        $id_fak = $_POST['Perusahaan']['id_provinsi'];
        $list = Kabkota::model()->findAll('id_provinsi = :id_fak', array(':id_fak'=>$id_fak));
        $list = CHtml::listData($list,'id_kabkota','name');
        echo CHtml::tag('option',array('value'=>''),'-- Pilih Kabupaten/Kota --', true);

        foreach($list as $value=>$nama){
            echo CHtml::tag('option',array('value'=>$value),CHtml::encode($nama), true);
        }
    }

	/**
	 * Performs the AJAX validation.
	 * @param Perusahaan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='perusahaan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
