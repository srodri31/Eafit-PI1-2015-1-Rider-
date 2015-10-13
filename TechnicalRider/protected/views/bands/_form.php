<?php
/* @var $this BandsController */
/* @var $model bands */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bands-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_band'); ?>
		<?php echo $form->textArea($model,'name_band',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name_band'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender_band'); ?>
		<?php echo $form->textArea($model,'gender_band',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gender_band'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_band'); ?>
		<?php echo $form->textArea($model,'desc_band',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc_band'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code_band'); ?>
		<?php echo $form->textArea($model,'code_band',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'code_band'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->