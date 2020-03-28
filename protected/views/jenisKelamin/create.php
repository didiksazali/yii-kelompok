<?php
/* @var $this JenisKelaminController */
/* @var $model JenisKelamin */

$this->breadcrumbs=array(
	'Jenis Kelamins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisKelamin', 'url'=>array('index')),
	array('label'=>'Manage JenisKelamin', 'url'=>array('admin')),
);
?>

<h1>Create JenisKelamin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>