<?php
/* @var $this JenisKelaminController */
/* @var $model JenisKelamin */

$this->breadcrumbs=array(
	'Jenis Kelamins'=>array('index'),
	$model->id_jkel,
);

$this->menu=array(
	array('label'=>'List JenisKelamin', 'url'=>array('index')),
	array('label'=>'Create JenisKelamin', 'url'=>array('create')),
	array('label'=>'Update JenisKelamin', 'url'=>array('update', 'id'=>$model->id_jkel)),
	array('label'=>'Delete JenisKelamin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jkel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisKelamin', 'url'=>array('admin')),
);
?>

<h1>View JenisKelamin #<?php echo $model->id_jkel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jkel',
		'nama_jkel',
	),
)); ?>
