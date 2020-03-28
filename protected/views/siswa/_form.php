<?php
/* @var $this SiswaController */
/* @var $model Siswa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'siswa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nis'); ?>
		<?php echo $form->textField($model,'nis',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir');
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
		'model'=>$model, 
		'attribute'=>'tgl_lahir',
		'value'=>$model->tgl_lahir,
		'options'=>array(
		'showOn'=>'button',
		'language'=>'en',
		'model'=>$model,
		'options'=>array(
		'mode'=>'focus',
		'dateFormat'=>'yy-MM-dd',
		'showAnim'=>'slideDown'), ),
		'htmlOptions'=> array('size'=>20, 'class' => 'date') )
		);?>
		
		<?php echo $form->error($model,'tgl_lahir'); ?> 
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'id_agama'); ?>
	<?php echo $form->dropDownList($model,'id_agama', CHtml::listData(Agama::model()->findAll(),'id_agama','nama_agama')); ?>
	<?php echo $form->error($model,'id_agama'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'id_jkel'); ?>
	<?php echo $form->dropDownList($model,'id_jkel', CHtml::listData(JenisKelamin::model()->findAll(),'id_jkel','nama_jkel')); ?>
	<?php echo $form->error($model,'id_jkel'); ?>
	</div>

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'id_agama'); ?>
		<?php echo $form->textField($model,'id_agama'); ?>
		<?php echo $form->error($model,'id_agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jkel'); ?>
		<?php echo $form->textField($model,'id_jkel'); ?>
		<?php echo $form->error($model,'id_jkel'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->