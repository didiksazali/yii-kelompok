<?php
/* @var $this SiswaController */
/* @var $data Siswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_siswa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_siswa), array('view', 'id'=>$data->id_siswa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nis')); ?>:</b>
	<?php echo CHtml::encode($data->nis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agama')); ?>:</b>
	<?php echo CHtml::encode($data->idAgama->nama_agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jkel')); ?>:</b>
	<?php echo CHtml::encode($data->idJenisKelamin->nama_jkel); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jkel')); ?>:</b>
	<?php echo CHtml::encode($data->id_jkel); ?>
	<br />

	*/ ?>

</div>