<?php
/* @var $this BandsController */
/* @var $model bands */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_band'); ?>
		<?php echo $form->textField($model,'id_band'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_band'); ?>
		<?php echo $form->textArea($model,'name_band',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender_band'); ?>
		<?php echo $form->textArea($model,'gender_band',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_band'); ?>
		<?php echo $form->textArea($model,'desc_band',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code_band'); ?>
		<?php echo $form->textArea($model,'code_band',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->