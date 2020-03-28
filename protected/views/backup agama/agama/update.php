<?php
/* @var $this AgamaController */
/* @var $model Agama */

$this->breadcrumbs=array(
	'Agamas'=>array('index'),
	$model->id_agama=>array('view','id'=>$model->id_agama),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agama', 'url'=>array('index')),
	array('label'=>'Create Agama', 'url'=>array('create')),
	array('label'=>'View Agama', 'url'=>array('view', 'id'=>$model->id_agama)),
	array('label'=>'Manage Agama', 'url'=>array('admin')),
);
?>

<h1>Update Agama <?php echo $model->id_agama; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>