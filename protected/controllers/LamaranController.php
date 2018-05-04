<?php

class LamaranController extends Controller
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
//			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','pengajuan','seleksi','lamaranSaya','terima','tolak','laporan','cetak'),
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
		// $konten = NotifikasiLamaran::model()->findByPk($id);
		// $konten->sudah_dibaca = "1";
		// $konten->save();
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
		$model=new Lamaran;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lamaran']))
		{
			$rnd = rand(0,9999);
			$model->attributes=$_POST['Lamaran'];
			$model->lampiran='tes.zip';

			if($model->save())
		{
				if(CUploadedFile::getInstance($model,'lampiran'))
					{
						$newfilename='lampiran/'.$model->id_lamaran.'.zip';
						$model->lampiran=CUploadedFile::getInstance($model,'lampiran');
						$model->lampiran>saveAs(Yii::getPathOfAlias('webroot').'/files/'.$newfilename);
						$model->lampiran=$newfilename;
						$model->save();
					}
					if(CUploadedFile::getInstance($model,'lampiran'))  // check if uploaded file is set or not
					{
						//todo
					}
				
				}
				if(!empty ($uploadedFile))
					{
						$fileName = "{$rnd}-{$uploadedFile}";
						$var = '';
						$model->lampiran = $var.'/files/fl'.$fileName;
						$model->save();
						
						$name=Yii::app()->basePath.'/../files/fl'.$fileName;
						$uploadedFile->saveAs($name);
					}
				$this->redirect(array('view','id'=>$model->id_lamaran));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	// method digunakan oleh pelamar
	public function actionPengajuan($id)
	{
		$model=new Lamaran;
		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d");

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);


		$path = Yii::app()->basePath . '/../files';
		if(!is_dir($path)) {
			mkdir($path);
		}

		if(isset($_POST['Lamaran']))
		{
			$model->attributes = $_POST['Lamaran'];

			$model->id_pelamar = Yii::app()->session->get('id_pelamar');
			$model->id_lowongan = $id;
			$model->tgl_lamar = $date;
			$model->status = "Proses";

			if (@!empty($_FILES['Lamaran']['name']['lampiran'])) {
				$model->lampiran = $_POST['Lamaran']['lampiran'];
				if($model->validate(array('lampiran'))) {
					$model->lampiran = CUploadedFile::getInstance($model, 'lampiran');
				} else {
					$model->lampiran = '';
				}

				if ($model->lampiran = CUploadedFile::getInstance($model, 'lampiran'))
					$file_name = $model->id_pelamar. "-" . $model->id_lowongan . ".zip";
				$model->lampiran->saveAs($path ."/lampiran/". $file_name);

			}

			$model->lampiran = $file_name;

			if($model->save())
				$this->redirect(array('view','id'=>$model->id_lamaran));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionTerima($id){

		$token_bot = "bot579741209:AAHELNwUG-8hwTBnszEO4m5eMA_4AnJnnD8";

		//ini update data lamaran
		$model = Lamaran::model()->klikTerima($id);
		
		// ini entri data notif
		$notifikasi = new NotifikasiLamaran;
		//save notif
		$notifikasi->id_lamaran = $id;
		$notifikasi->sudah_dibaca = "0";
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d G:i:s");
		$notifikasi->waktu = $waktu;
		
		$model_pelamar = Lamaran::model()->getDataPelamarByLamaran($id);
		$id_pelamar;
		$nama_pelamar;
		$pekerjaan_pelamar;
		$perusahaan_pelamar;
		$kontak_perusahaan;
		$hp_perusahaan;
		$situs_perusahaan;
		foreach ($model_pelamar as $data) {
			$id_pelamar = $data['id_pelamar'];
			$nama_pelamar = $data['nama_pelamar'];
			$pekerjaan_pelamar = $data['pekerjaan_pelamar'];
			$perusahaan_pelamar = $data['perusahaan_pelamar'];
			$kontak_perusahaan = $data['kontak_perusahaan'];
			$hp_perusahaan = $data['hp_perusahaan'];
			$situs_perusahaan = $data['situs_perusahaan'];
			$tgl_panggilan = $data['tgl_panggilan'];
			$date = date_create($data['tgl_panggilan']); 
			$tgl_lampiran = date_format($date, 'j F Y');
		}

		// isi pesan
		$pesan = "Selamat ".$nama_pelamar."! Anda lulus seleksi tahap 1 untuk menjadi ".$pekerjaan_pelamar." di ".$perusahaan_pelamar." ".$situs_perusahaan.". Harap hubungi ".$kontak_perusahaan." ( ".$hp_perusahaan." ) atau segera mendatangi ".$perusahaan_pelamar." pada tanggal ".$tgl_lampiran." untuk mengikuti seleksi berikutnya. Terimakasih";

		$model_telegram = Pelamar::model()->getIdTelegram($id_pelamar);
		$id_telegram;
		foreach ($model_telegram as $data) {
			$id_telegram = $data['id_telegram'];
		}

		if($notifikasi->save()){
			//send to telegram pelamar
			$send_telegram = NotifikasiLamaran::model()->sendMessage($id_telegram, $pesan, $token_bot);

			Yii::app()->user->setFlash('terima_lamaran', "Lamaran berhasil diterima!");
		 $this->redirect(Yii::app()->request->baseUrl."/index.php/lowongan/perusahaanSaya");
		} else {
		print_r($model->errors);
		}
	}

	public function actionTolak($id){

		$token_bot = "bot579741209:AAHELNwUG-8hwTBnszEO4m5eMA_4AnJnnD8";

		//ini update data lamaran
		$model = Lamaran::model()->klikTolak($id);
		
		// ini entri data notif
		$notifikasi = new NotifikasiLamaran;
		//save notif
		$notifikasi->id_lamaran = $id;
		$notifikasi->sudah_dibaca = "0";
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d G:i:s");
		$notifikasi->waktu = $waktu;

		$model_pelamar = Lamaran::model()->getDataPelamarByLamaran($id);
		$id_pelamar;
		$nama_pelamar;
		$pekerjaan_pelamar;
		$perusahaan_pelamar;
		$kontak_perusahaan;
		$hp_perusahaan;
		$situs_perusahaan;
		foreach ($model_pelamar as $data) {
			$id_pelamar = $data['id_pelamar'];
			$nama_pelamar = $data['nama_pelamar'];
			$pekerjaan_pelamar = $data['pekerjaan_pelamar'];
			$perusahaan_pelamar = $data['perusahaan_pelamar'];
			$kontak_perusahaan = $data['kontak_perusahaan'];
			$hp_perusahaan = $data['hp_perusahaan'];
			$situs_perusahaan = $data['situs_perusahaan'];
		}

		// isi pesan
		$pesan = "Mohon maaf ".$nama_pelamar.". Anda tidak lulus seleksi tahap 1 untuk menjadi ".$pekerjaan_pelamar." di ".$perusahaan_pelamar." ".$situs_perusahaan.". Silahkan coba lagi di lowongan berikutnya. Terimakasih";

		$model_telegram = Pelamar::model()->getIdTelegram($id_pelamar);
		$id_telegram;
		foreach ($model_telegram as $data) {
			$id_telegram = $data['id_telegram'];
		}
		
		

		if($notifikasi->save()){

			//send to telegram pelamar
			$send_telegram = NotifikasiLamaran::model()->sendMessage($id_telegram, $pesan, $token_bot);
		
			Yii::app()->user->setFlash('tolak_lamaran', "Lamaran berhasil ditolak!");
		$this->redirect(Yii::app()->request->baseUrl."/index.php/lowongan/perusahaanSaya");
		} else {
		print_r($model->errors);
		}
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

		if(isset($_POST['Lamaran']))
		{
			$model->attributes=$_POST['Lamaran'];
			if($model->save())

				$this->redirect(array('view','id'=>$model->id_lamaran));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionSeleksi($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lamaran']))
		{
			$model->attributes=$_POST['Lamaran'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_lamaran));
		}

		$this->render('update_perusahaan',array(
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Lamaran');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$db=new Lamaran('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Lamaran']))
			$db->attributes=$_GET['Lamaran'];

		$model = Lamaran::model()->getAll();
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionLaporan()
	{
		$db=new Lamaran('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Lamaran']))
			$db->attributes=$_GET['Lamaran'];

		$getAllTerima = Lamaran::model()->getAllTerima();
		$getAllTolak = Lamaran::model()->getAllTolak();

		$this->render('laporan',array(
			'getAllTerima'=>$getAllTerima,
			'getAllTolak'=>$getAllTolak,
		));
	}

	public function actionLamaranSaya()
	{
		$db=new Lamaran('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Lamaran']))
			$db->attributes=$_GET['Lamaran'];

		$model = Lamaran::model()->getAllByPelamar(Yii::app()->session->get('id_pelamar'));
		$this->render('admin_pelamar',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Lamaran the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Lamaran::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionCetak()
	{
		require_once Yii::app()->basePath . '/extensions/pdf/fpdf.php';

		$model = Lamaran::model()->getAllTerima();

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
$pdf->Cell(25.5,0.7,"Rekap Data Lamaran",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Nama Pelamar', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Lowongan', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Perusahaan', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Tanggal Lamar', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Tanggal Panggilan', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;

		 foreach ($model as $data) {
		 	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $data['nama_lengkap'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $data['pekerjaan'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $data['nama_perusahaan'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $data['tgl_lamar'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $data['tgl_panggilan'],1, 1, 'C');

	$no++;
	
	}

	$pdf->Output("laporan_surat.pdf","I");

	
	}

	/**
	 * Performs the AJAX validation.
	 * @param Lamaran $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lamaran-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
