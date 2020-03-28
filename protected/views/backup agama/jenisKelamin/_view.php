<?php
/* @var $this JenisKelaminController */
/* @var $data JenisKelamin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jkel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jkel), array('view', 'id'=>$data->id_jkel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jkel')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jkel); ?>
	<br />


</div>