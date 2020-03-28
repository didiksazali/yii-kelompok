<?php
/* @var $this AgamaController */
/* @var $data Agama */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agama')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_agama), array('view', 'id'=>$data->id_agama)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_agama')); ?>:</b>
	<?php echo CHtml::encode($data->nama_agama); ?>
	<br />


</div>