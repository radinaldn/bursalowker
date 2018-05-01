<?php

class LowonganController extends Controller
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
				'actions'=>array('create','update','perusahaanSaya','viewPerusahaan','viewPelamar'),
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

	public function actionViewPerusahaan($id)
	{
		$model_data_pelamar = Lamaran::model()->getLamaranByPerusahaan($id);
		$this->render('view_perusahaan',array(
			'model'=>$this->loadModel($id),
			'model_data_pelamar'=>$model_data_pelamar,
		));
	}

	public function actionViewPelamar($id)
	{
		$this->render('view_pelamar',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Lowongan;

		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d");
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);



		if(isset($_POST['Lowongan']))
		{
			$model->attributes=$_POST['Lowongan'];

			$model->id_perusahaan=Yii::app()->session->get('id_perusahaan');
			$model->tgl_buat = $date;
			if($model->save())
				$this->redirect(array('viewPerusahaan','id'=>$model->id_lowongan));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Lowongan']))
		{
			$model->attributes=$_POST['Lowongan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_lowongan));
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

		$model = Lowongan::model()->getAllByPelamarJurusan(Yii::app()->session->get('id_jurusan'));
		$dataProvider=new CActiveDataProvider('Lowongan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$db=new Lowongan('search');
		$db->unsetAttributes();  // clear any default values
		if(isset($_GET['Lowongan']))
			$db->attributes=$_GET['Lowongan'];

		$model = Lowongan::model()->getAll();
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionPerusahaanSaya(){
		$model = Lowongan::model()->getAllByPk(Yii::app()->session->get('id_perusahaan'));
		
		$this->render('perusahaan',array(
			'model'=>$model,
			)); 
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Lowongan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Lowongan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Lowongan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lowongan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
