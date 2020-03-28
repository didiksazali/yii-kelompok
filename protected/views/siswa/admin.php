<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswa'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Daftar Siswa', 'url'=>array('index')),
	array('label'=>'Tambah Siswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#siswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Siswa</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'siswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

array(
	'header'=>'#',
	'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',

	),
'nis',
'nama',
'alamat',
'tgl_lahir',

array(

'name'=>'id_agama',
'type'=>'raw',
'value'=>'$data->idAgama->nama_agama',
'filter'=>CHtml::listData(Agama::model()->findAll(),'id','nama'),
	),
array(

'name'=>'id_jkel',
'type'=>'raw',
'value'=>'$data->idJenisKelamin->nama_jkel',
'filter'=>CHtml::listData(Agama::model()->findAll(),'id','nama'),
	),


/*

		'id_siswa',
		'nis',
		'nama',
		'alamat',
		'tempat_lahir',
		'tgl_lahir',
		/*
		'id_agama',
		'id_jkel',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
