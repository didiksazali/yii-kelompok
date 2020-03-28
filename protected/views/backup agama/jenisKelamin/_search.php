<?php
/* @var $this JenisKelaminController */
/* @var $model JenisKelamin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_jkel'); ?>
		<?php echo $form->textField($model,'id_jkel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_jkel'); ?>
		<?php echo $form->textField($model,'nama_jkel',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->