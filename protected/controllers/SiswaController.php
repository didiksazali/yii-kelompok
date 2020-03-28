<?php

class SiswaController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('view'), 
				'users'=>array('*'),
			), /* Action index dan view boleh diakses oleh 
semua user (ditandai dengan tanda *) */

			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','create','update','cetakSiswa'),
				'users'=>array('@'),
			), /* Action create dan update boleh diakses 
oleh user yang login (ditandai dengan 
tanda @) */

			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			), /* Action admin dan delete boleh diakses 
oleh user dengan nama admin) */

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
		$model=new Siswa;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Siswa']))
		{
			$model->attributes=$_POST['Siswa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_siswa));
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

		if(isset($_POST['Siswa']))
		{
			$model->attributes=$_POST['Siswa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_siswa));
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
		$dataProvider=new CActiveDataProvider('Siswa');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Siswa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Siswa']))
			$model->attributes=$_GET['Siswa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionHaloboss ()
	{
		$pdf = new Halo('L','mm',array('215','330'));
		$pdf->cetakHaloBos(10);
	}

	public function actionCetakSiswa(){
		
		$pdf=new Laporan('L','mm',array('215','330'));
		$pdf->cetakSiswa();
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Siswa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Siswa::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Siswa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='siswa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
