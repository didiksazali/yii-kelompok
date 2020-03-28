<?php
/* @var $this JenisKelaminController */
/* @var $model JenisKelamin */

$this->breadcrumbs=array(
	'Jenis Kelamins'=>array('index'),
	$model->id_jkel=>array('view','id'=>$model->id_jkel),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisKelamin', 'url'=>array('index')),
	array('label'=>'Create JenisKelamin', 'url'=>array('create')),
	array('label'=>'View JenisKelamin', 'url'=>array('view', 'id'=>$model->id_jkel)),
	array('label'=>'Manage JenisKelamin', 'url'=>array('admin')),
);
?>

<h1>Update JenisKelamin <?php echo $model->id_jkel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>