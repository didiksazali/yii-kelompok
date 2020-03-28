<?php
/* @var $this AgamaController */
/* @var $model Agama */

$this->breadcrumbs=array(
	'Agamas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Agama', 'url'=>array('index')),
	array('label'=>'Manage Agama', 'url'=>array('admin')),
);
?>

<h1>Create Agama</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>