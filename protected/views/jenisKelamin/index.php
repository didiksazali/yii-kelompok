<?php
/* @var $this JenisKelaminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Kelamins',
);

$this->menu=array(
	array('label'=>'Create JenisKelamin', 'url'=>array('create')),
	array('label'=>'Manage JenisKelamin', 'url'=>array('admin')),
);
?>

<h1>Jenis Kelamins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
