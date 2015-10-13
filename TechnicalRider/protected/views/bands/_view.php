<?php
/* @var $this BandsController */
/* @var $data bands */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_band')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_band), array('view', 'id'=>$data->id_band)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_band')); ?>:</b>
	<?php echo CHtml::encode($data->name_band); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender_band')); ?>:</b>
	<?php echo CHtml::encode($data->gender_band); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_band')); ?>:</b>
	<?php echo CHtml::encode($data->desc_band); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_band')); ?>:</b>
	<?php echo CHtml::encode($data->code_band); ?>
	<br />


</div>