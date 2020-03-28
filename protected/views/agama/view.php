<?php
/* @var $this AgamaController */
/* @var $model Agama */

$this->breadcrumbs=array(
	'Agamas'=>array('index'),
	$model->id_agama,
);

$this->menu=array(
	array('label'=>'List Agama', 'url'=>array('index')),
	array('label'=>'Create Agama', 'url'=>array('create')),
	array('label'=>'Update Agama', 'url'=>array('update', 'id'=>$model->id_agama)),
	array('label'=>'Delete Agama', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_agama),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Agama', 'url'=>array('admin')),
);
?>

<h1>View Agama #<?php echo $model->id_agama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_agama',
		'nama_agama',
	),
)); ?>
